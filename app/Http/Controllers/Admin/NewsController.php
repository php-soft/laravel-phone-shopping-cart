<?php

namespace App\Http\Controllers\Admin;

use App\ListNew;
use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    //
    public function index()
    {   
        $news = News::all();
        return view('admin.news.index')->with('news', $news);
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
                'image'=>'required|image|mimes:jpg,png,jpeg',
            ], [
                'title.required'=>'Bạn chưa nhập tiêu đề tin',
                'title.unique'=>'Tiêu đề tin đã tồn tại',
                'ListNew.required'=>'Bạn chưa chọn danh mục',
                'description.required'=>'Bạn chưa nhập mô tả',
                'content.required'=>'Bạn chưa nhập nội dung',
                'image.required'=>'Bạn chưa chọn ảnh đại diện',
                'image.mimes'=>'Ảnh đại diện phải là tệp có đuôi jpg, png.',
                'image.image'=>'Tệp bạn chọn không phải là hình ảnh',
            ]);
        $news = new News;
        $news->title = $request->title;
        $news->slug = str_slug($request->title,"-");
        $news->list_new_id = $request->listNew;  
        $news->description = $request->description;
        $news->content = $request->content;
        $news->view = 0;
        $session_id = \Auth::user()->id;
        $news->user_id = $session_id;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $image = time()."_".$name;
            $file->move("uploads/news", $image);
            $news->image = $image;
        }
        $news->save();
        return redirect('admin/news/create')->withSuccess('Thêm tin thành công');
    }
    public function edit($id)
    {   
        $news = News::find($id);
        $listNews = ListNew::all();
        return view('admin.news.edit')->with('news', $news)->with('listNews', $listNews);
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
                'title'=>'required',
                'listNew'=>'required',
                'description'=>'required',
                'content'=>'required',
                'image'=>'image|mimes:jpg,png,jpeg',
            ], [
                'title.required'=>'Bạn chưa nhập tiêu đề tin',
                'ListNew.required'=>'Bạn chưa chọn danh mục',
                'description.required'=>'Bạn chưa nhập mô tả',
                'content.required'=>'Bạn chưa nhập nội dung',
                'image.mimes'=>'Ảnh đại diện phải là tệp có đuôi jpg, png.',
                'image.image'=>'Tệp bạn chọn không phải là hình ảnh',
            ]);
        $news = News::find($id);
        $news->title = $request->title;
        $news->slug = str_slug($request->title,"-");
        $news->list_new_id = $request->listNew;
        $news->description = $request->description;
        $news->content = $request->content;
        $session_id = \Auth::user()->id;
        $news->user_id = $session_id;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $image = time()."_".$name;
            $file->move("uploads/news", $image);
            if (file_exists("uploads/news/".$news->image)) {
                //unlink("uploads/news/".$news->image);
            }
            $news->image = $image;
        }
        $news->save();
        return redirect('admin/news/edit/'.$id)->withSuccess('Cập nhật tin thành công');
    }
    public function destroy($id)
    {   
        $news = News::find($id);
        $news->delete();
        return redirect('admin/news')->withSuccess("Xóa tin thành công");
    }
}
