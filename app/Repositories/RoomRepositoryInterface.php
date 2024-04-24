<?php

namespace App\Repositories;

interface RoomRepositoryInterface
{
    public function all();
    public function create(array $data);
    public function find($id);
    public function delete($id);
}
