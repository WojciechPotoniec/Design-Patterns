<?php

class MyPHPMailer
{
    // constructor property promotion nel costruttore dove associo la variabile $mail alla classe stdClass
    public function __construct(public $mail = new stdClass()){}

    
    public function sendMail()
    {
        echo 'L\'email è stata inviata con PHPMailer!';
    }
}