<?php
require_once './lib/booking.php';
require_once './lib/BookingInstance.php';

$type = 'camera';

$booking = BookingInstance::getInstance($type);
$booking->price();