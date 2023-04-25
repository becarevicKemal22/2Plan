<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'classroomNumber',
    ];

    public function classes(){
        return $this->hasMany(_Class::class);
    }
}
