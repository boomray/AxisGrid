<?php
/**
 * Tests for AxisGrid
 */

use PHPUnit\Framework\TestCase;
use Axisgrid\Axisgrid;

class AxisgridTest extends TestCase {
    private Axisgrid $instance;

    protected function setUp(): void {
        $this->instance = new Axisgrid(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Axisgrid::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
