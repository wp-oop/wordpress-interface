<?php

declare(strict_types=1);

namespace WpOop\WordPress\Entity;

use Dhii\Collection\CountableListInterface;
use Traversable;

/**
 * Represents a WordPress post query result.
 *
 * @extends Traversable<EntityInterface>
 */
interface EntityQueryResultInterface extends Traversable, CountableListInterface
{
    /**
     * The total number of items found on all pages.
     *
     */
    public function getTotalCount(): int;

    /**
     * @return iterable<int>
     */
    public function getIds(): iterable;
}
