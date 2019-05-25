<?php
namespace Tests;

require('vendor/autoload.php');

use PHPUnit\Framework\TestCase;
use Principles\SingleResponsibility\Wataridori\After\JsonReportFormatter;
use Principles\SingleResponsibility\Wataridori\After\Report as ReportAfter;
use Principles\SingleResponsibility\Wataridori\Before\Report as ReportBefore;

class SingleResponsibilityWataridoriTest extends TestCase {

	public function testBefore() {
		$report = new ReportBefore();
		$this->assertJson($report->formatJson());
	}

	public function testAfter() {
		$report = new ReportAfter();
		$json = new JsonReportFormatter();
		$this->assertJson($json->format($report));
	}

}
