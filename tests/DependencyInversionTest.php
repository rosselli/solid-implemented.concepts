<?php
namespace Tests;

use PHPUnit\Framework\TestCase;

class DependencyInversionTest extends TestCase {

	public function testBefore() {
//		$message = new SendWelcomeMessage(new Mailer);
//		var_dump($message);
		$this->assertTrue(true);
	}

	public function testAfter() {
//		$messageSmtp = new SendWelcomeMessage(new SmtpMailer);
//		var_dump($messageSmtp);
//
//		$messageSendGrid = new SendWelcomeMessage(new SendGridMailer);
//		var_dump($messageSendGrid);

		$this->assertTrue(true);

	}

}
