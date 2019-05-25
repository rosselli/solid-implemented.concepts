<?php
namespace Principles\SingleResponsibility\Alura\After\Rules;

use Principles\SingleResponsibility\Alura\After\CalculateRule;
use Principles\SingleResponsibility\Alura\After\Employee;


class FifteenOrTwentyFivePercent implements CalculateRule {
	public function calculate(Employee $employee): float {
		if($employee->getSalary() > 2000) {
			return $employeeop->getSalary() * 0.75;
		}

		return $employee->getSalary() * 0.85;
    }
}
