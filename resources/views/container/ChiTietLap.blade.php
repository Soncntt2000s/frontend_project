@extends('index')
@section('css')

	<link rel="stylesheet" href="../common/css/style.css" >
	<link rel="stylesheet" href="../common/css/StyleChiTiet.css" >
	<link rel="stylesheet" href="../common/css/bootstrap.min.css">
	<script src="../common/js/bootstrap.min.js"></script>

@endsection
@section('container')
	@if($sanpham)
	<div class="show_discition">
		<div class="col-md-12">
			<p>
				<a href="home">Trang chủ</a>
				>><a href="laptop">Laptop {{$sanpham->hang}}</a>
				>><a href="{{route('chitietsanpham',$sanpham->tenlt)}}">Laptop {{$sanpham->tenlt}}</a>
			</p>
		</div>
		<div class="laptop_content">
			<div class="left_img">
				<img src="{{$sanpham->img}}">
			</div>
			<div class="right_ndung">
				<div class="tenlt">
					<h3>Laptop {{$sanpham->tenlt}}</h3>
					<p>Mã laptop : {{$sanpham->malt}}</p>
				</div>
				<div class="ndung">
					<p><b> --Thương hiệu :</b> {{$sanpham->hang}}</p>
					<p><b> --Dòng sản phẩm :</b> {{$sanpham->dongsp}}</p>
					<h3> --Cấu hình</h3>
					<p>{{$sanpham->cauhinh}}</p>
					<p class="ttrang"><b> --Tình trạng :</b>Còn hàng</p>
					<div class="dongia">Giá khuyến mãi: {{$sanpham->dongia}} đ [Giá đã có VAT]</div>
				</div>
				<div class="button">
					<a href="{{route('muahang',$sanpham->id)}}" class="add_cart">Thêm vào giỏ</a>
					<a href="#" class="check_lap">Đặt mua ngay</a>
				</div>
			</div>
			<div class="sale_qr">
				<div>
					<h3>Ưu đã khách hàng</h3>
				</div>
				<p><b>Xin mời quý khách nhập mã VNPAYQR20 để được giảm tối đa 10% (tối đa 50k) khi thanh toán qua VNPAY QR</b></p>
				<img src="./common/img/qrcode_ngoisaoso.vn.jpeg">
			</div>
		</div>
	</div>
	@endif
@endsection