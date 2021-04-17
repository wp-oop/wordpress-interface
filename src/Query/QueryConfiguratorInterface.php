<?php

declare(strict_types=1);

namespace WpOop\WordPress\Query;

use DateTimeInterface;
use WpOop\WordPress\Meta\MetaQueryInterface;

/**
 * Represents a query that can be built.
 */
interface QueryConfiguratorInterface
{
    /**
     * @return static
     */
    public function withLt(string $key, string $value): self;

    /**
     * @return static
     */
    public function withLtEq(string $key, string $value): self;

    /**
     * @return static
     */
    public function withGt(string $key, string $value): self;

    /**
     * @return static
     */
    public function withGtEq(string $key, string $value): self;

    /**
     * @return static
     */
    public function withEq(string $key, string $value): self;

    /**
     * @return static
     */
    public function withNotEq(string $key, string $value): self;

    /**
     * Like
     *
     * @return static
     */
    public function withApprox(string $key, string $value): self;

    /**
     * Not like
     *
     * @return static
     */
    public function withNotApprox(string $key, string $value): self;

    /**
     * @param iterable<string> $values
     * @return static
     */
    public function withIn(string $key, iterable $values): self;

    /**
     * @param iterable<string> $values
     * @return static
     */
    public function withNotIn(string $key, iterable $values): self;

    /**
     * @param numeric|string|DateTimeInterface $lowerBound
     * @param numeric|string|DateTimeInterface $upperBound
     * @return static
     */
    public function withBetween(string $key, $lowerBound, $upperBound): self;

    /**
     * @param numeric|string|DateTimeInterface $lowerBound
     * @param numeric|string|DateTimeInterface $upperBound
     * @return static
     */
    public function withNotBetween(string $key, $lowerBound,  $upperBound): self;

    /**
     * @return static
     */
    public function withRegexp(string $key, string $regexp): self;


    /**
     * @param self $query The query to add a relationship with.
     * @return static
     */
    public function withAnd(QueryConfiguratorInterface $query): self;

    /**
     * @param self $query The query to add a relationship with.
     * @return static
     */
    public function withOr(QueryConfiguratorInterface $query): self;
}
