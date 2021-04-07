<?php

declare(strict_types=1);

namespace WpOop\WordPress\Test\Stub\Gutenberg;

use WpOop\WordPress\Gutenberg\BlockInterface;

class Block implements BlockInterface
{
    protected $blockName;

    protected $attributes;

    protected $innerBlocks;

    protected $innerHtml;

    protected $innerContent;

    public function __construct(
        string $blockName,
        array $attributes,
        array $innerBlocks,
        string $innerHtml,
        array $innerContent
    ) {
        $this->blockName = $blockName;
        $this->attributes = $attributes;
        $this->innerBlocks = $innerBlocks;
        $this->innerHtml = $innerHtml;
        $this->innerContent = $innerContent;
    }

    public function getBlockName(): string
    {
        return $this->blockName;
    }

    public function getAttributes(): array
    {
        return $this->attributes;
    }

    public function getInnerBlocks(): array
    {
        return $this->innerBlocks;
    }

    public function getInnerHtml(): string
    {
        return $this->innerHtml;
    }

    public function getInnerContent(): array
    {
        return $this->innerContent;
    }
}
