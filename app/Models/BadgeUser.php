<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BadgeUser extends Model
{
    use HasFactory;

    protected $table = 'user_badges';
    protected $fillable = [
        'badge_id', 'user_id',
    ];
}
