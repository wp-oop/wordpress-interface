<?php

namespace WpOop\WordPress\Test\Unit\Gutenberg;

use PHPUnit\Framework\TestCase;
use WpOop\WordPress\Gutenberg\BlockParserInterface;
use WpOop\WordPress\Test\Stub\Gutenberg\Block;
use WpOop\WordPress\Test\Stub\Gutenberg\BlockParser;

class BlockParserInterfaceTest extends TestCase
{
    public function testUsage()
    {
        $subject = new BlockParser();

        $this->assertInstanceOf(BlockParserInterface::class, $subject);

        $blocks = [
            new Block('core/paragraph', [], [], '', []),
            new Block('core/quote', [], [], '', []),
        ];
        $subject->blocks = $blocks;

        $ret = $subject->parseBlocks('wp post content');

        $this->assertEquals($blocks, $ret);
    }
}
