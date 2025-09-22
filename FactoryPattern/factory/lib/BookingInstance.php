<?php
require_once './lib/BookingCamera.php';
require_once './lib/BookingAppartamento.php';
require_once './lib/BookingBarca.php';

class BookingInstance
{
    public static function getInstance($type)
    {
        switch ($type) {
            case 'camera':
                return new BookingCamera();
                break;

            case 'appartamento':
                return new BookingAppartamento();
                break;

            case 'barca':
                return new BookingBarca();
                break;
        }
    }
}