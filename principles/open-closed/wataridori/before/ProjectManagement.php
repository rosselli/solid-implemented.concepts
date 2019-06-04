<?php
namespace Principles\OpenClosed\Wataridori\Before;

class ProjectManagement {
    public function process($member): string {
        if ($member instanceof Programmer) {
            return $member->code();
        } elseif ($member instanceof Tester) {
            return $member->test();
        }
        throw new Exception('Invalid input member');
    }
}
