<?php
namespace Principles\SingleResponsibility\Wataridori\After;

class JsonReportFormatter implements ReportFormattable {
    public function format(Report $report): string {
        return json_encode($report->getContents());
    }
}
