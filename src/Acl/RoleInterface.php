<?php
declare(strict_types=1);

namespace WpOop\WordPress\Acl;

use Dhii\Data\KeyAwareInterface;
use Stringable;

/**
 * Represents a WordPress user role.
 */
interface RoleInterface extends KeyAwareInterface, Stringable
{
    /**
     * @return iterable<string>
     */
    public function getPrivileges(): iterable;

    public function isAllowed(string $resourceKey, string $capability): bool;
}
