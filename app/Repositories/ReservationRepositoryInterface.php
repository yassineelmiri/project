<?php

namespace App\Repositories;

interface ReservationRepositoryInterface
{
    public function createReservation(array $data);
    public function deleteReservation($roomId);
}
