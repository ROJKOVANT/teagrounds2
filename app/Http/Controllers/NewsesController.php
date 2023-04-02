<?php

namespace App\Http\Controllers;

use App\Models\Paragraph;
use App\Models\News;
use Illuminate\Http\Request;
class NewsesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all(){

        return view('blog')->with('news', News::all());
    }
    public function index($paragraphsId = 0)
    {
    $news = News::all();
    if($paragraphsId){
        $news -> where('paragraph_id',$paragraphsId);
    }
        return view('blog')->with('news', News::all()->where('paragraph_id', '===', $paragraphsId));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminBlogAdd')->with('paragraphs', Paragraph::all());
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
            "subject" => "required ",
            "title" => "required ",
            "content1" => "required",
            "content2" => "required",
            "paragraph_id" => "required",
            "picture" => "required|image",
        ]);

        $picture = $request->picture;
        $picture_new_name = time().$picture->getClientOriginalName();
        $picture->move('uploads/news/', $picture_new_name);

        News::create([
            "subject" => $request->input('subject'),
            "title" => $request->input('title'),
            "content1" => $request->input('content1'),
            "content2" => $request->input('content2'),
            "paragraph_id" => $request->input('paragraph_id'),
            "picture" => 'uploads/news/'.$picture_new_name,
            "slug" => $request->input('title')//str_slug($request->title)
        ]);

        return redirect('adminBlog');
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
        $news = News::find($id);

        return view('news.edit')->with('news', $news)->with('paragraphs', Paragraph::all());
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
//        dd($request->all());
        $news = News::find($id);

        $this->validate($request,[
            "subject" => "required ",
            "title" => "required ",
            "content1" => "required",
            "content2" => "required",
            "paragraph_id" => "required",
        ]);

        if($request->hasFile('picture')){
            $picture = $request->picture;
            $picture_new_name = time().$picture->getClientOriginalName();
            $picture->move('uploads/news/',$picture_new_name);
            $news->picture = 'uploads/news/'.$picture_new_name;
        }

        $news->subject = $request->input('subject');
        $news->title = $request->input('title');
        $news->content1 = $request->input('content1');
        $news->content2 = $request->input('content2');
        $news->paragraph_id = $request->input('paragraph_id');
        $news->save();

        return redirect('adminBlog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();

        return redirect()->back();
    }
    /*вывод подробнее новости по id*/
    public function news($id)
    {
        return view('news.index')->with('news', News::find($id));
    }
    public function new($id)
    {
        return view('OpenNews')->with('news', News::find($id));
    }
    /*вывод 4 рандомных новостей*/
    public function  random(){
        $randomNewses = News::get()->random(4);
        return view('OpenNews', compact('randomNewses'));
    }
    /*вывод 4 рандомных новостей*/
    public function  randomnews(){
        $randomNewses = News::get()->random(4);
        return view('welcome', compact('randomNewses'));
    }
}
