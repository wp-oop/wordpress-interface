<?php

declare(strict_types=1);

namespace WpOop\WordPress\Entity;

use WpOop\WordPress\Meta\MetaQueryInterface;
use WpOop\WordPress\Post\PostQueryInterface;
use WpOop\WordPress\Query\QueryInterface;
use WpOop\WordPress\Query\QueryResultInterface;
use WpOop\WordPress\Taxonomy\TermQueryInterface;

/**
 * Represents a query for entities.
 */
interface EntityQueryInterface extends QueryInterface
{
    /**
     * @return EntityQueryResultInterface
     */
    public function query(): QueryResultInterface;

    /**
     * @param iterable<int> $termIds
     * @return static
     */
    public function withIdIn(iterable $termIds): TermQueryInterface;

    /**
     * @param iterable<int> $termIds
     * @return static
     */
    public function withIdNotIn(iterable $termIds): TermQueryInterface;

    /**
     * @return static
     */
    public function withMeta(MetaQueryInterface $query): self;
}
