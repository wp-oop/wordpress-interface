<?php

declare(strict_types=1);

namespace WpOop\WordPress\Test\Stub\Gutenberg;

use WpOop\WordPress\Gutenberg\BlockParserInterface;

class BlockParser implements BlockParserInterface
{
    public $blocks = [];

    public function parseBlocks(string $postContent): array
    {
        return $this->blocks;
    }
}
