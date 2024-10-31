<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table ='students';

    protected $fillable = [
        'name',
        'department',
        'admission_no',
        'batch_no',
        'biometric',
    ];
}
