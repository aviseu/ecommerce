<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    /**
     * @param $attributes
     * @return User
     */
    public function create($attributes)
    {
        return User::create($attributes);
    }
}