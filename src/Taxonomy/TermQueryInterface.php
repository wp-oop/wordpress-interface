<?php

declare(strict_types=1);

namespace WpOop\WordPress\Taxonomy;

use WpOop\WordPress\Meta\MetaQueryInterface;
use WpOop\WordPress\Entity\EntityQueryInterface;
use WpOop\WordPress\Query\QueryResultInterface;

/**
 * Represents a query for WordPress terms.
 */
interface TermQueryInterface extends EntityQueryInterface
{
    /**
     * @return TermQueryResultInterface
     */
    public function query(): QueryResultInterface;

    /**
     * @return static
     */
    public function withEntityType(string $type): TermQueryInterface;

    /**
     * @param iterable<string> $taxonomyKeys
     * @return static
     */
    public function withTaxonomyIn(iterable $taxonomyKeys): TermQueryInterface;

    /**
     * @param iterable<int> $objectIds
     * @return static
     */
    public function withObjectIdIn(iterable $objectIds): TermQueryInterface;

    /**
     * @param iterable<int> $objectIds
     * @return static
     */
    public function withObjectIdNotIn(iterable $objectIds): TermQueryInterface;

    /**
     * @param iterable<int> $termIds
     * @return static
     */
    public function withIdNotInTreesOf(iterable $termIds): TermQueryInterface;

    /**
     * @param iterable<string> $keys
     * @return static
     */
    public function withKeyIn(iterable $keys): TermQueryInterface;

    /**
     * @param iterable<string> $labels
     * @return static
     */
    public function withLabelIn(iterable $labels): TermQueryInterface;

    /**
     * @return static
     */
    public function withIsHierarchical(bool $isHierarchical): TermQueryInterface;

    /**
     * @param string $keyOrLabelPart The part of the key or label that the terms have to match.
     * @return static
     */
    public function withKeyOrLabelLike(string $keyOrLabelPart): TermQueryInterface;

    /**
     * @return static
     */
    public function withLabelLike(string $labelPart): TermQueryInterface;

    /**
     * @return static
     */
    public function withDescriptionLike(string $descriptionPart): TermQueryInterface;

    /**
     * @return static
     */
    public function withParentId(int $termId): TermQueryInterface;

    /**
     */
    public function withMeta(MetaQueryInterface $query): TermQueryInterface;
}
