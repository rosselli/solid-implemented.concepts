<?php
namespace Principles\SingleResponsibility\Alura\After;

class Employee {
        private $id;
        private $name;
        private $position;
        private $salary;

        public function __construct(Position $position, float $salary) {
            $this->position = $position;
            $this->salary = $salary;
        }

        public function getId(): int {
            return $this->id;
        }

        public function getName(): string {
            return $this->name;
        }

        public function getPosition(): Position {
            return $this->position;
        }

        public function getSalary(): float {
            return $this->salary;
        }

        public function setId(int $id): void {
            $this->id = $id;
        }

        public function setName(string $name): void {
            $this->name = $name;
        }

        public function calculateSalary(): float {
            return $this->getPosition()->getRule()->calculate($this);
        }
    }
