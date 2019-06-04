<?php
namespace Principles\OpenClosed\Wataridori\After;

class ProjectManagement {
    public function process(Workable $member) {
        return $member->work();
    }
}
