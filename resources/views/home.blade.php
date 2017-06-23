@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($data as $row)
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <a href="">
                    <div class="thumbnail">
                        <img class="img-responsive" src="{!!url('uploads/products/'.$row->image)!!}" alt="">
                        <div class="caption">
                            <h3>{!! $row->name !!}</h3>
                            <tr>
                                <td><p>HDH: {!! $row->operaSystem->opera_system !!}</p></td>
                                <td><p>CPU: {!! $row->operaSystem->chipset !!}</p></td>
                                <td><p>RAM: {!! $row->memory->ram !!} GB, ROM: {!! $row->memory->rom !!} GB</p></td>
                                <td><p>Camera: {!! $row->backCamera->resolution !!}, Selfie: {!! $row->frontCamera->resolution !!}</p></td>
                                <td><p>PIN: {!! $row->battery->battery_capacity !!}, SIM: {!! $row->connect->sim !!}</p></td>
                            </tr>
                            <h3>{!! $row->price !!}</h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    @endforeach
</div>
@endsection
