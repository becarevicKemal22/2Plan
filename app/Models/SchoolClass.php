<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolClass extends Model
{
    use HasFactory;

    protected $fillable = [
        "natOrIB",
        "department",
        "year",
        "major",
        "classCode",
    ];

    public function classes(){
        return $this->hasMany(_Class::class);
    }
}
