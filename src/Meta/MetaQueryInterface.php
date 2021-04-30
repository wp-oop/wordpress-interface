<?php

declare(strict_types=1);

namespace WpOop\WordPress\Meta;


use WpOop\WordPress\Query\ClauseQueryInterface;
use WpOop\WordPress\Query\QueryConfiguratorInterface;

/**
 * @psalm-type FieldConfig = array{key: string, value: mixed, compare: string, type: string}
 * @psalm-type MetaQueryConfig = array{relation: 'AND'|'OR', ...: FieldConfig|MetaQueryConfig}
 */

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
     * @param self $query The subquery query to add.
     * @return static
     */
    public function withQuery(QueryConfiguratorInterface $query): QueryConfiguratorInterface;

    /**
     * @return array The configuration for {@see WP_Meta_Query}.
     *               An array containing the `relation` key, as well as unlimited numeric keys each of which
     *               contains a {@see FieldConfig}.
     * @psalm-return MetaQueryConfig
     */
    public function getConfig(): array;
}