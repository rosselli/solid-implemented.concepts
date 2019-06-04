<?php
namespace Principles\InterfaceSegregation\Wataridori\Before;

interface Workable {
    public function canCode(): string;
    public function code(): string;
    public function test(): string;
}
