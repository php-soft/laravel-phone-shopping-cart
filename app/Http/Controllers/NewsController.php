<?php

namespace App\Http\Controllers;

use App\ListNew;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $news = News::all();
		return view('admin.news.index')->with('news', $news)->with('stt',1);
    }
    public function create()
    {	
    	$listNews = ListNew::all();
		return view('admin.news.create')->with('listNews', $listNews);
    }
    public function store(Request $request)
    {   
        $this->validate($request, [
                'title'=>'required|unique:News,title',
                'listNew'=>'required',
                'description'=>'required',
                'content'=>'required',
            ], [
                'title.required'=>'Bạn chưa nhập tiêu đề tin',
                'title.unique'=>'Tiêu đề tin đã tồn tại',
                'ListNew.required'=>'Bạn chưa chọn danh mục',
                'description.required'=>'Bạn chưa nhập mô tả',
                'content.required'=>'Bạn chưa nhập nội dung',
            ]);
        $news = new News;
        $news->title = $request->title;
        $news->slug = str_slug($request->title,"-");
        $news->list_new_id = $request->listNew;
        $news->description = $request->description;
        $news->image = "";
        $news->content = $request->content;
        $news->save();
        return redirect('admin/news/create')->withSuccess('Thêm tin thành công');
    }
     public function edit($id)
    {   
        $news = News::find($id);
        $listNews = ListNew::all();
        return view('admin.news.edit')->with('news', $news)->with('listNews', $listNews);
    }
    public function update(Request $request)
    {   
        $this->validate($request, [
                'title'=>'required|unique:News,title',
                'listNew'=>'required',
                'description'=>'required',
                'content'=>'required',
            ], [
                'title.required'=>'Bạn chưa nhập tiêu đề tin',
                'title.unique'=>'Tiêu đề tin đã tồn tại',
                'ListNew.required'=>'Bạn chưa chọn danh mục',
                'description.required'=>'Bạn chưa nhập mô tả',
                'content.required'=>'Bạn chưa nhập nội dung',
            ]);
        $news = new News;
        $news->title = $request->title;
        $news->slug = str_slug($request->title,"-");
        $news->list_new_id = $request->listNew;
        $news->description = $request->description;
        $news->image = "";
        $news->content = $request->content;
        $news->save();
        return redirect('admin/news/create')->withSuccess('Thêm tin thành công');
    }
}
