<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisciplineTeacher extends Model
{
    use HasFactory;
    protected $table = 'discipline_teacher';
    protected $guarded = false;
}
