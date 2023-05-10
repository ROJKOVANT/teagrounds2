<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\SiteReview;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class ReviewsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        SiteReview::create([
            'fio' => 'Иванов Дмитрий Борисович',
            'site_reviews'=> 'Обожаю чай, особенно с различными фруктовыми, ягодными добавками.',
        ]);
    }
}
