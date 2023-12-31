<?php

declare(strict_types=1);

namespace Qore\App\SynapseNodes\Components\User\Manager;

use Laminas\Db\TableGateway\TableGateway;
use Mezzio\Helper\UrlHelper;
use Qore\DealingManager\Result;
use Qore\DealingManager\ResultInterface;
use Qore\Form\Decorator\QoreFront;
use Qore\InterfaceGateway\Component\Modal;
use Qore\InterfaceGateway\InterfaceGateway;
use Qore\ORM\ModelManager;
use Qore\Qore as Qore;
use Qore\Router\RouteCollector;
use Qore\SynapseManager\Artificer\Decorator\ListComponent;
use Mezzio\Template\TemplateRendererInterface;
use Laminas\Diactoros\Response\HtmlResponse;
use Laminas\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Qore\App\SynapseNodes\Components\Machinery\Machinery;
use Qore\App\SynapseNodes\Components\User\User;
use Qore\SynapseManager\Artificer\Service\ServiceArtificer;
use Qore\SynapseManager\Plugin\FormMaker\FormMaker;
use Qore\SynapseManager\Plugin\RoutingHelper\RoutingHelper;
use Qore\SynapseManager\SynapseManager;

/**
 * Class: UserService
 *
 * @see Qore\SynapseManager\Artificer\Service\ServiceArtificer
 */
class UserService extends ServiceArtificer
{
    /**
     * sortable
     *
     * @var mixed
     */
    private $sortable = false;

    /**
     * serviceForm
     *
     * @var string
     */
    private $serviceForm = '';

    /**
     * @var \Qore\SynapseManager\Plugin\RoutingHelper\RoutingHelper
     */
    private RoutingHelper $routingHelper;

    /**
     * routes
     *
     * @param RouteCollector $_router
     */
    public function routes(RouteCollector $_router) : void
    {
        $this->routingHelper = $this->plugin(RoutingHelper::class);
        $_router->group('/user', null, function($_router) {
            $this->routingHelper->routesCrud($_router);
            $_router->get('/block/{id:\d+}', 'block');
            $_router->get('/machineries/{id:\d+}', 'machineries');
        });
        # - Register related subjects routes
        $this->registerSubjectsRoutes($_router);
    }

    /**
     * compile
     *
     */
    public function compile() : ?ResultInterface
    {
        /** @var RoutingHelper */
        $this->routingHelper = $this->plugin(RoutingHelper::class);
        list($method, $arguments) = $this->routingHelper->dispatch(['block', 'machineries']) ?? [null, null];

        return ! is_null($method) ? call_user_func_array([$this, $method], $arguments ?? []) : null;
    }

    /**
     * Get order option name in options storage array
     *
     * @return string
     */
    public function getOrderOptionName() : string
    {
        return sprintf('%s-order', $this->entity->synapse()->name);
    }

    /**
     * index
     *
     */
    protected function index($_reload = false)
    {
        $this->next->process($this->model);
        $request = $this->model->getRequest();

        $component = $this->getComponent(true);
        $ig = Qore::service(InterfaceGateway::class);

        if ($request->isXmlHttpRequest()) {
            return $this->response(
                [ $_reload ? $component : $ig('layout')->component($component) ]
            );
        } else {
            return $this->response(new HtmlResponse(Qore::service(TemplateRendererInterface::class)->render('app::main', [
                'title' => 'Сервис управления - Сервис управления',
                'frontProtocol' => $ig('layout')->component($component)->compose(),
            ])));
        }
    }

    /**
     * index
     *
     */
    protected function machineries()
    {
        $this->next->process($this->model);

        $routeResult = $this->model->getRouteResult();
        $routeParams = $routeResult->getMatchedParams();

        $user = $this->gateway([
            '@this.id' => $routeParams['id']
        ])->one();

        /**@var InterfaceGateway */
        $ig = Qore::service(InterfaceGateway::class);

        $machineriesComponent = $this->getMachineriesComponent($user);

        $modal = $ig(Modal::class, sprintf('%s.%s', get_class($this), 'modal-machinery'))
            ->setTitle(sprintf('Список объявлений пользователя %s', $user['firstname'] ?: $user['phone']))
            ->setOption('modal-type', 'rightside')
            ->setOption('size', 'xl')
            ->component($machineriesComponent);

        $modal->execute('open');
        # - Generate json response
        return $this->response($ig('layout')->component($modal));
    }

