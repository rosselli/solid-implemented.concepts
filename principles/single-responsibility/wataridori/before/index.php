<?php
require('../../../../vendor/autoload.php');

use Principles\SingleResponsibility\Wataridori\Before\Report;

$report = new Report();
echo $report->formatJson().PHP_EOL;
