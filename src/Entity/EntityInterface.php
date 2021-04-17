<?php

declare(strict_types=1);

namespace WpOop\WordPress\Entity;

use Dhii\Collection\MapInterface;
use Dhii\Data\IdAwareInterface;

/**
 * Represents a WordPress entity, a.k.a. "object".
 */
interface EntityInterface extends IdAwareInterface
{
    public function getEntityType(): string;

    public function getAttributes(): MapInterface;

    public function getQuery(): EntityQueryInterface;
}
