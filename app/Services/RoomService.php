<?php
// app/Services/RoomService.php

namespace App\Services;

use App\Models\Room;

class RoomService
{
    public function createRoom($data)
    {
        // Your business logic for creating a room goes here
        // You can call your model and perform any necessary operations

        return Room::create($data);
    }

    public function updateRoom(Room $room, $data)
    {
        // Your business logic for updating a room goes here
        // You can update the room instance with new data and save it

        $room->update($data);

        return $room;
    }

    // Define other methods as per your requirements
}
