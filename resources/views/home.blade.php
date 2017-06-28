@extends('layouts.app')
@section('content')  
    @foreach($products as $product)
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <a href="">
                    <div class="thumbnail">
                        <img class="img-responsive" src="{!!url($product->image)!!}" alt="">
                        <div class="caption">
                            <h3>{!! $product->name !!}</h3>
                            <tr>
                                <td><p>HDH: {!! $product->operaSystem->opera_system !!}</p></td>
                                <td><p>CPU: {!! $product->operaSystem->chipset !!}</p></td>
                                <td><p>RAM: {!! $product->memory->ram !!} GB, ROM: {!! $product->memory->rom !!} GB</p></td>
                                <td><p>Camera: {!! $product->backCamera->resolution !!}, Selfie: {!! $product->frontCamera->resolution !!}</p></td>
                                <td><p>PIN: {!! $product->battery->battery_capacity !!}, SIM: {!! $product->connect->sim !!}</p></td>
                            </tr>
                            <h3>{!! $product->price !!}</h3>
                        </div>
                    </div>
                </a>
                <a href="{{url('/them-gio-hang/'.$product->id)}}">Thêm giỏ hàng</a>
            </div>
        </div>
    @endforeach
</div>
@endsection
