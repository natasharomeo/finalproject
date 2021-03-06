<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Badges extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'title',
        'type',
        'description',
        'requirements',
        'image'
    ];
}
