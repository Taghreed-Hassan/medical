<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Patient extends Model
{
    use HasTranslations;
    public $translatable = ['Name_Patient'];

    protected $fillable = [
        'Name_Patient',
        'Email',
        'photo',
        'phone',
        'Notes',
        'Doctor_id',
        'Section_id',
    ];

}
