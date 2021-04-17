<?php
declare(strict_types=1);

namespace WpOop\WordPress\Taxonomy;

use Dhii\Util\String\DescriptionAwareInterface;
use Dhii\Util\String\LabelAwareInterface;

/**
 * Represents a WordPress taxonomy.
 */
interface TaxonomyInterface extends LabelAwareInterface, DescriptionAwareInterface
{
    public function getKey(): string;

    public function getLabel(): string;

    public function getDescription(): string;

    public function getIsPublic(): bool;

    public function getIsHierarchical(): bool;

    /**
     * @return TermQueryInterface A term query set to retrieve terms for this taxonomy.
     */
    public function getTermQuery(): TermQueryInterface;
}
