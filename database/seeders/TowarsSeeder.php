<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Towar;
use Illuminate\Database\Seeder;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class TowarsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*Иван-Чай*/
        $img = new File(__DIR__ . '\..\..\\public\\img\\towars\\ivan_chai.webp');
        $path = Storage::disk('public')->put('towars', $img);
        Towar::create([
            'name' => 'Иван-Чай',
            'picture' => '/storage/' . $path,
            'title' => 'Иван-чай в первую очередь – это напиток для нормализации сна, успокоения нервной системы, снятия напряжения и стресса.',
            'compound' => 'Листья черной смородины, листья мята перечной, ягоды клюквы ',
            'country' => 'Россия',
            'view' => 'Зеленый чай',
            'taste' => 'Сладкий, Цветочный',
            'price' => '240',
            'count' => '17',
            'category_id' => '2',
            'slug' => 'Иван-чай в первую очередь – это напиток для нормализации сна, успокоения нервной системы, снятия напряжения и стресса.',
        ]);
        /*Рукери*/
        $img = new File(__DIR__ . '\..\..\\public\\img\\towars\\rykeri.webp');
        $path = Storage::disk('public')->put('towars', $img);
        Towar::create([
            'name' => 'Рукери',
            'picture' => '/storage/' . $path,
            'title' => 'Характерные для черного чая горчинка и терпкость, а также солодовые ноты со сладкими медовыми тонами.',
            'compound' => 'оттенки сухофруктов, солода, абрикоса, меда, пряностей и ягод',
            'country' => 'Руанда',
            'view' => 'Черный чай',
            'taste' => 'мягкий, сочный, с благородной терпкостью',
            'price' => '270',
            'count' => '100',
            'category_id' => '1',
            'slug' => 'Характерные для черного чая горчинка и терпкость, а также солодовые ноты со сладкими медовыми тонами.',
        ]);
        /*Адамс Пик*/
        $img = new File(__DIR__ . '\..\..\\public\\img\\towars\\adams_pik.webp');
        $path = Storage::disk('public')->put('towars', $img);
        Towar::create([
            'name' => 'Адамс Пик',
            'picture' => '/storage/' . $path,
            'title' => 'Повышенное содержание типсов делает вкус ярким и цветочным.',
            'compound' => 'Листья черной смородины, абрикоса, меда, пряностей и ягод',
            'country' => 'Цейлон',
            'view' => 'Черный чай',
            'taste' => 'Цветочный',
            'price' => '800',
            'count' => '50',
            'category_id' => '1',
            'slug' => 'Повышенное содержание типсов делает вкус ярким и цветочным.',
        ]);
        /*Хун Мин Ча*/
        $img = new File(__DIR__ . '\..\..\\public\\img\\towars\\khun-min-cha.webp');
        $path = Storage::disk('public')->put('towars', $img);
        Towar::create([
            'name' => 'Хун Мин Ча',
            'picture' => '/storage/' . $path,
            'title' => 'Необычное сочетание солодовых ноток с сухофруктовыми и сладкими. Есть приятные ноты копчения.',
            'compound' => 'Листья черной смородины, абрикоса, меда, пряностей и ягод',
            'country' => 'Китай',
            'view' => 'Черный чай',
            'taste' => 'Сухофрукты',
            'price' => '475',
            'count' => '64',
            'category_id' => '1',
            'slug' => 'Необычное сочетание солодовых ноток с сухофруктовыми и сладкими. Есть приятные ноты копчения.',
        ]);
        /*Кимун Мао Фен*/
        $img = new File(__DIR__ . '\..\..\\public\\img\\towars\\kimun_mao_fen.webp');
        $path = Storage::disk('public')->put('towars', $img);
        Towar::create([
            'name' => 'Кимун Мао Фен',
            'picture' => '/storage/' . $path,
            'title' => 'Любимый напиток королевской семьи Великобритании. Сладкий аромат с копчеными нотами и нотами сухофруктов.',
            'compound' => 'Листья черной смородины, листья мята перечной',
            'country' => 'Китай',
            'view' => 'Черный чай',
            'taste' => 'Дымный',
            'price' => '775',
            'count' => '14',
            'category_id' => '1',
            'slug' => 'Любимый напиток королевской семьи Великобритании. Сладкий аромат с копчеными нотами и нотами сухофруктов.',
        ]);
        /*Остров Дракона*/
        $img = new File(__DIR__ . '\..\..\\public\\img\\towars\\ostrov_drakona.webp');
        $path = Storage::disk('public')->put('towars', $img);
        Towar::create([
            'name' => 'Остров Дракона',
            'picture' => '/storage/' . $path,
            'title' => 'Листья собираются ранней весной. Чай получается нежным, хорошо дополняется молочными нотками.',
            'compound' => 'Листья черной смородины, листья мята перечной, ягоды клюквы ',
            'country' => 'Китай',
            'view' => 'Зеленый чай',
            'taste' => 'Сливочный крем, Свежее сено',
            'price' => '540',
            'count' => '25',
            'category_id' => '2',
            'slug' => 'Листья собираются ранней весной. Чай получается нежным, хорошо дополняется молочными нотками.',
        ]);
        /*Зеленый с лотосом*/
        $img = new File(__DIR__ . '\..\..\\public\\img\\towars\\zelenyy_s_lotosom.webp');
        $path = Storage::disk('public')->put('towars', $img);
        Towar::create([
            'name' => 'Зеленый с лотосом',
            'picture' => '/storage/' . $path,
            'title' => 'Необычный чай из провинции Хунань. Для его приготовления слои чая хранят вместе с лепестками лотоса и происходит естественная ароматизация. Вкус нежный и освежающий.',
            'compound' => 'зеленый чай, почки и цветы лотоса.',
            'country' => 'Россия',
            'view' => 'Зеленый чай',
            'taste' => 'Сливочный, Цветочный',
            'price' => '780',
            'count' => '15',
            'category_id' => '2',
            'slug' => 'Необычный чай из провинции Хунань. Для его приготовления слои чая хранят вместе с лепестками лотоса и происходит естественная ароматизация. Вкус нежный и освежающий.',
        ]);
        /*Снежный Барс*/
        $img = new File(__DIR__ . '\..\..\\public\\img\\towars\\snezhnyy_bars.webp');
        $path = Storage::disk('public')->put('towars', $img);
        Towar::create([
            'name' => 'Снежный Барс',
            'picture' => '/storage/' . $path,
            'title' => 'Редкий зеленый чай, получивший известность благодаря покрывающим его листья белыми ворсинками, будто чайные листочки покрыты инеем.',
            'compound' => 'чабрец, шалфей, солодка корень, мята перечная',
            'country' => 'Россия',
            'view' => 'Зеленый чай',
            'taste' => 'Цветочный',
            'price' => '1540',
            'count' => '20',
            'category_id' => '2',
            'slug' => 'Редкий зеленый чай, получивший известность благодаря покрывающим его листья белыми ворсинками, будто чайные листочки покрыты инеем.',
        ]);
    }
}
