<?php
namespace Principles\DependencyInversion\Wataridori\After;

class SendWelcomeMessage {
    private $mailer;

    public function __construct(Mailer $mailer) {
        $this->mailer = $mailer;
    }
}
