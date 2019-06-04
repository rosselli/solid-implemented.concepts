<?php
namespace Tests;

use PHPUnit\Framework\TestCase;

class InterfaceSegregationTest extends TestCase {

	public function testBefore() {
//		$programmer = new Programmer();
//		$tester = new Tester();
//
//		$projectProgrammer = new ProjectManagement();
//		echo "Programmer: ".$projectProgrammer->processCode($programmer)."\n";
//
//		$projectTester = new ProjectManagement();
//		echo "Tester: ".$projectTester->processCode($tester)."\n";
		$this->assertTrue(true);
	}

	public function testAfter() {
//		$programmer = new Programmer();
//		$tester = new Tester();
//
//		$projectProgrammer = new ProjectManagement();
//		echo "Programmer Code: ".$projectProgrammer->processCode($programmer)."\n";
//		echo "Programmer Test: ".$projectProgrammer->processTest($programmer)."\n";
//
//		$projectTester = new ProjectManagement();
//// echo "Tester Code: ".$projectTester->processCode($tester)."\n"; # Uncaught TypeError: Argument 1 passed to ProjectManagement::processCode() must implement interface Codeable, instance of Tester given
//		echo "Tester Test: ".$projectTester->processTest($tester)."\n";

		$this->assertTrue(true);

	}

}
