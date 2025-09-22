<?php
require_once './lib/booking.php';

Class BookingAppartamento extends Booking
{
    public function price() {
        echo 'prezzo appartamento 70 euro';
    }
}