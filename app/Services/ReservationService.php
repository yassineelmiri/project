<?php

namespace App\Services;

use App\Repositories\ReservationRepositoryInterface;

class ReservationService
{
    protected $reservationRepository;

    public function __construct(ReservationRepositoryInterface $reservationRepository)
    {
        $this->reservationRepository = $reservationRepository;
    }

    public function createReservation(array $data)
    {
        return $this->reservationRepository->createReservation($data);
    }

    public function deleteReservation($roomId)
    {
        return $this->reservationRepository->deleteReservation($roomId);
    }
}
