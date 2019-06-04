<?php
namespace Principles\DependencyInversion\Wataridori\Before;

class SendWelcomeMessage {
    private $mailer;

    public function __construct(Mailer $mailer) {
        $this->mailer = $mailer;
    }
}
