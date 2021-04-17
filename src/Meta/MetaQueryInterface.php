<?php

declare(strict_types=1);

namespace WpOop\WordPress\Meta;


use WpOop\WordPress\Query\ClauseQueryInterface;
use WpOop\WordPress\Query\QueryConfiguratorInterface;

/**
 * Represents a WordPress meta query.
 */
interface MetaQueryInterface extends ClauseQueryInterface
{
    /**
     * @return static
     */
    public function withExists(string $key): self;

    /**
     * @param self $query
     * @return static
     */
    public function withAnd(QueryConfiguratorInterface $query): QueryConfiguratorInterface;

    /**
     * @param self $query
     * @return static
     */
    public function withOr(QueryConfiguratorInterface $query): QueryConfiguratorInterface;
}
