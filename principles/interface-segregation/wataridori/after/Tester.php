<?php
namespace Principles\InterfaceSegregation\Wataridori\After;

class Tester implements Testable {
    public function test(): string {
        return 'testing in test server';
    }
}
