<?php

declare(strict_types=1);

namespace WpOop\WordPress\Taxonomy;

use Dhii\Data\KeyAwareInterface;
use Dhii\Util\String\LabelAwareInterface;
use WpOop\WordPress\Entity\EntityInterface;

/**
 * Represents a WordPress taxonomy term.
 */
interface TermInterface extends EntityInterface, LabelAwareInterface, KeyAwareInterface
{
    public function getId(): int;

    public function getKey(): string;

    public function getLabel(): string;

    public function getDescription(): string;

    public function getTaxonomy(): TaxonomyInterface;
}
