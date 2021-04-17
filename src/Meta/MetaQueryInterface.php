<?php

declare(strict_types=1);

namespace WpOop\WordPress\Meta;

use WpOop\WordPress\Entity\EntityQueryInterface;

/**
 * Represents a WordPress meta query.
 */
interface MetaQueryInterface extends EntityQueryInterface
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
     * @return static
     */
    public function withBetween(string $key, string $lowerBound, string $upperBound): self;

    /**
     * @return static
     */
    public function withNotBetween(string $key, string $lowerBound, string $upperBound): self;

    /**
     * @return static
     */
    public function withRegexp(string $key, string $regexp): self;

    /**
     * @return static
     */
    public function withExists(string $key): self;

    /**
     * @param MetaQueryInterface $query The query to add a relationship with.
     * @return static
     */
    public function withAnd(MetaQueryInterface $query): self;

    /**
     * @param MetaQueryInterface $query The query to add a relationship with.
     * @return static
     */
    public function withOr(MetaQueryInterface $query): self;

    public function getJoinClause(): string;

    public function getWhereClause(): string;
}
