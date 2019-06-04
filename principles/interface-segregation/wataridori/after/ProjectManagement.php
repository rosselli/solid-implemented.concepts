<?php
namespace Principles\InterfaceSegregation\Wataridori\After;

class ProjectManagement {
    public function processCode(Codeable $member): string {
        return $member->code();
    }

    public function processTest(Testable $member): string {
        return $member->test();
    }
}
