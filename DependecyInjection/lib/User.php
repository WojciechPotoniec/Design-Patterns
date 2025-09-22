<?php

class User {
    // constructor property promotion nel costruttore
    public function __construct(private $mail) {}

    public function sendNotification() {
        $this->mail->sendMail();
    }
    
}