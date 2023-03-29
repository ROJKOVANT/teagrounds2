<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Towar extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',/*название чая*/
        'picture',/*изображение чая*/
        'title',/*заголовок чая*/
        'compound',/*состав чая*/
        'country',/*страна чая*/
        'view',/*вид чая*/
        'taste',/*вкус чая*/
        'price',/*цена чая*/
        'count',/*цена чая*/
        'category_id',/*категория чая*/
        'slug',
    ];

    public function category(){
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

    public function isAvailable(){
        return $this->count >0;
    }
}
