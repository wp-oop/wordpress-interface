<?php
declare(strict_types=1);

namespace WpOop\WordPress\Acl;

/**
 * Represents a user who may have certain privileges.
 */
interface CapableUserInterface
{
    public function isAllowed(string $resourceKey, string $capability): bool;
}
