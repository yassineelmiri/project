<?php

namespace App\Repositories;
use App\Models\reservations;


class ReservationRepository implements ReservationRepositoryInterface
{
    public function createReservation(array $data)
    {
        return reservations::create($data);
    }

    public function deleteReservation($roomId)
    {
        return reservations::where('rooms_id', $roomId)->delete();
    }
}
