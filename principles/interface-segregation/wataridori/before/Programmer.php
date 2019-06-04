<?php
namespace Principles\InterfaceSegregation\Wataridori\Before;

class Programmer implements Workable {
    public function canCode(): bool {
        return true;
    }

    public function code(): string {
        return 'coding';
    }

    public function test(): string {
        return 'testing in localhost';
    }
}
