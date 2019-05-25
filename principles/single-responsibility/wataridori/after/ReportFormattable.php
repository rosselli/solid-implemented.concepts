<?php
namespace Principles\SingleResponsibility\Wataridori\After;

interface ReportFormattable {
    public function format(Report $report): string;
}
