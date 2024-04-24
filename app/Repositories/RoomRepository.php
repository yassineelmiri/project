<?php

namespace App\Repositories;

use App\Models\Room;

class RoomRepository implements RoomRepositoryInterface
{
    protected $model;

    public function __construct(Room $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function find($id)
    {
        return $this->model->findOrFail($id);
    }

    public function delete($id)
    {
        $room = $this->find($id);
        return $room->delete();
    }
}
