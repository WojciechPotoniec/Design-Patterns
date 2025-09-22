<?php
require_once './lib/BookingCamera.php';
require_once './lib/BookingAppartamento.php';
require_once './lib/BookingBarca.php';

class BookingInstance
{
    public static function getInstance($type)
    {
        // Metodo 1 con lo switch case che esegue un confronto non rigoroso ==
        // switch ($type) {
        //     case 'camera':
        //         return new BookingCamera();
        //         break;

        //     case 'appartamento':
        //         return new BookingAppartamento();
        //         break;

        //     case 'barca':
        //         return new BookingBarca();
        //         break;
        // }

        // Metodo 2 con l'espressione match che esegue un confronto rigoroso === e restituisce una variabile
        $booking = match ($type) {
            'camera' => new BookingCamera(),
            'appartamento' => new BookingAppartamento(),
            'barca' => new BookingBarca(),
            default => null
        };

        return $booking;
    }
}