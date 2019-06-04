<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use Principles\OpenClosed\Wataridori\Before\Programmer as ProgrammerBefore;
use Principles\OpenClosed\Wataridori\Before\ProjectManagement as ProjectManagementBefore;
use Principles\OpenClosed\Wataridori\After\Programmer as ProgrammerAfter;
use Principles\OpenClosed\Wataridori\After\ProjectManagement as ProjectManagementAfter;

class OpenClosedTest extends TestCase {

	public function testBefore() {
		$project = new ProjectManagementBefore();
		$programmer = new ProgrammerBefore();
		$this->assertSame('coding', $project->process($programmer));
	}

	public function testAfter() {
		$project = new ProjectManagementAfter();
		$programmer = new ProgrammerAfter();
		$this->assertSame('coding', $project->process($programmer));
	}
}
