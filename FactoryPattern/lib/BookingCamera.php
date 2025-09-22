<?php
require_once './lib/booking.php';

Class BookingCamera extends Booking
{
    public function price() {
        echo 'prezzo camera 40 euro';
    }
}