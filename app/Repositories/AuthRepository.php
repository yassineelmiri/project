<?php

namespace App\Repositories;

use App\Models\Auths;

class AuthRepository implements AuthRepositoryInterface
{
    public function create(array $data)
    {
        return Auths::create($data);
    }

    public function findByEmail(string $email)
    {
        return Auths::where('email', $email)->first();
    }

    public function delete(int $id)
    {
        $user = Auths::findOrFail($id);
        $user->delete();
    }

    public function update(array $data, int $id)
    {
        $user = Auths::findOrFail($id);
        $user->update($data);
    }
}
