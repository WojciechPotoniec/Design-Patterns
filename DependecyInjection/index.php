<?php
require_once './lib/myPHPMailer.php';
require_once './lib/User.php';

$mail = new MyPHPMailer();

$user = new User($mail);

$user->sendNotification();