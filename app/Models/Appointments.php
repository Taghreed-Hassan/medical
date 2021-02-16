<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Appointments extends Model
{
    use Notifiable;  

   // public $time = null;

    protected $fillable = [
        'email',
        'name',
        'Section_id',
        'phone',
        'messege',
       'date',
       'time'

    ];

   
}

