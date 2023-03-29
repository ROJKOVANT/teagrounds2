<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Towar;

class Category extends Model
{
    use HasFactory;

    public function Towars(){
        return $this->hasMany('App\Models\Towar', 'category_id');
    }
}
