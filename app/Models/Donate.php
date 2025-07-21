<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donate extends Model
{
    use HasFactory;

    protected $fillable =[
        'title',
        'description',
        'list_title',
        'list',
        'isVisible'
    ];

    protected $casts = [
        'list' => 'array',
    ];
}
