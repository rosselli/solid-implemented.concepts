<?php
namespace Principles\LiskovSubstitution\Wataridori;

class RectangleTest {
    private $rectangle;

    public function __construct(Rectangle $rectangle) {
        $this->rectangle = $rectangle;
    }

    public function testArea() {
        $this->rectangle->setHeight(2);
        $this->rectangle->setWidth(3);
        return $this->rectangle->area();
    }
}
