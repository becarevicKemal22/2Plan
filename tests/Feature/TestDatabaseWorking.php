<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Classroom;

class TestDatabaseWorking extends TestCase
{

    private $classroom = ["classroomNumber" => 101];

    /**
     * A basic feature test example.
     */
    public function testClassroomTable(): void
    {
        $this->assertDatabaseEmpty("");
        $classroom = Classroom::create($this->classroom);
    }
}
