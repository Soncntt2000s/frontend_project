@extends('index')
@section('css')
    <script href="..common/js/function.js"></script>
@endsection
@section('container')
<div class="reponsive">
    <div class="Container">
        <a class="nav-reponsive-container-buy" id="giohang" href="giohang">
            <img class="nav-reponsive-container-buy__img" src="./common/img/square-shopping-bag-with-handle.png" alt="Số sản phẩm đã chọn mua">
            <div class="nav-reponsive-container-buy__txt"><b class="js-buy"></b></div>
        </a>
        <!-- <a href="#" class="cd-top">Back To Top</a> -->
        <!-- Banner -->
        @include('container.banner')
        <!-- End banner -->
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
                            <h3 class="content-sale-header-title__txt">Laptop DELL</h3>
                            <div class="content-sale-bg">
                                <div class="content-sale-bg1"></div>
                                <div class="content-sale-bg2"></div>
                            </div>
                        </div>
                        <div class="content-sale-header-list">
                            <a href="#" class="content-sale-header-list__txt">Phổ Thông</a>
                            <a href="#" class="content-sale-header-list__txt">Doanh Nhân</a>
                            <a href="#" class="content-sale-header-list__txt">Máy Trạm</a>
                            <a href="#" class="content-sale-header-list__txt">Gaming Phổ thông</a>
                            <a href="#" class="content-sale-header-list__txt">Gaming Cao Cấp</a>
                            <a href="#" class="content-sale-header-list__txt">Xem tất cả ...</a>
                        </div>
                    </div>

                    <div class="content-sale-list">
                        @foreach($line_table_dell as $line_table_dell)
                        <div class="content-sale-list-item">
                            <a href="{{route('chitietsanpham',$line_table_dell->tenlt)}}"><img src="{{$line_table_dell->img}}" title="{{$line_table_dell->tenlt}}"></a>
                            <p><b>{{$line_table_dell->tenlt}}<br></b></p>
                            <p class="content-sale-list-item__price">Giá: {{$line_table_dell->dongia}} VNĐ</p>
                            <br>
                            <a href="{{route('chitietsanpham',$line_table_dell->tenlt)}}" class="detail">Chi tiết</a>
                            <a href="{{ url('muahang',$line_table_dell->id) }}" class="buy_now" data-name="{{$line_table_dell->tenlt}}" name="add-cart">Mua ngay</a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="content-sale-box">
                    <div class="content-sale-header">
                        <div class="content-sale-header-title">
                            <h3 class="content-sale-header-title__txt">Laptop ACER</h3>
                            <div class="content-sale-bg">
                                <div class="content-sale-bg1"></div>
                                <div class="content-sale-bg2"></div>
                            </div>
                        </div>
                        <div class="content-sale-header-list">
                            <a href="#" class="content-sale-header-list__txt">Phổ Thông</a>
                            <a href="#" class="content-sale-header-list__txt">Doanh Nhân</a>
                            <a href="#" class="content-sale-header-list__txt">Gaming Phổ Thông</a>
                            <a href="#" class="content-sale-header-list__txt">Xem tất cả...</a>
                        </div>
                    </div>
                    <div class="content-sale-list">
                        @foreach($line_table_acer as $line_table_acer)
                        <div class="content-sale-list-item">
                            <a href="{{route('chitietsanpham',$line_table_acer->tenlt)}}"><img src="{{$line_table_acer->img}}" title="{{$line_table_acer->tenlt}}"></a>
                            <p><b>{{$line_table_acer->tenlt}}<br></b></p>
                            <p class="content-sale-list-item__price">Giá:{{$line_table_acer->dongia}} VNĐ</p>
                            <br>
                            <a href="{{route('chitietsanpham',$line_table_acer->tenlt)}}" class="detail">Chi tiết</a>
                            <a href="{{ url('muahang',$line_table_dell->id) }}" class="buy_now" name="add-cart">Mua ngay</a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="content-sale-box">
                    <div class="content-sale-header">
                        <div class="content-sale-header-title">
                            <h3 class="content-sale-header-title__txt">Laptop ASUS</h3>
                            <div class="content-sale-bg">
                                <div class="content-sale-bg1"></div>
                                <div class="content-sale-bg2"></div>
                            </div>
                        </div>
                        <div class="content-sale-header-list">
                            <a href="#" class="content-sale-header-list__txt">Phổ Thông</a>
                            <a href="#" class="content-sale-header-list__txt">Gaming Phổ Thông</a>
                            <a href="#" class="content-sale-header-list__txt">Doanh Nhân</a>
                            <a href="#" class="content-sale-header-list__txt">Gaming Cao Cấp</a>
                            <a href="#" class="content-sale-header-list__txt">Xem tất cả...</a>
                        </div>
                    </div>
                    <div class="content-sale-list">
                        @foreach($line_table_asus as $line_table_asus)
                        <div class="content-sale-list-item">
                            <a href="{{route('chitietsanpham',$line_table_asus->tenlt)}}"><img src="{{$line_table_asus->img}}" title="{{$line_table_asus->tenlt}}"></a>
                            <p><b>{{$line_table_asus->tenlt}}<br></b></p>
                            <p class="content-sale-list-item__price">Giá:{{$line_table_asus->dongia}} VNĐ</p>
                            <br>
                            <a href="{{route('chitietsanpham',$line_table_asus->tenlt)}}" class="detail">Chi tiết</a>
                            <a href="{{ url('muahang',$line_table_dell->id) }}" class="buy_now" name="add-cart">Mua ngay</a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="content-sale-box">
                    <div class="content-sale-header">
                        <div class="content-sale-header-title">
                            <h3 class="content-sale-header-title__txt">Laptop HP</h3>
                            <div class="content-sale-bg">
                                <div class="content-sale-bg1"></div>
                                <div class="content-sale-bg2"></div>
                            </div>
                        </div>
                        <div class="content-sale-header-list">
                            <a href="#" class="content-sale-header-list__txt">Phổ Thông</a>
                            <a href="#" class="content-sale-header-list__txt">Doanh Nhân</a>
                            <a href="#" class="content-sale-header-list__txt">Máy Trạm</a>
                            <a href="#" class="content-sale-header-list__txt">Gaming Phổ Thông</a>
                            <a href="#" class="content-sale-header-list__txt">Xem tất cả...</a>
                        </div>
                    </div>
                    <div class="content-sale-list">
                        @foreach($line_table_hp as $line_table_hp)
                        <div class="content-sale-list-item">
                            <a href="{{route('chitietsanpham',$line_table_hp->tenlt)}}"><img src="{{$line_table_hp->img}}" title="{{$line_table_hp->tenlt}}"></a>
                            <p><b>{{$line_table_hp->tenlt}}<br></b></p>
                            <p class="content-sale-list-item__price">Giá: {{$line_table_hp->dongia}} VNĐ</p>
                            <br>
                            <a href="{{route('chitietsanpham',$line_table_hp->tenlt)}}" class="detail">Chi tiết</a>
                            <a href="{{ url('muahang',$line_table_dell->id) }}" class="buy_now" name="add-cart">Mua ngay</a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="content-sale-box">
                    <div class="content-sale-header">
                        <div class="content-sale-header-title">
                            <h3 class="content-sale-header-title__txt">Laptop LENOVO</h3>
                            <div class="content-sale-bg">
                                <div class="content-sale-bg1"></div>
                                <div class="content-sale-bg2"></div>
                            </div>
                        </div>
                        <div class="content-sale-header-list">
                            <a href="#" class="content-sale-header-list__txt">Phổ Thông</a>
                            <a href="#" class="content-sale-header-list__txt">Doanh Nhân</a>
                            <a href="#" class="content-sale-header-list__txt">Máy Trạm</a>
                            <a href="#" class="content-sale-header-list__txt">Gaming Phổ Thông</a>
                            <a href="#" class="content-sale-header-list__txt">Xem tất cả...</a>
                        </div>
                    </div>
                    <div class="content-sale-list">
                        @foreach($line_table_lenovo as $line_table_lenovo)
                        <div class="content-sale-list-item">
                            <a href="{{route('chitietsanpham',$line_table_lenovo->tenlt)}}"><img src="{{$line_table_lenovo->img}}" title="{{$line_table_lenovo->tenlt}}"></a>
                            <p><b>{{$line_table_lenovo->tenlt}}<br></b></p>
                            <p class="content-sale-list-item__price">Giá: {{$line_table_lenovo->dongia}} VNĐ</p>
                            <br>
                            <a href="{{route('chitietsanpham',$line_table_lenovo->tenlt)}}" class="detail">Chi tiết</a>
                            <a href="{{ url('muahang',$line_table_dell->id) }}" class="buy_now" name="add-cart">Mua ngay</a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="content-sale-box">
                    <div class="content-sale-header">
                        <div class="content-sale-header-title">
                            <h3 class="content-sale-header-title__txt">Laptop MSI</h3>
                            <div class="content-sale-bg">
                                <div class="content-sale-bg1"></div>
                                <div class="content-sale-bg2"></div>
                            </div>
                        </div>
                        <div class="content-sale-header-list">
                            <a href="#" class="content-sale-header-list__txt">Gaming Cao Cấp</a>
                            <a href="#" class="content-sale-header-list__txt">Đồ Họa</a>
                            <a href="#" class="content-sale-header-list__txt">Xem tất cả...</a>
                        </div>
                    </div>
                    <div class="content-sale-list">
                        @foreach($line_table_msi as $line_table_msi)
                        <div class="content-sale-list-item">
                            <a href="{{route('chitietsanpham',$line_table_msi->tenlt)}}"><img src="{{$line_table_msi->img}}" title="{{$line_table_msi->tenlt}}"></a>
                            <p><b>{{$line_table_msi->tenlt}}<br></b></p>
                            <p class="content-sale-list-item__price">Giá: {{$line_table_msi->dongia}} VNĐ</p>
                            <br>
                            <a href="{{route('chitietsanpham',$line_table_msi->tenlt)}}" class="detail">Chi tiết</a>
                            <a href="{{ url('muahang',$line_table_dell->id) }}" class="buy_now" name="add-cart">Mua ngay</a>
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
