<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Towar;
use App\Models\User;
use App\Models\Cart;
use App\Models\Order;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       if(Auth::user()->admin===1){
           return view('admin');
       }
        return view('home');
    }
/*карзина*/
    public function add_cart(Request $request, $id){
        if (Auth::id()){

            $user = Auth::user();
            $towar = Towar::find($id);

            $cart = new cart;

            $cart->fio = $user->fio;
            $cart->email = $user->email;
            $cart->user_id = $user->id;
            $cart->towar_name = $towar->name;
            $cart->price = $towar->price * $request->quantity;
            $cart->picture = $towar->picture;
            $cart->category_id = $towar->id;
            $cart->quantity = $request->quantity;

            $cart->save();

            return redirect()->back();
        }
        else{
            return redirect('login');
        }
    }

    public function carts(){

        if( Auth::id()){
            $id = Auth::user()->id;

            $cart = Cart::where('user_id','=',$id)->get();

            return view('carts.index', compact('cart'));
        }
        else{
            return redirect('login');
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function cart_destroy($id)
    {
        $cart = Cart::find($id);
        $cart->delete();

        return redirect()->back();
    }
    /*заказы*/
    public function cash_order(){

        $user = Auth::user();

        $userid = $user->id;
        $data = Cart::where('user_id','=',$userid)->get();

        foreach ($data as $data){
            $order = new order;

            $order->fio = $data->fio;
            $order->email = $data->email;
            $order->user_id = $data->user_id;

            $order->towar_name = $data->towar_name;
            $order->quantity = $data->quantity;
            $order->price = $data->price;
            $order->picture = $data->picture;
            $order->category_id = $data->category_id;

            $order->payment_status = 'Оплата при доставке';
            $order->delivery_status = 'Обработка';

            $order->save();

            $cart_id = $data->id;
            $cart = Cart::find($cart_id);
            $cart->delete();
        }
        return redirect()->back()->with('message', 'Мы получили ваш заказ. Ожидайте доставки!');
    }

    /*заказы у админа*/
    public function orders(){
        $order = Order::all();

        return view('orders.index', compact('order'));
    }

    public function delivered($id)
    {
        $order = Category::find($id);
        return view('orders.index')->with('order',$order);
    }

    public function update_delivered(Request $request, $id){

        $order = Order::find($id);

        $order->delivery_status = $request->delivery_status;

        $order->save();

        return redirect()->back();
    }
}

