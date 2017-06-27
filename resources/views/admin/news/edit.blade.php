@extends('admin.layouts.master')
@section('header')
    <h2>Sửa tin tức <small>{{$news->title}}</small></h2>
@stop
@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('message'))
        <div class="alert alert-danger">
            {{ session('message') }}
        </div>
    @endif
    <form action="{{url('admin/news/edit/'.$news->id)}}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
            <label for="title">Tiêu đề</label>
            <div class="form-formcontrols">
                <input type="text" name="title" value="{{$news->title}}" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="listNew">Danh mục</label>
            <div class="form-formcontrols">
                <select name="listNew" class="form-control">
                    @foreach($listNews as $listNew)
                    <option @if($listNew->id == $news->list_new_id) selected @endif value="{{$listNew->id}}">{{$listNew->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="description">Mô tả</label>
            <div class="form-formcontrols">
                <textarea name="description" class="form-control">{{$news->description}}</textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="content">Nội dung</label>
            <div class="form-formcontrols">
                <textarea name="content" class="form-control">{{$news->content}}</textarea>
            </div>
        </div>
        <script>
            CKEDITOR.replace( 'content', {
                language: 'vi',
                filebrowserImageBrowseUrl: '../../../admin_asset/vendor/ckfinder/ckfinder.html?Type=Images',                 
                filebrowserFlashBrowseUrl: '../../../admin_asset/vendor/ckfinder/ckfinder.html?Type=Flash',
                filebrowserFlashUploadUrl: '../../../admin_asset/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',         
                filebrowserImageUploadUrl: '../../../admin_asset/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
            });
        </script>
        <div class="form-group">
            <label for="image">Hình ảnh</label>
            <img src="{{url('uploads/news/'.$news->image)}}" alt="{{$news->image}}" height="300px" width="auto" class="thumbnail">
            <div class="form-formcontrols">
                <input type="file" name="image">
            </div>
        </div>
        <button type="submit" class="btn btn-success">Lưu</button>
        <button type="reset" class="btn btn-default">Reset</button>
    </form>
@stop
