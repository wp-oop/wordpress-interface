<?php
declare(strict_types=1);

namespace WpOop\WordPress\Post;

use WpOop\WordPress\Entity\EntityQueryInterface;
use WpOop\WordPress\Entity\EntityQueryResultInterface;
use WpOop\WordPress\Meta\MetaQueryInterface;

/**
 * Represents a WordPress post query.
 */
interface PostQueryInterface extends EntityQueryInterface
{
    /**
     * @return PostQueryResultInterface
     */
    public function query(): EntityQueryResultInterface;

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

    /**
     * @param MetaQueryInterface $query
     * @return static
     */
    public function withMeta(MetaQueryInterface $query): self;
}
