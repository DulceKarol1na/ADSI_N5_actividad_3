<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $table = "assistants";
    protected $primaryKey = "id";
    protected $fillable = [
        'identificationnumber',
        'name',
        'lastaname',
        'email',
        'type',
        'workingday_id',
        'program_id',
        'course_id',
        'instructors_id',
     ];
}
