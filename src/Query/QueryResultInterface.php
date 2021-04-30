<?php

declare(strict_types=1);

namespace WpOop\WordPress\Query;

use Dhii\Collection\CountableListInterface;
use Dhii\Collection\MapInterface;
use Traversable;

/**
 * Represents a generic query result.
 *
 * @extends Traversable<MapInterface>
 */
interface QueryResultInterface extends Traversable, CountableListInterface
{
    /**
     * The total number of items found on all pages.
     *
     */
    public function getTotalCount(): int;
}
