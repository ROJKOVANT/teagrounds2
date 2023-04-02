<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HelpReview extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'header',
        'message',
    ];
}
