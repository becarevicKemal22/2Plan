<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTableTest extends TestCase
{
    /**
     * A basic feature test example.
     */

    use RefreshDatabase;
    public function test_can_store_user(): void
    {
        $user = new User();
        $user->name = "Kemal";
        $user->email = "kemal.bacarevic@2gimnazija.edu.ba";
        $user->password = bcrypt("test-123");
        $user->save();

        $this->assertDatabaseHas('users', [
            'name' => 'Kemal',
            'email' => 'kemal.bacarevic@2gimnazija.edu.ba'
        ]);
    }
}
