<?php
require_once './lib/booking.php';

Class BookingBarca extends Booking
{
    public function price() {
        echo 'prezzo fitto barca 200 euro';
    }
}