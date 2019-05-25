<?php
require('vendor/autoload.php')

$employee = new Employee(new Developer(new TenOrTwentyPercent()), 3100);
$calculator = new SalaryCalculator();
echo $calculator->calculate($employee).PHP_EOL;
