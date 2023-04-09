<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UsersSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*Админ*/
        User::create([
            'fio' => 'Admin',
            'name' => 'Admin',
            'email' => 'admin@mail.ru',
            'password' => Hash::make('adminadmin'),
            'admin' => '1',
        ]);
        /*Пользователь*/
        User::create([
            'fio' => 'Рожков Антон Александрович',
            'name' => 'Anton',
            'email' => 'anton@mail.ru',
            'password' => Hash::make('0123456789'),
            'admin' => null,
        ]);
        /*Пользователь*/
        User::create([
            'fio' => 'Тишков Юрий Анатольевич',
            'name' => 'Thiska',
            'email' => 'tishka@mail.ru',
            'password' => Hash::make('9876543210'),
            'admin' => null,
        ]);
        /*Пользователь*/
        User::create([
            'fio' => 'Иванов Дмитрий Борисович',
            'name' => 'Dmitrii122',
            'email' => 'dewda@mail.ru',
            'password' => Hash::make('7894561230'),
            'admin' => null,
        ]);
    }
}
