<?php
namespace Principles\SingleResponsibility\Alura\Before;

class Employee {
        private $id;
        private $name;
        private $position;
        private $salary;

        public function getId() {
            return $this->id;
        }

        public function getName() {
            return $this->name;
        }

        public function getPosition() {
            return $this->position;
        }

        public function getSalary() {
            return $this->salary;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function setName($ame) {
            $this->name = $name;
        }

        public function setPosition(Position $position) {
            $this->position = $position;
        }

        public function setSalary($salary) {
            $this->salary = $salary;
        }
}
