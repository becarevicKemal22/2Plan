<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class _Class extends Model
{
    use HasFactory;

    protected $fillable = [
        "day",
        "classNumber",
        "subject",
        "professor",
        "schoolClass",
        "classroom",
    ];

    public function professor(){
        return $this->hasOne(User::class);
    }

    public function classroom(){
        return $this->hasOne(Classroom::class);
    }

    public function schoolClass(){
        return $this->hasOne(SchoolClass::class);
    }
}
