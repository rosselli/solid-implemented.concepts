<?php
namespace Principles\SingleResponsibility\Alura\After\Rules;

use Principles\SingleResponsibility\Alura\After\CalculateRule;
use Principles\SingleResponsibility\Alura\After\Employee;

class TenOrTwentyPercent implements CalculateRule {
	public function calculate(Employee $employee): float {
		if($employee->getSalary() > 3000) {
			return $employee->getSalary() * 0.8;
		}

		return $employee->getSalary() * 0.9;
    }
}
