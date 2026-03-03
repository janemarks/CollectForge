<?php
/**
 * Tests for CollectForge
 */

use PHPUnit\Framework\TestCase;
use Collectforge\Collectforge;

class CollectforgeTest extends TestCase {
    private Collectforge $instance;

    protected function setUp(): void {
        $this->instance = new Collectforge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Collectforge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
