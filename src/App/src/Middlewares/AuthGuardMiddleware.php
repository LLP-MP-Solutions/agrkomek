<?php

declare(strict_types=1);

namespace Qore\App\Middlewares;

use Qore\Qore;
use Qore\Middleware\BaseMiddleware;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Laminas\Diactoros\Response\RedirectResponse;
use Laminas\Diactoros\Response\JsonResponse;
use Mezzio\Helper\UrlHelper;
use Qore\App\Services\UserStack\UserStackInterface;
use Qore\Tracking\TrackingInterface;

/**
 * Class: AuthGuardMiddleware
 *
 * @see BaseMiddleware
 */
class AuthGuardMiddleware extends BaseMiddleware
{
    /**
     * process
     *
     * @param ServerRequestInterface $request
     * @param DelegateInterface $delegate
     */
    public function process(ServerRequestInterface $_request, RequestHandlerInterface $_handler) : ResponseInterface
    {
        /** @var UserStackInterface */
        $userStack = Qore::service(UserStackInterface::class);

        if ($user = $this->authService->getIdentity()) {
            return $userStack($user, function ($_user) use ($_handler, $_request) {
                return $_handler->handle($_request->withAttribute('admin', $_user));
            });
        }
        
        return $_handler->handle($_request->withAttribute('admin', null));
    }

}
