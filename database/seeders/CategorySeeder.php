<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class CategorySeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*Черный чай*/
        Category::create([
            'name' => 'Черный чай',
        ]);
        /*Зеленный чай*/
        Category::create([
            'name' => 'Зеленный чай',
        ]);
    }
}
