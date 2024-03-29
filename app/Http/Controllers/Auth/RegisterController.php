<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fio' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ],
                    [
                       'fio.required' => 'ФИО должны быть заполнено',
                       'fio.string' => 'Поле ФИО должно быть строкой',

                       'name.required' => 'Логин должнен быть заполнен',
                       'name.string' => 'Логин должнен быть строкой',

                       'email.required' => 'Почта должна быть заполнена',
                       'email.unique' => 'Почта уже занята',
                       'email.email' => 'Поле почта некорректна',
                        'password.confirmed' => 'Ваши пароли не совпадают!',
                       'password.required' => 'Пароль должен быть заполнен',
                        'password.min' => 'Пароль должен быть больше 8 символов',
                       'password-confirm' => 'Повторный Пароль должен быть заполнен',

                       'rules.required' => 'Вы не согласились с обработкой персональных данных'
                   ]
        );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'fio' => $data['fio'],
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
