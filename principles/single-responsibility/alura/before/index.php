<?php
require('vendor/autoload.php');

$f = new Employee();
$f->setSalary(3100);
$f->setPosition(new Developer());
$calculator = new SalaryCalculator();
echo $calculator->calculate($f).PHP_EOL;
