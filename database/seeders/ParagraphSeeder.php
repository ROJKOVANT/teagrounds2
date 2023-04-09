<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Paragraph;
use Illuminate\Database\Seeder;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class ParagraphSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*ВАЖНО ЗНАТЬ*/
        Paragraph::create([
            'name' => 'ВАЖНО ЗНАТЬ',
        ]);
        /*СОВЕТЫ ПОКУПАТЕЛЯМ*/
        Paragraph::create([
            'name' => 'СОВЕТЫ ПОКУПАТЕЛЯМ',
        ]);
    }
}
