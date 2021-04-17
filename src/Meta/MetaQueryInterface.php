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
     * @param string $key
     * @param string $value
     * @return static
     */
    public function withLt(string $key, string $value): self;

    /**
     * @param string $key
     * @param string $value
     * @return static
     */
    public function withLtEq(string $key, string $value): self;

    /**
     * @param string $key
     * @param string $value
     * @return static
     */
    public function withGt(string $key, string $value): self;

    /**
     * @param string $key
     * @param string $value
     * @return static
     */
    public function withGtEq(string $key, string $value): self;

    /**
     * @param string $key
     * @param string $value
     * @return static
     */
    public function withEq(string $key, string $value): self;

    /**
     * @param string $key
     * @param string $value
     * @return static
     */
    public function withNotEq(string $key, string $value): self;

    /**
     * Like
     *
     * @param string $key
     * @param string $value
     * @return static
     */
    public function withApprox(string $key, string $value): self;

    /**
     * Not like
     *
     * @param string $key
     * @param string $value
     * @return static
     */
    public function withNotApprox(string $key, string $value): self;

    /**
     * @param string $key
     * @param iterable<string> $values
     * @return static
     */
    public function withIn(string $key, iterable $values): self;

    /**
     * @param string $key
     * @param iterable<string> $values
     * @return static
     */
    public function withNotIn(string $key, iterable $values): self;

    /**
     * @param string $key
     * @param string $lowerBound
     * @param string $upperBound
     * @return static
     */
    public function withBetween(string $key, string $lowerBound, string $upperBound): self;

    /**
     * @param string $key
     * @param string $lowerBound
     * @param string $upperBound
     * @return static
     */
    public function withNotBetween(string $key, string $lowerBound, string $upperBound): self;

    /**
     * @param string $key
     * @param string $regexp
     * @return static
     */
    public function withRegexp(string $key, string $regexp): self;

    /**
     * @param string $key
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
