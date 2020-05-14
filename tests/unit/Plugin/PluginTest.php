<?php

namespace WpOop\WordPress\Test\Unit\Plugin;

use Dhii\Package\PackageInterface;
use Dhii\Util\String\DescriptionAwareInterface;
use Dhii\Util\String\TitleAwareInterface;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use WpOop\WordPress\Plugin\PluginInterface as Subject;

class PluginTest extends TestCase
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
            $this->assertInstanceOf(PackageInterface::class, $subject);
            $this->assertInstanceOf(TitleAwareInterface::class, $subject);
            $this->assertInstanceOf(DescriptionAwareInterface::class, $subject);
        }
    }
}
