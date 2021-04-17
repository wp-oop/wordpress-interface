<?php
declare(strict_types=1);

namespace WpOop\WordPress\User;

use DateTimeInterface;
use Psr\Http\Message\UriInterface;
use WpOop\WordPress\Acl\CapableUserInterface;
use WpOop\WordPress\Acl\RoleInterface;
use WpOop\WordPress\Entity\EntityInterface;

/**
 * Represents a WordPress user.
 */
interface UserInterface extends EntityInterface, CapableUserInterface
{
    public function getLogin(): int;

    public function getPassword(): string;

    public function getUsername(): string;

    public function getEmail(): string;

    public function getUrl(): UriInterface;

    public function getCreatedAt(): DateTimeInterface;

    public function getActivationKey(): string;

    /**
     * @return iterable<RoleInterface>
     */
    public function getRoles(): iterable;
}
