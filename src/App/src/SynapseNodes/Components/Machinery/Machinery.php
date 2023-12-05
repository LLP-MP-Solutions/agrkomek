<?php

declare(strict_types=1);

namespace Qore\App\SynapseNodes\Components\Machinery;

use Qore\Qore;
use Qore\SynapseManager\Structure\Entity\SynapseBaseEntity;

/**
 * Class: Machinery
 *
 * @see Qore\SynapseManager\Structure\Entity\SynapseBaseEntity
 */
class Machinery extends SynapseBaseEntity
{
    /**
     * subscribe
     *
     */
    public static function subscribe()
    {
        parent::subscribe();

        static::before('save', function($_event) {
            $entity = $_event->getTarget();
            $entity->content = is_string($entity->content) 
                ? $entity->content 
                : json_encode($entity->content, JSON_UNESCAPED_UNICODE);
        });

        static::after('save', $func = function($_event) {
            $entity = $_event->getTarget();
            $entity->content = is_string($entity->content) 
                ? json_decode($entity->content, true) 
                : $entity->content;
        });

        static::after('initialize', $func);

    }

}