    /**
     * Machineries component
     *
     * @param \Qore\App\SynapseNodes\Components\User\User $_user 
     *
     * @return ListComponent
     */
    protected function getMachineriesComponent(User $_user)
    {
        $data = $this->mm('SM:Machinery')
            ->with('user')
            ->where(['@this.user.id' => $_user->id])
            ->select(fn($_select) => $_select->order('@this.__updated desc'))
            ->all();

        $sm = Qore::service(SynapseManager::class);

        $request = $this->model->getRequest();

        $machineryService = $sm('Machinery:Manager');
        $machineryService->setModel($this->model->setRequest($request->withQueryParams(['user-id' => $_user->id])));

        $component = $sm('Machinery:Manager')->presentAs(ListComponent::class, [
            'columns' => [
                'id' => [
                    'label' => '#',
                    'class-header' => 'col-1',
                    'class-column' => 'col-1',
                ],
                'title' => [
                    'label' => 'Название',
                    'class-header' => 'col-4',
                    'class-column' => 'col-4',
                ],
                'price' => [
                    'label' => 'Цена',
                    'class-header' => 'col-1',
                    'class-column' => 'col-1',
                ],
                'status' => [
                    'label' => 'Статус',
                    'class-header' => 'col-2',
                    'class-column' => 'col-2 text-center',
                    'transform' => function ($_item) {
                        if (! $_item['status']) {
                            return ['isLabel' => true, 'class' => 'bg-warning-light text-warning', 'label' => 'Не назначен'];
                        }

                        switch(true) {
                            case $_item['status'] === Machinery::STATUS_CHECKING:
                                return ['isLabel' => true, 'class' => 'bg-warning-light text-warning', 'label' => 'На проверке'];
                            case $_item['status'] === Machinery::STATUS_ACTIVE:
                                return ['isLabel' => true, 'class' => 'bg-info-light text-info', 'label' => 'Активно'];
                            case $_item['status'] === Machinery::STATUS_ARCHIVE:
                                return ['isLabel' => true, 'class' => 'bg-warning-light text-danger', 'label' => 'В архиве'];
                        }
                    },
                ],
                'type' => [
                    'label' => 'Тип',
                    'class-header' => 'col-1',
                    'class-column' => 'col-1 text-center',
                    'transform' => function ($_item) {
                        $types = Machinery::getTypes();
                        $type = Qore::collection($types)->firstMatch(['id' => $_item['type']]);

                        if (is_null($type)) {
                            return ['isLabel' => true, 'class' => 'bg-warning-light text-warning', 'label' => 'Неопределен'];
                        }

                        return ['isLabel' => true, 'class' => 'bg-info-light text-info', 'label' => $type['label']];
                    },
                ],
                'created' => [
                    'label' => 'Создано',
                    'class-header' => 'col-2',
                    'class-column' => 'col-2',
                    'transform' => function($_item) {
                        return $_item['__created']->format('d.m.Y H:i');
                    }
                ],
            ],
            'sortable' => false,
        ])->build($data);

        $component->setName("Qore\\App\\SynapseNodes\\Components\\Machinery\\Manager\\MachineryService");

        return $component;
    }

    /**
     * reorder
     *
     */
    protected function reorder()
    {
        $this->next->process($this->model);

        $request = $this->model->getRequest();
        $component = $this->getComponent();

        if ($request->getMethod() === 'POST'
            && $this->sortable && ! is_null($storage = $this->getOptionsStorage())) {
            # - Save data
            $requestData = $request->parseJsonBody();
            if (isset($requestData['data'])) {
                $storage['__options'] = array_merge($storage['__options'] ?? [], [
                    $this->getOrderOptionName() => $requestData['data']
                ]);
                $this->mm($storage)->save();
            }
        }

        return $this->response();
    }

    /**
     * runDelete
     *
     */
    protected function block()
    {
        $routeResult = $this->model->getRouteResult();
        $routeParams = $routeResult->getMatchedParams();
        $mm = Qore::service(ModelManager::class);

        $object = $this->gateway([
            '@this.id' => $routeParams['id']
        ])->one();

        if ((int)$object->blocked == 0) {
            $object->blocked = 1;
            $gateway = new TableGateway('oauth_access_tokens', $mm->getAdapter());
            $gateway->delete(['user_id' => $object->phone]);
        } else {
            $object->blocked = 0;
        }

        $this->mm($object)->save();

        $component = $this->getComponent();
        return $this->response([$component->execute('reload')]);
    }

