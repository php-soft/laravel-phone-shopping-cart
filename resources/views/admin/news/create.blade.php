@extends('admin.layouts.index')
@section('header')
	<h3>Thêm tin tức</h3>
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
	<form action="{{url('admin/news/index')}}" method="POST">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<div class="form-group">
			<label for="title">Tiêu đề</label>
			<div class="form-formcontrols">
				<input type="text" name="title" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="listNew">Danh mục</label>
			<div class="form-formcontrols">
				<select name="listNew" class="form-control">
					@foreach($listNews as $listNew)
					<option value="{{$listNew->id}}">{{$listNew->name}}</option>
					@endforeach
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="description">Mô tả</label>
			<div class="form-formcontrols">
				<textarea name="description" class="form-control"></textarea>
			</div>
		</div>
		<div class="form-group">
			<label for="content">Nội dung</label>
			<div class="form-formcontrols">
				<textarea class="ckeditor" name="content" class="form-control"></textarea>
			</div>
		</div>
		<div class="form-group">
			<label for="image">Hình ảnh</label>
			<div class="form-formcontrols">
				<input type="file">
			</div>
		</div>
		<button type="submit" class="btn btn-success">Lưu</button>
		<button type="reset" class="btn btn-default">Reset</button>
	</form>
@stop
