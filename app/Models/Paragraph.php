<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\News;

class Paragraph extends Model
{
    use HasFactory;

    public function Newses(){
        return $this->hasMany('App\Models\News', 'paragraph_id');
    }
}
