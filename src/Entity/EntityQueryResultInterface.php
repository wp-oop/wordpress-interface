<?php

declare(strict_types=1);

namespace WpOop\WordPress\Entity;

use WpOop\WordPress\Query\QueryResultInterface;

/**
 * Represents a WordPress post query result.
 *
 * @extends Traversable<EntityInterface>
 */
interface EntityQueryResultInterface extends QueryResultInterface
{
    /**
     * @return iterable<int>
     */
    public function getIds(): iterable;
}
