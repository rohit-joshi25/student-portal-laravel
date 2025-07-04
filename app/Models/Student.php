<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // ✅ Add this line to allow mass assignment
    protected $fillable = ['name', 'email', 'course', 'age'];
}
