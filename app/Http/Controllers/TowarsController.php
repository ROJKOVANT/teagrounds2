<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Towar;
use Illuminate\Http\Request;

class TowarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $categori = Towar::all();
        if ($id === 'all' || $id === ''){
            return view('shop')->with('towars', Towar::all());
        }else{
            $categori = News::all();
            foreach ( $categori as $item){
                if ($item->id == $id){
                    return view('shop')->with('towars', Towar::all()->where('category_id', '===', $id));
                }
            }
            return view('shop')->with('towars', Towar::all());
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminTovarAdd')->with('categories', Category::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            "name" => "required ",
            "picture" => "required|image",
            "title" => "required ",
            "compound" => "required",
            "country" => "required",
            "view" => "required",
            "taste" => "required",
            "price" => "required",
            "count" => "required",
            "category_id" => "required",

        ]);

        $picture = $request->picture;
        $picture_new_name = time().$picture->getClientOriginalName();
        $picture->move('uploads/towar/', $picture_new_name);

        Towar::create([
            "name" => $request->input('name'),
            "title" => $request->input('title'),
            "compound" => $request->input('compound'),
            "country" => $request->input('country'),
            "view" => $request->input('view'),
            "taste" => $request->input('taste'),
            "price" => $request->input('price'),
            "count" => $request->input('count'),
            "category_id" => $request->input('category_id'),
            "picture" => 'uploads/towar/'.$picture_new_name,
            "slug" => $request->input('title')//str_slug($request->title)
        ]);

        return redirect('adminTovar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tovar = Towar::find($id);

        return view('towars.edit')->with('towars', $tovar)->with('categories', Category::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tovar = Towar::find($id);

        $this->validate($request,[
            "name" => "required ",
//            "picture" => "required|image",
            "title" => "required ",
            "compound" => "required",
            "country" => "required",
            "view" => "required",
            "taste" => "required",
            "price" => "required",
            "count" => "required",
            "category_id" => "required",
        ]);

        if($request->hasFile('picture')){
            $picture = $request->picture;
            $picture_new_name = time().$picture->getClientOriginalName();
            $picture->move('uploads/towar/',$picture_new_name);
            $tovar->picture = 'uploads/towar/'.$picture_new_name;
        }

        $tovar->name = $request->input('name');
        $tovar->title = $request->input('title');
        $tovar->compound = $request->input('compound');
        $tovar->country = $request->input('country');
        $tovar->view = $request->input('view');
        $tovar->taste = $request->input('taste');
        $tovar->price = $request->input('price');
        $tovar->count = $request->input('count');
//        $tovar->picture = 'uploads/towar/'.$picture_new_name;
        $tovar->category_id = $request->input('category_id');
        $tovar->save();

        return redirect('adminTovar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tovar = Towar::find($id);
        $tovar->delete();

        return redirect()->back();
    }
    /**/
    public function towars($id)
    {
        return view('towars.index')->with('towars', Towar::find($id));
    }
}
