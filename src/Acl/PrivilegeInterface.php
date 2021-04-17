<?php

declare(strict_types=1);

namespace WpOop\WordPress\Acl;

use Dhii\Data\KeyAwareInterface;
use Stringable;

/**
 * Represents a role privilege.
 */
interface PrivilegeInterface extends KeyAwareInterface, Stringable
{
    public function getResource(): Stringable;

    /**
     * @param string $resourceKey The resource key, e.g. "posts".
     * @return string[] A list of capabilities, e.g. "create" or "read".
     */
    public function getCapabilitiesForResource(string $resourceKey): array;
}
