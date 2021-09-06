<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstruSena extends Model
{
    use HasFactory;
    protected $table = "instructors";
    protected $primaryKey = "id";
    protected $fillable = [
        'identificationnumber',
        'name',
        'lastaname',
        'email',
        'courses_id',
        'program_id',
        'workingday_id',
    ];
}
