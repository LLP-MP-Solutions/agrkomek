<?php

declare(strict_types=1);

namespace Qore\App\SynapseNodes\Components\Moderator;

use Qore\App\SynapseNodes\Components\ModeratorPermission\ModeratorPermission;
use Qore\Qore;
use Qore\SynapseManager\Structure\Entity\SynapseBaseEntity;
use Ramsey\Uuid\Uuid;

/**
 * Class: Moderator
 *
 * @see Qore\SynapseManager\Structure\Entity\SynapseBaseEntity
 */
class Moderator extends SynapseBaseEntity implements ModeratorInterface
{

    /**
     * Moderator permission
     *
     * @param string $_component
     *
     * @return \Qore\App\SynapseNodes\Components\ModeratorPermission\Manager\Forms\ModeratorPermission|null 
     */
    public function getPermission(string $_component): ?ModeratorPermission
    {
        $role = $this->role();

        if (is_null($role)) {
            return null;
        }

        $permissions = $role->permissions();

        if (is_null($permissions)) {
            return null;
        }

        return $permissions->firstMatch(['component' => $_component]);
    }

    /**
     * Check permission
     *
     * @param string $_component
     *
     * @return bool 
     */
    public function checkPermission(string $_component): bool
    {
        return ! is_null($this->getPermission($_component));
    }

    /**
     * Reset password
     *
     * @return UserInterface
     */
    public function resetPassword(): Moderator
    {
        $this['password'] = '';
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function generateToken(): string
    {
        return $this->token = sha1(Uuid::uuid4()->toString());
    }

    /**
     * Generate OTP
     *
     * @return UserInterface
     */
    public function generateOtp(): Moderator
    {
        $this['otp'] = rand(100000, 999999);
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getIdentity(): string
    {
        return $this->email;
    }

    /**
     * @inheritdoc
     */
    public function getRoles(): iterable
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    public function getDetail(string $name, $default = null)
    {
        return $this->firstname ?: $default;
    }

    /**
     * @inheritdoc
     */
    public function getDetails(): array
    {
        return [];
    }

    /**
     * subscribe
     *
     */
    public static function subscribe()
    {
        parent::subscribe();
        # - Generate password hash and username for user entity
        static::before('save', function($_event) {
            $user = $_event->getTarget();
            # - Generate password hash
            if ($user->password) {
                $passwordDetails = password_get_info($user->password);
                if (is_null($passwordDetails['algo'])) {
                    $user->password = password_hash($user->password, PASSWORD_DEFAULT);
                    $user['otp'] = null;
                }
            } elseif ($user->isNew()) {
                $user->generateOtp();
            }
            # - Genearate username
            if ($user->fullname) {
                $user->fullname = trim(preg_replace('/\s+/', ' ', $user->fullname));
                list($name1, $name2) = explode(' ', $user->fullname, 2);
                $user->username = sprintf(
                    '%s.%s',
                    mb_strtolower(Qore::service(Helper::class)->translit($name2)),
                    mb_strtolower(Qore::service(Helper::class)->translit($name1))
                );
            }
        });

        parent::subscribe();
    }

}
