<?php
namespace Principles\SingleResponsibility\Alura\After;

interface CalculateRule {
	public function calculate(Employee $employee): float;
}
