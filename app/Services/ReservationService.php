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
        // Additional validation or business logic can be implemented here
        return $this->reservationRepository->createReservation($data);
    }

    public function deleteReservation($roomId)
    {
        // Additional logic can be added here if needed
        return $this->reservationRepository->deleteReservation($roomId);
    }
}
