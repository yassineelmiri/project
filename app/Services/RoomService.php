<?php

namespace App\Services;

use App\Repositories\RoomRepositoryInterface;

class RoomService
{
    protected $roomRepository;

    public function __construct(RoomRepositoryInterface $roomRepository)
    {
        $this->roomRepository = $roomRepository;
    }

    public function createRoom(array $data)
    {
        return $this->roomRepository->create($data);
    }

    public function deleteRoom($id)
    {
        return $this->roomRepository->delete($id);
    }
}
