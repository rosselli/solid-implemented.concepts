<?php
namespace Tests;

require('vendor/autoload.php');

use PHPUnit\Framework\TestCase;
use Principles\SingleResponsibility\Alura\After\Employee as EmployeeAfter;
use Principles\SingleResponsibility\Alura\After\Positions\Developer as DeveloperAfter;
use Principles\SingleResponsibility\Alura\After\Rules\TenOrTwentyPercent;
use Principles\SingleResponsibility\Alura\After\SalaryCalculator as SalaryCalculatorAfter;
use Principles\SingleResponsibility\Alura\Before\Employee as EmployeeBefore;
use Principles\SingleResponsibility\Alura\Before\Positions\Developer as DeveloperBefore;
use Principles\SingleResponsibility\Alura\Before\SalaryCalculator as SalaryCalculatorBefore;

class SingleResponsibilityAluraTest extends TestCase {

	public function testBefore() {
		$employee = new EmployeeBefore();
		$employee->setSalary(3100);
		$employee->setPosition(new DeveloperBefore());
		$calculator = new SalaryCalculatorBefore();
		$this->assertEquals(2480, $calculator->calculate($employee));
	}

	public function testAfter() {
		$rule = new TenOrTwentyPercent();
		$employee = new EmployeeAfter(new DeveloperAfter($rule), 3100);
		$calculator = new SalaryCalculatorAfter();
		$this->assertEquals(2480, $calculator->calculate($employee));
	}

}
