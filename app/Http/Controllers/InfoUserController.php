<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class InfoUserController extends Controller
{
    //вывод пользователей
    public function allInfo(){
        return view('admin')->with('data', User::all());
    }

    //удаление пользователей
    public function deleteInfo($id){
        User::find($id)->delete();
        return redirect()->route('admin');
    }
}

