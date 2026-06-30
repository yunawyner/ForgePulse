<?php
/**
 * Tests for ForgePulse
 */

use PHPUnit\Framework\TestCase;
use Forgepulse\Forgepulse;

class ForgepulseTest extends TestCase {
    private Forgepulse $instance;

    protected function setUp(): void {
        $this->instance = new Forgepulse(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Forgepulse::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