    /**
     * Default action process
     *
     * @return ResultInterface
     */
    protected function default()
    {
        $this->next->process($this->model);

        return new Result([
            'response' => $this->getComponent(true)
        ]);
    }

    /**
     * getComponent
     *
     * @param mixed $_data
     */
    protected function getComponent($_data = null)
    {
        # - Формируем уникальный суффикс для имени компонента интерфейса
        $testFilters = $this->model->getFilters(true)->firstMatch([
            'referencePath' => '{relation.path}' # Example: {relation.path} => @this.id
        ]);

        return $this->presentAs(ListComponent::class, [
            'columns' => [
                'id' => [
                    'label' => '#',
                    'class-header' => 'col-1',
                    'class-column' => 'col-1',
                ],
                'phone' => [
                    'label' => 'Номер телефона',
                    'class-header' => 'col-3',
                    'class-column' => 'col-3',
                ],
                'firstname' => [
                    'label' => 'Имя',
                    'class-header' => 'col-3',
                    'class-column' => 'col-3',
                ],
                'code' => [
                    'label' => 'Код',
                    'class-header' => 'col-1',
                    'class-column' => 'col-1 text-center',
                    'transform' => function ($_item) {
                        return (int)$_item['code']
                            ? ['isLabel' => true, 'class' => 'bg-info-light text-info', 'label' => $_item['code']]
                            : ['isLabel' => true, 'class' => 'bg-warning-light text-success', 'label' => 'Авторизован'];
                    },
                ],
                'blocked' => [
                    'label' => 'Статус',
                    'class-header' => 'col-1',
                    'class-column' => 'col-1',
                    'transform' => function ($_item) {
                        return isset($_item['blocked']) && (int)$_item['blocked']
                            ? ['isLabel' => true, 'class' => 'bg-warning-light text-warning', 'label' => 'заблокирован']
                            : ['isLabel' => true, 'class' => 'bg-info-light text-info', 'label' => 'активный'];
                    },
                ],
                'created' => [
                    'label' => 'Зарегистрирован',
                    'class-header' => 'col-2',
                    'class-column' => 'col-2',
                    'transform' => function($_item) {
                        return $_item['__created']->format('d.m.Y H:i');
                    }
                ],
            ],
            'actions' => $this->getListActions(),
            'suffix' => $testFilters['filters']['id'] ?? null,
            'sortable' => $this->getSortableOptions(),
            'componentActions' => ['reload'],
        ])->build($_data);
    }

    /**
     * getListActions
     *
     */
    protected function getListActions()
    {
        return [
            'machineries' => [
                'label' => 'Список объявлений',
                'icon' => 'fas fa-tractor',
                'actionUri' => function($_data) {
                    return Qore::service(UrlHelper::class)->generate(
                        $this->getRouteName('machineries'),
                        ['id' => $_data['id']],
                    );
                },
            ],
            'block' => [
                'label' => 'Блокировать/Разблокировать',
                'icon' => 'fas fa-lock',
                'confirm' => function($_data) {
                    return [
                        'title' => 'Блокировка пользователя',
                        'message' => sprintf('Вы действительно хотите заблокировать пользователя "%s"?', $_data['firstname'] ?? $_data['phone'] ?? $_data->id)
                    ];
                },
                'actionUri' => function($_data) {
                    return Qore::service(UrlHelper::class)->generate(
                        $this->getRouteName('block'),
                        ['id' => $_data['id']],
                    );
                },
            ],
        ];

    }

    /**
     * getSortableOptions
     *
     */
    protected function getSortableOptions()
    {
        if (! $this->sortable) {
            return false;
        }

        $storage = $this->getOptionsStorage();
        return $storage['__options'][$this->getOrderOptionName()] ?? [];
    }

    /**
     * getOptionsStorage
     *
     */
    protected function getOptionsStorage()
    {
        $optionsStorage = null;
        if (isset($this->requestFilters['__idparent'])) {
            $optionsStorage = $this->getLocalGateway(['id' => (string)$this->requestFilters['__idparent']])->one();
        } else  {
            /**
                $filter = $this->model->getFilters(true)->firstMatch([
                    'namespace' => sprintf('%s.%s', $this->getNameIdentifier(), '{RelatedSynapse:Service}'),
                ]);

                if (isset($filter['filters']['id'])) {
                    $optionsStorage = $this->mm('{RelatedSynapse}')->where(function($_where) use ($filter) {
                        $_where(['id' => (string)$filter['filters']['id']]);
                    })->one();
                }
            */
        }

        return $optionsStorage;
    }

}
