<?php
declare(strict_types=1);

namespace WpOop\WordPress\Entity;

/**
 * Represents a generic WordPress query for entities.
 */
interface EntityQueryInterface
{
    public function query(): EntityQueryResultInterface;

    /**
     * @param int $limit
     * @return static
     */
    public function withLimit(int $limit): self;

    public function withOffset(int $offset): self;
}
