<?php
namespace Principles\SingleResponsibility\Wataridori\After;

class Report {
    public function getTitle(): string {
        return 'Report Title';
    }

    public function getDate(): string {
        return '2016-04-21';
    }
    
    public function getContents(): array {
        return [
            'title' => $this->getTitle(),
            'date' => $this->getDate(),
        ];
    }
}
