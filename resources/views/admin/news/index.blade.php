@extends('admin.layouts.index')
@section('header')
	<h3>Danh sách tin
		<a href="{{url('admin/news/create')}}" class="btn btn-success pull-right">Thêm tin mới</a>
	</h3>
@stop
@section('content')
	<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
		<thead>
			<tr>
				<th>Stt</th>
				<th>Tiêu đề</th>				
				<th>Mô tả</th>				
				<th>hình ảnh</th>				
				<th>Chỉnh sửa</th>				
				<th>Xóa</th>				
			</tr>
		</thead>
		<tbody>
			@foreach($news as $new)
				<tr>
					<td>{{$stt}}</td>
					<td>{{$new->title}}</td>				
					<td>{{$new->description}}</td>								
					<td><img src="" alt="{{$new->image}}" class="thumbnail" height="100" width="auto"></td>				
					<td><a href="{{url('admin/news/edit/'.$new->id)}}"><strong><span style="font-size: 30px; text-align: center; vertical-align: middle;" class="glyphicon glyphicon-edit"></span></strong></a></td>
					<td>Xóa</td>	
				</tr>
				@php
					$stt++;
				@endphp
			@endforeach
		</tbody>
	</table>
@stop