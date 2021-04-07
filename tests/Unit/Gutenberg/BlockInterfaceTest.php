<?php

namespace WpOop\WordPress\Test\Unit\Gutenberg;

use PHPUnit\Framework\TestCase;
use WpOop\WordPress\Test\Stub\Gutenberg\Block;

class BlockInterfaceTest extends TestCase
{
    public function testUsage()
    {
        $innerBlock = new Block('core/quote', [], [], '', []);
        $subject = new Block(
            'core/paragraph',
            ['foo' => 'bar', 'foobar' => 42],
            [$innerBlock],
            'html',
            ['content', null, 'content2']
        );

        $this->assertInstanceOf(Block::class, $subject);

        $this->assertEquals('core/paragraph', $subject->getBlockName());
        $this->assertEquals(['foo' => 'bar', 'foobar' => 42], $subject->getAttributes());
        $this->assertEquals([$innerBlock], $subject->getInnerBlocks());
        $this->assertEquals('html', $subject->getInnerHtml());
        $this->assertEquals(['content', null, 'content2'], $subject->getInnerContent());
    }
}
