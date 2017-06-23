@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($product as $row)
            <div class="col-xs-12 col-sm-12 col-md-6 product-name">
                <h3>Điện thoại {!! $row->name !!} {!! $row->color->name !!} {!! $row->memory->rom !!}GB</h3>
            </div>
        @endforeach
    </div>
    <hr>
    <div class="row">
        @foreach($product as $row)
            <div class="col-xs-12 col-sm-12 col-md-4 product-img">
                <img class="img-responsive" src="{!!url('uploads/products/'.$row->image)!!}" alt="">
            </div>
            <!-- end img-product -->
            <div class="col-xs-12 col-sm-12 col-md-3 product-info">
                <h2>{!! $row->price !!} đ</h2>
                <div class="panel panel-info" style="margin: 0;">
                    <div class="panel-heading" style="padding:5px;">
                        <h3 class="panel-title">Khuyễn mãi - Chính sách</h3>
                    </div>
                    <div class="panel-body">
                    
                    </div>
                </div>
                <div class="panel panel-info">
                    <div class="panel-body">
                        <div class="chinhsach">
                            <li><span class="glyphicon glyphicon-hand-right"></span> Trong hộp có: <!-- {!!$row->packet!!}  --></li>
                            <li><span class="glyphicon glyphicon-hand-right"></span> Bảo hành chính hãng: thân máy 12 tháng, pin 12 tháng, sạc 12 tháng</li>
                            <li><span class="glyphicon glyphicon-hand-right"></span> Giao hàng tận nơi miễn phí trong 1 ngày</li>
                            <li><span class="glyphicon glyphicon-hand-right"></span> 1 đổi 1 trong 1 tháng với sản phẩm lỗi</li>
                        </div>
                    </div>
                </div>
                @if($row->status ==1)
                    <a href="" title="" class="btn btn-large btn-block btn-primary" style="font-size: 20px;">Mua ngay</a>
                @else
                    <a href="" title="" class="btn btn-large btn-block btn-primary disabled" style="font-size: 20px;">Tạm hết hàng</a>
                @endif
            </div>
            <!-- end promotion-button order -->
            <div class="col-xs-12 col-sm-12 col-md-5 product-info">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th colspan="2">CẤU HÌNH CHI TIẾT SẢN PHẨM</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Màn hình</td>
                          <td>{!! $row->screen->tech_screen !!}, {!! $row->screen->width_screen !!}, {!! $row->screen->resolution !!}</td>
                        </tr>
                        <tr>
                          <td>Hệ điều hành</td>
                          <td>{!! $row->operaSystem->opera_system !!}</td>
                        </tr>
                        <tr>
                          <td>Cammera trước</td>
                          <td>{!! $row->frontCamera->resolution !!}</td>
                        </tr>
                        <tr>
                          <td>Cammera sau</td>
                          <td>{!! $row->backCamera->resolution !!}</td>
                        </tr>
                        <tr>
                          <td>CPU</td>
                          <td>{!! $row->operaSystem->gpu_speed !!}</td>
                        </tr>
                        <tr>
                          <td>RAM</td>
                          <td>{!! $row->memory->ram !!} GB</td>
                        </tr>
                        <tr>
                          <td>Bộ nhớ trong</td>
                          <td>{!! $row->memory->rom !!} GB</td>
                        </tr>
                        <tr>
                          <td>Hỗ trợ thẻ nhớ</td>
                          <td>{!! $row->memory->external_memory_card !!}</td>
                        </tr>
                        <tr>
                          <td>Thẻ SIM</td>
                          <td>{!! $row->connect->sim !!}</td>
                        </tr>
                        <tr>
                          <td>Dung lượng PIN</td>
                          <td>{!! $row->battery->battery_capacity !!} mAh</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <ul class="cd-items cd-container">
                            <div class="cd-item">
                                <img src="{!!url('uploads/products/'.$row->image)!!}" style="display:none;" alt="Item Preview">
                                <a href="#0" title="" class="btn btn-block btn-default cd-trigger" style="font-size: 12px;">Xem chi tiết</a>
                            </div> <!-- cd-item -->
                        </ul>
                    </div>
                </div>
                <div class="cd-quick-view">
                    <div class="cd-slider-wrapper">
                        <ul class="cd-slider">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <h3><strong>Thông số kỹ thuật chi tiết {!! $row->name !!} {!! $row->color->name !!} {!! $row->memory->rom !!}GB</strong></h3><hr>
                                </div>    
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-3">
                                    <div class="selected">
                                        <img style="height: 200px; width: 200px;  float: left;" src="{!!url('uploads/products/'.$row->image)!!}" alt="Product 1">
                                    </div>    
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-8">
                                <div class="cd-item-info">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th colspan="2">CẤU HÌNH CHI TIẾT SẢN PHẨM</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Màn hình</td>
                                                <td>{!! $row->screen->tech_screen !!}, {!! $row->screen->width_screen !!}, {!! $row->screen->resolution !!}</td>
                                            </tr>
                                            <tr>
                                                <td>Hệ điều hành</td>
                                                <td>{!! $row->operaSystem->opera_system !!}</td>
                                            </tr>
                                            <tr>
                                                <td>Cammera trước</td>
                                                <td>{!! $row->frontCamera->resolution !!}</td>
                                            </tr>
                                            <tr>
                                                <td>Cammera sau</td>
                                                <td>{!! $row->backCamera->resolution !!}</td>
                                            </tr>
                                            <tr>
                                                <td>CPU</td>
                                                <td>{!! $row->operaSystem->gpu_speed !!}</td>
                                            </tr>
                                            <tr>
                                                <td>RAM</td>
                                                <td>{!! $row->memory->ram !!} GB</td>
                                            </tr>
                                            <tr>
                                                <td>Bộ nhớ trong</td>
                                                <td>{!! $row->memory->rom !!} GB</td>
                                            </tr>
                                            <tr>
                                                <td>Hỗ trợ thẻ nhớ</td>
                                                <td>{!! $row->memory->external_memory_card !!}</td>
                                            </tr>
                                            <tr>
                                                <td>Thẻ SIM</td>
                                                <td>{!! $row->connect->sim !!}</td>
                                            </tr>
                                            <tr>
                                                <td>Dung lượng PIN</td>
                                                <td>{!! $row->battery->battery_capacity !!} mAh</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- cd-item-info -->
                            </div>
                        </div>  
                    </ul> <!-- cd-slider -->
                </div> <!-- cd-slider-wrapper -->
                <a href="#0" class="cd-close">Close</a>
            </div> <!-- cd-quick-view -->
        @endforeach
    </div>
    <!-- end info-product -->
    <hr>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8">
            <h2> <small> Đánh giá chi tiết sản phẩm</small></h2>
            <div class="accordion-group">
                <div class="accordion-heading">
                    <p class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                        {!!$row->description!!} Màu đỏ là trên chiếc iPhone 7 Plus Red 128GB là màu lần đầu tiên được Apple mang lên những chiếc iPhone của mình. Theo đó thì những chiếc iPhone mới sẽ có mặt lưng được làm từ nhôm nguyên khối, được sơn lên lớp sơn màu đỏ rất nổi bật và bắt mắt. Đáng tiếc là phần mặt trước của máy vẫn giữ màu trắng quen thuộc nên sẽ cho bạn đôi chút cảm thấy hụt hẫng.
                        Màu đỏ là trên chiếc iPhone 7 Plus Red 128GB là màu lần đầu tiên được Apple mang lên những chiếc iPhone của mình. Theo đó thì những chiếc iPhone mới sẽ có mặt lưng được làm từ nhôm nguyên khối, được sơn lên lớp sơn màu đỏ rất nổi bật và bắt mắt. Đáng tiếc là phần mặt trước của máy vẫn giữ màu trắng quen thuộc nên sẽ cho bạn đôi chút cảm thấy hụt hẫng.
                        Màu đỏ là trên chiếc iPhone 7 Plus Red 128GB là màu lần đầu tiên được Apple mang lên những chiếc iPhone của mình. Theo đó thì những chiếc iPhone mới sẽ có mặt lưng được làm từ nhôm nguyên khối, được sơn lên lớp sơn màu đỏ rất nổi bật và bắt mắt. Đáng tiếc là phần mặt trước của máy vẫn giữ màu trắng quen thuộc nên sẽ cho bạn đôi chút cảm thấy hụt hẫng.
                        Màu đỏ là trên chiếc iPhone 7 Plus Red 128GB là màu lần đầu tiên được Apple mang lên những chiếc iPhone của mình. Theo đó thì những chiếc iPhone mới sẽ có mặt lưng được làm từ nhôm nguyên khối, được sơn lên lớp sơn màu đỏ rất nổi bật và bắt mắt. Đáng tiếc là phần mặt trước của máy vẫn giữ màu trắng quen thuộc nên sẽ cho bạn đôi chút cảm thấy hụt hẫng.
                    </p>
                </div>
            </div>    
            <div id="collapseTwo" class="accordion-body collapse">
                <div class="accordion-inner">
                    <img class="img-responsive" style="height: 200px; width: 200px;" src="{!!url('uploads/products/'.$row->image)!!}" alt="{!!$row->name!!}">
                    {!!$row->description!!} Màu đỏ là trên chiếc iPhone 7 Plus Red 128GB là màu lần đầu tiên được Apple mang lên những chiếc iPhone của mình. Theo đó thì những chiếc iPhone mới sẽ có mặt lưng được làm từ nhôm nguyên khối, được sơn lên lớp sơn màu đỏ rất nổi bật và bắt mắt. Đáng tiếc là phần mặt trước của máy vẫn giữ màu trắng quen thuộc nên sẽ cho bạn đôi chút cảm thấy hụt hẫng.
                </div>
            </div>
            <p>
                <a class="SeeMore" data-toggle="collapse" href="#collapseTwo">Đọc thêm <b class="caret"></b></a>
            </p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4">
            <h2 style="padding-left: 20px;"><small>Tin tức mới</small></h2><hr>     
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding">
                <div class="bt">
                    <div class="image-m pull-left">
                        <a href=""><img style="height: 100px; width: 100px;" class="img-responsive" src="{!!url('uploads/products/'.$row->image)!!}" alt="{!!$row->name!!}"></a>
                    </div>
                </div> <!-- /div bt -->
                <div class="ct">
                    <a href="" title="Chi tiết">
                        <p>
                            {!!$row->description!!} Màu đỏ là trên chiếc iPhone 7 Plus Red 128GB là màu lần đầu tiên được Apple mang lên những chiếc iPhone của mình. Theo đó thì những chiếc iPhone
                        </p>
                    </a>
                </div>
            </div>
            <a href="{!!url('gio-hang/addcart/'.$row->id)!!}" class="pull-right compare">Đọc thêm tin tức</a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4">
            <h2 style="padding-left: 20px;"><small>Sản phẩm tương tự</small></h2><hr>     
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding">
                <div class="bt">
                    <div class="image-m pull-left">
                        <a href=""><img style="height: 150px; width: 110px;" class="img-responsive" src="{!!url('uploads/products/'.$row->image)!!}" alt="{!!$row->name!!}"></a>
                    </div>
                </div> <!-- /div bt -->
                <div class="ct">
                    <h4>{!! $row->name !!}</h4>
                    <h4>{!! $row->price !!} đ</h4>
                    <a href="{!!url('mobile/'.$row->id.'-'.$row->slug)!!}" title="Chi tiết">
                        <ul type="none">
                            <li><strong>Màn Hình</strong> :{!!$row->screen->tech_screen!!}</li>
                            <li><strong>Camera</strong> :{!!$row->backCamera->resolution!!} MP</li>
                            <li><strong>Pin</strong> :{!!$row->battery->battery_capacity!!} mAh</li>
                        </ul>
                    </a>
                </div>
                <a href="" class="pull-right compare">So sánh chi tiết </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8">
            <hr>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4">
                    <p style="float: left;">1 đánh giá {!! $row->name !!}</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3">
                    <a href="" title="" class="btn btn-primary" style="font-size: 15px;">Gửi đánh giá của bạn</a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-8">
            <h5><strong>Lê Công Viên</strong></h5>
            <div>
                <form style="margin-right: 660px;">
                    <input class="star star-5" id="star-5" type="radio" name="star"/>
                    <label class="star star-5" for="star-5"></label>
                    <input class="star star-4" id="star-4" type="radio" name="star"/>
                    <label class="star star-4" for="star-4"></label>
                    <input class="star star-3" id="star-3" type="radio" name="star"/>
                    <label class="star star-3" for="star-3"></label>
                    <input class="star star-2" id="star-2" type="radio" name="star"/>
                    <label class="star star-2" for="star-2"></label>
                    <input class="star star-1" id="star-1" type="radio" name="star"/>
                    <label class="star star-1" for="star-1"></label>
                </form>
                <p>Mua được 1 tháng thấy tất cả đều tốt camare trước đẹp, sau hơi tệ. Vân tay nhạy, chơi game nặn được. Có điều hơi ngốn pin và nóng máy Máy đẹp có điều phải màu đen ra cùng lúc thì OK, lỡ mua màu vàng mún đổi cũng không được nữa hơi bùn. Nhân viên TGDĐ nhiệt tình chu đáo rất hài lòng cảm ơn anh chị.</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8">
            <hr>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8">
                    <div class="widget-area no-padding blank">
                        <div class="status-upload">
                            <form>
                                <textarea style="width: 750px; height: 120px; max-width: 750px; max-height: 200px;"></textarea>
                                <a href="" title="" class="btn btn-primary pull-right" style="font-size: 13px; margin-right: -260px;">Gửi</a>
                            </form>
                        </div><!-- Status Upload  -->
                    </div><!-- Widget Area -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
