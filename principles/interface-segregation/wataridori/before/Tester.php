<?php
namespace Principles\InterfaceSegregation\Wataridori\Before;

class Tester implements Workable {
    public function canCode(): bool {
        return false;
    }

    public function code(): string {
         throw new Exception('Opps! I can not code');
    }

    public function test(): string {
        return 'testing in test server';
    }
}
