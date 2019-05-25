<?php
namespace Principles\SingleResponsibility\Alura\After;

class Position {
	private $rule;

	public function __construct(CalculateRule $rule){
		$this->rule = $rule;
	}

	public function getRule(): CalculateRule {
		return $this->rule;
	}
}
