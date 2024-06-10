<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
}

// mendifisikan relasi ke model student 1:m

public function students() 
{
    return $this->hasMany(Student::class);
}
