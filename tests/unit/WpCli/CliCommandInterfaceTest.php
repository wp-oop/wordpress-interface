<?php


namespace WpOop\WordPress\Test\Unit\WpCli;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use WpOop\WordPress\WpCli\CliCommandInterface as Subject;

class CliCommandInterfaceTest extends TestCase
{
    protected function createSubject(): Subject
    {
        /** @var Subject&MockObject $subject */
        $subject = $this->getMockBuilder(Subject::class)
            ->getMock();

        return $subject;
    }

    public function testInstantiation(): void
    {
        $subject = $this->createSubject();

        $this->assertInstanceOf(Subject::class, $subject);
    }
}