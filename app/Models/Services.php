<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Services extends Model
{
    use HasTranslations;

    public $translatable = ['Name_Services'];

    protected $fillable = [
        'Name_Services',
        'Notes_Services',
    ];
}
