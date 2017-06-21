@extends ('layouts.master')

@section ('header')

@stop

@section ('content')
	@foreach($data as $row)
		<div class="row">
  			<div class="col-sm-6 col-md-4">
    			<div class="thumbnail">
      				<img class="img-responsive" src="{!!url('uploads/products/'.$row->image)!!}" alt="">
      				<div class="caption">
				        <h3>{!! $row->name !!}</h3>
				        <tr>
				        	<td><p>HDH: {!! $row->opera_system !!}</p></td>
				        	<td><p>CPU: {!! $row->chipset !!}</p></td>
				        	<td><p>RAM: {!! $row->ram !!}, ROM: {!! $row->rom !!}</p></td>
				        	<td><p>Camera: {!! $row->resolution !!}, Selfie: {!! $row->resolution !!}</p></td>
				        	<td><p>PIN: {!! $row->battery_capacity !!}, SIM: {!! $row->sim !!}</p></td>
				        </tr>
				        <h3>{!! $row->price !!}</h3>
				        <p><a href="#" class="glyphicon glyphicon-plus" role="button">Chi tiết</a> <a href="#" class="glyphicon glyphicon-shopping-cart" role="button">Mua</a></p>
      				</div>
    			</div>
  			</div>
		</div>
	@endforeach
@stop