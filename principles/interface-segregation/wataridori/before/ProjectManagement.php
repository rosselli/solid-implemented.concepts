<?php
namespace Principles\InterfaceSegregation\Wataridori\Before;

class ProjectManagement {
    public function processCode(Workable $member): string {
        if ($member->canCode()) {
            return $member->code();
        } else
            return 'Not coding';
    }
}
