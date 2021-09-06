<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workingday extends Model
{
    use HasFactory;

    protected $table = "workingdays";
    protected $primaryKey = "id";
    protected $fillable = [
        'name',
     ];
}
