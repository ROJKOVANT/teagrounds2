<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Paragraph;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content1',
        'content2',
        'paragraph_id',
        'picture',
        'slug',
    ];

    public function paragraph(){
        return $this->belongsTo('App\Models\Paragraph', 'paragraph_id');
    }
}
