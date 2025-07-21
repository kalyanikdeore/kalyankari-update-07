<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;
    protected $fillable = [
       'image',
       'name',
       'designation',
       'company_name',
       'title',
        'description',
        'what_say_abt_us',
        'introduction',
        'url',
       'isVisible',
    ];
}
