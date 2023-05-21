<?php

namespace App\Http\Controllers;

use App\Models\Gift;
use App\Models\Order;
use App\Models\Towar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GiftController extends Controller
{
    public function constructor(Request $request){
        $user = Auth::user();
        $items = $request->input('products');
        $count = count($items);
        $priceAll = 0;
        foreach ($items as $item){
            $product = Towar::find($item);
            $priceAll += $product->price;
        }
        $priceAll += 150;
        switch ($request->input('box')){
        case '1':
            if($count > 3){
               return redirect('/constructorCreate');}
           break;
        case '2':
            if($count > 5){
               return redirect('/constructorCreate');}
           break;
        case '3':
            if($count > 8){
               return redirect('/constructorCreate');}
           break;
        case '4':
            if($count > 10){
               return redirect('/constructorCreate');}
            break;}$json = json_encode($items);
        Gift::create([
            'user_id'=>$user->id,
            'fio'=>$user->fio,
            'email'=>$user->email,
            'price'=>$priceAll,
            'products' => $json,
            'box_type' => $request->input('box'),
            'letter' => $request->input('letter'),
            'phone'=>$request->input('phone'),
            'devil'=>$request->input('devil'),
            'address'=>$request->input('address'),
            'payment_status' => 'Оплата наличными',
            'delivery_status' => 'в обработке',
        ]);
        return  redirect('/');
    }

    /*заказы у админа*/
    public function podarocAdmin()
    {
        $gifts = Gift::all();

        return view('orders.podaroc', compact('gifts'));
    }

    public function delivered($id)
    {
        $gifts = Category::find($id);
        return view('orders.podaroc')->with('gifts', $gifts);
    }

    public function update_delivered(Request $request, $id)
    {

       $gifts = Gift::find($id);

        $gifts->delivery_status = $request->delivery_status;

        $gifts->save();

        return redirect()->back();
    }
    /*пользователь изменит статус товара на получен*/
    public function setStatus($id)
    {
        $gifts = Gift::find($id);
        $gifts->update([
            'delivery_status' => 'получен'
        ]);

        return redirect()->back();
    }
//    /*вывод заказа со статусом получен в истории заказов*/
//    public function podarochistory()
//    {
//        $user = Auth::user();
//        $userid = $user->id;
//        $gifts = Gift::where('user_id', '=', $userid)->where('delivery_status', '=', 'получен')->get();
//        return view('product', compact('gifts'));
//    }
}
