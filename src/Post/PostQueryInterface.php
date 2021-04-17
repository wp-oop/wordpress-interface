<?php

declare(strict_types=1);

namespace WpOop\WordPress\Post;

use WpOop\WordPress\Entity\EntityQueryInterface;
use WpOop\WordPress\Entity\EntityQueryResultInterface;
use WpOop\WordPress\Meta\MetaQueryInterface;
use WpOop\WordPress\Query\QueryResultInterface;

/**
 * Represents a WordPress post query.
 */
interface PostQueryInterface extends EntityQueryInterface
{
    /**
     * @return PostQueryResultInterface
     */
    public function query(): QueryResultInterface;

    /**
     * @param int[] $ids
     * @return static
     */
    public function withAuthorIdIn(array $ids): self;

    /**
     * @param int[] $ids
     * @return static
     */
    public function withAuthorIdNotIn(array $ids): self;
}
