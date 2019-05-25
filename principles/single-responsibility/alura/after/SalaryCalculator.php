<?php
namespace Principles\SingleResponsibility\Alura\After;

class SalaryCalculator {

    public function calculate(Employee $employee): float {
    	return $employee->calculateSalary();
    }
}
