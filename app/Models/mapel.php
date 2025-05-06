<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mapel extends Model
{
    protected $fillable = [
        'id',
        'name',
        'teacher_id',
        'room_id',
        'total_students',
        'max_students',
    ];
}
