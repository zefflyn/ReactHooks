<?php
/**
 * Tests for ReactHooks
 */

use PHPUnit\Framework\TestCase;
use Reacthooks\Reacthooks;

class ReacthooksTest extends TestCase {
    private Reacthooks $instance;

    protected function setUp(): void {
        $this->instance = new Reacthooks(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Reacthooks::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
