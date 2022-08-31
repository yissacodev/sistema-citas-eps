<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $casts = [
        'appoint_start_date' => 'datetime:HH:mm'
    ];

    protected $primaryKey = 'id_appoint';

}
