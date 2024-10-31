<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $table='records';
    protected $fillable=([
        'name',
        'department',
        'admission_no',
        'batch_no',
        'status',
        'biometric'
    ]);
}
