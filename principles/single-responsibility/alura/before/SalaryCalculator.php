<?php
namespace Principles\SingleResponsibility\Alura\Before;

use Principles\SingleResponsibility\Alura\Before\Positions\Dba;
use Principles\SingleResponsibility\Alura\Before\Positions\Developer;
use Principles\SingleResponsibility\Alura\Before\Positions\Tester;

class SalaryCalculator {

        public function calculate(Employee $employee): float {
            if($employee->getPosition() instanceof Developer) {
                return $this->tenOrTwentyPercent($employee);
            }
            else if($employee->getPosition() instanceof Tester || $employee->getPosition() instanceof Dba) {
                return $this->fifteenOrTwentyFivePercent($employee);
            }
        }

        private function tenOrTwentyPercent(Employee $employee): float {
            if($employee->getSalary() > 3000) {
                return $employee->getSalary() * 0.8;
            }

            return $employee->getSalary() * 0.9;
        }

        private function fifteenOrTwentyFivePercent(Employee $employee): float {
            if($employee->getSalary() > 2000) {
                return $employee->getSalary() * 0.75;
            }

            return $employee->getSalary() * 0.85;
        }
    }
