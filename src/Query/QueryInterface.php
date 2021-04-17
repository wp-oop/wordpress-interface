<?php

declare(strict_types=1);

namespace WpOop\WordPress\Query;

/**
 * Represents a generic query.
 */
interface QueryInterface
{
    public function query(): QueryResultInterface;

    /**
     * @return static
     */
    public function withLimit(int $limit): self;

    /**
     * @return static
     */
    public function withOffset(int $offset): self;
}
