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
    public function index($id)
    {
        $categori = News::all();
        if ($id === 'all' || $id === ''){
            return view('blog')->with('newses', News::all());
        }else{
            $categori = News::all();
            foreach ( $categori as $item){
                if ($item->id == $id){
                    return view('blog')->with('newses', News::all()->where('paragraph_id', '===', $id));
                }
            }
            return view('blog')->with('newses', News::all());
        }
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
    /**/
    public function news($id)
    {
        return view('news.index')->with('news', News::find($id));
    }
}
