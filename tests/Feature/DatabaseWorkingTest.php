<?php

namespace Tests\Feature;

use App\Models\_Class;
use App\Models\SchoolClass;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Classroom;

class DatabaseWorkingTest extends TestCase
{

    /**
     * Tests the classroom table.
     */
    public function testClassroomTable(): void
    {

        $classroomFields = ["classroomNumber" => 101];

        $this->assertDatabaseEmpty("classrooms");
        $classroom = Classroom::make($classroomFields);
        $classroom->save();
        $this->assertDatabaseHas("classrooms", $classroomFields);
        $foundClassroom = Classroom::where("classroomNumber", 101)->first();
        $this->assertEquals(101, $foundClassroom->classroomNumber);
        $foundClassroom->delete();
        $this->assertDatabaseMissing("classrooms", $classroomFields);
    }

    public function testSchoolClassTable(){
        $this->assertDatabaseEmpty("school_classes");
        $schoolClassFields = ["natOrIB" => true, "department" => "4", "year" => 3, "major" => "IT", "classCode" => uniqid()];
        $schoolClass = SchoolClass::make($schoolClassFields);
        $schoolClass->save();
        $this->assertDatabaseHas("school_classes", $schoolClassFields);
        $foundSchoolClass = SchoolClass::where("classCode", $schoolClassFields["classCode"])->first();
        $this->assertEquals($schoolClassFields["classCode"], $foundSchoolClass->classCode);
        $foundSchoolClass->delete();
        $this->assertDatabaseMissing("school_classes", $schoolClassFields);
    }

    public function testClassTable(){

        $professor = User::factory()->make();
        $professor->role = "professor";
        $professor->save();

        $classroom = Classroom::create(['classroomNumber' => 101]);

        $schoolClass = SchoolClass::create(['natOrIB' => true, 'department' => '4', 'year' => 3, 'major' => 'IT', 'classCode' => uniqid()]);

        $this->assertDatabaseEmpty("classes");
        $classFields = ["day" => "Monday", "classNumber" => 1, "subject" => "Math", "professor" => 1, "schoolClass" => 1, "classroom" => 1];
        $class = _Class::make($classFields);
        $class->save();
        $this->assertDatabaseHas("classes", $classFields);
        $foundClass = _Class::where("classNumber", $classFields["classNumber"])->first();
        $this->assertEquals($classFields["classNumber"], $foundClass->classNumber);
        $foundClass->delete();
        $this->assertDatabaseMissing("classes", $classFields);
    }
}
