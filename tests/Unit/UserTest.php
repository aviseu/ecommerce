<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * @test
     * @return void
     */
    public function can_verify_if_has_username()
    {
        // Prepare
        $userWithUsername = factory(User::class)->make([
            'username' => 'user',
        ]);
        $userWithoutUsername = factory(User::class)->make([
            'username' => 'email@ecommerce.local',
            'email'    => 'email@ecommerce.local',
        ]);

        // Assert
        $this->assertTrue($userWithUsername->hasUsername());
        $this->assertFalse($userWithoutUsername->hasUsername());
    }
}
