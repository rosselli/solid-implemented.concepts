<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use Principles\LiskovSubstitution\Wataridori\Rectangle;
use Principles\LiskovSubstitution\Wataridori\RectangleTest;
use Principles\LiskovSubstitution\Wataridori\Square;

class LiskovSubstitutionTest extends TestCase {

	public function testRectangle() {
		$rectangle = new Rectangle();
		$testRectangle = new RectangleTest($rectangle);
		$this->assertEquals(6, $testRectangle->testArea());
	}

	public function testSquare() {
		$square = new Square();
		$testSquare = new RectangleTest($square);
		$this->assertEquals(9, $testSquare->testArea());
	}
}
