<?php
namespace Principles\LiskovSubstitution\Wataridori;

class Rectangle {
    protected $width;
    protected $height;

    public function setHeight(int $height): void {
        $this->height = $height;
    }

    public function getHeight(): float {
        return $this->height;
    }

    public function setWidth(int $width): void {
        $this->width = $width;
    }

    public function getWidth(): float {
        return $this->width;
    }

    public function area(): float {
         return $this->height * $this->width;
    }
}
