@extends('index')
@section('css')
    <link rel="stylesheet" type="text/css" href="../common/css/search.css">
@endsection
@section('container')
	<div class="reponsive">
    <div class="Container">
        <a class="nav-reponsive-container-buy" id="giohang" href="giohang">
            <img class="nav-reponsive-container-buy__img" src="./common/img/square-shopping-bag-with-handle.png" alt="Số sản phẩm đã chọn mua">
            <div class="nav-reponsive-container-buy__txt"><b class="js-buy"></b></div>
        </a>
        <!-- Content -->
        <div class="content">
            <div class="content-info">
                <div class="content-info-title"><b>Liên hệ với TTS</b></div>
                <div class="content-info-border"></div>
                <div class="content-marquee">
                    <marquee onmouseover="stop()" onmouseout="start()">
                        Gmail: laptop.TTS@gmail.com
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Hotline: 1900 9999 - (028) 66592222
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Địa chỉ: 37 Đường 3 tháng 2, Phường 12, Quận 10, Tp.HCM
                    </marquee>
                </div>
            </div>
            <div class="content-sale">
                <div class="content-sale-box">
                    <div class="content-sale-header">
                        <div class="content-sale-header-title">
                            <h3 class="content-sale-header-title__txt">Kết Quả Tìm Kiếm</h3>
                            <div class="content-sale-bg">
                                <div class="content-sale-bg1"></div>
                                <div class="content-sale-bg2"></div>
                            </div>
                        </div>
                    </div>

                    <div class="content-sale-list">
                        @foreach($product as $pro)
                        <div class="content-sale-list-item">
                            <a href="{{route('chitietsanpham',$pro->tenlt)}}"><img src="{{$pro->img}}" title="{{$pro->tenlt}}"></a>
                            <p><b>{{$pro->tenlt}}<br></b></p>
                            <p class="content-sale-list-item__price">Giá: {{$pro->dongia}} VNĐ</p>
                            <br>
                            <a href="{{route('chitietsanpham',$pro->tenlt)}}" class="detail">Chi tiết</a>
                            <a href="{{ url('muahang',$pro->id) }}" class="buy_now" data-name="{{$pro->tenlt}}" name="add-cart">Mua ngay</a>
                        </div>
                        @endforeach
                    </div>
                   </div>
            </div>
            <div class="content-service">
                <div class="content-service-bg">
                    <a href="#" class="content-service-content">
                        <img class="content-service-content__img" src="../common/img/shipped.png">
                        <p class="content-service-content__txt"><b>GIAO HÀNG MIỄN PHÍ</b></p>
                    </a>
                </div>
                <div class="content-service-bg">
                    <a href="#" class="content-service-content">
                        <img class="content-service-content__img" src="../common/img/credit-cards-payment.png">
                        <p class="content-service-content__txt"><b>THANH TOÁN LINH HOẠT</b></p>
                    </a>
                </div>
                <div class="content-service-bg">
                    <a href="#" class="content-service-content">
                        <img class="content-service-content__img" src="../common/img/repairing-service.png">
                        <p class="content-service-content__txt"><b>BẢO HÀNH TẠI NƠI SỮ DỤNG</b></p>
                    </a>
                </div>
            </div>
        </div>
        <!-- End content -->
    </div>
</div>
@endsection