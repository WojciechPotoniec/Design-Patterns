<?php
require_once './lib/booking.php';
require_once './lib/BookingInstance.php';

$type = 'barca';

$booking = BookingInstance::getInstance($type);
$booking->price();