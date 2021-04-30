<?php

namespace WpOop\WordPress\Test\Unit\Gutenberg;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use WpOop\WordPress\Gutenberg\BlockInterface as Subject;

class BlockInterfaceTest extends TestCase
{
    /**
     * @return Subject|MockObject
     */
    protected function createSubject(): Subject
    {
        $mock = $this->getMockBuilder(Subject::class)
            ->getMock();

        return $mock;
    }

    public function testInstantiation()
    {
        {
            $subject = $this->createSubject();
        }

        {
            $this->assertInstanceOf(Subject::class, $subject);
        }
    }
}
