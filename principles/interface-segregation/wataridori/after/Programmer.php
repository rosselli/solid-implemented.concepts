<?php
namespace Principles\InterfaceSegregation\Wataridori\After;

class Programmer implements Codeable, Testable {
    public function code(): string {
        return 'coding';
    }

    public function test(): string {
        return 'testing in localhost';
    }
}
