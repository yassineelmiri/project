<?php
namespace App\Repositories;

interface AuthRepositoryInterface
{
    public function create(array $data);

    public function findByEmail(string $email);

    public function delete(int $id);

    public function update(array $data, int $id);
}
