@extends('index')
@section('css')

	<link rel="stylesheet" href="../common/css/style.css" >
	<link rel="stylesheet" href="../common/css/StyleCart.css" >
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<script src="../js/bootstrap.min.js"></script>

@endsection
@section('container')

	<style type="text/css">
		.continue
		{
			text-align: center;
			width: 20%;
			height: 35px;
			background-color: #f3f4;
			color: black;
			border-radius: 5px;
		}

		.continue:hover
		{
			cursor: pointer;
			color: red;
			background-color: white;
		}
	</style>
	<div class="view_cart">
		<div class="col-md-12">
			<p>Giỏ hàng có 3 sản phẩm</p>
		</div>
		<form>
			<table class="table table-bordered .table-responsive text-center">
				<tr class="active" bgcolor="red;">
					<td width="14%">Ảnh Laptop</td>
					<td width="20%">Tên sản phẩm</td>
					<td width="15%">Số lượng</td>
					<td width="16%">Đơn giá</td>
					<td width="16%">Thành tiền</td>
					<td width="19%">Hành động</td>
				</tr>
              
				<tr>
					<td><img src="../common/img/ACER/Swift_3/Swift_3_SF315.jpg" class="img-responsive"></td>
					<td>Laptop ACER Swift 3-SF315</td>
					<td><input type="text" size="1" value='1' name="soluong[40]" class="span1"></td>
					<td>27.990.000 VNĐ</td>
					<td>27.990.000</td>
					<td>
						<button class="del_lap" type="submit">Xóa hàng</button>
						<button class="update_lap" type="submit">Cập nhật</button>
					</td>
				</tr>

				<tr>
					<td><img src="../common/img/ACER/Swift_3/Swift_3_SF315.jpg" class="img-responsive"></td>
					<td>Laptop ACER Swift 3-SF315</td>
					<td><input type="text" size="1" value='1' name="soluong[40]" class="span1"></td>
					<td>27.990.000 VNĐ</td>
					<td>27.990.000</td>
					<td>
						<button class="del_lap" type="submit">Xóa hàng</button>
						<button class="update_lap" type="submit">Cập nhật</button>
					</td>
				</tr>
				
				<tr>
					<td><img src="../common/img/ACER/Swift_3/Swift_3_SF315.jpg" class="img-responsive"></td>
					<td>Laptop ACER Swift 3-SF315</td>
					<td><input type="text" size="1" value='1' name="soluong[40]" class="span1"></td>
					<td>27.990.000 VNĐ</td>
					<td>27.990.000</td>
					<td>
						<button class="del_lap" type="submit">Xóa hàng</button>
						<button class="update_lap" type="submit">Cập nhật</button>
					</td>
				</tr>
             	
             	<tr>
             		
             		<td colspan="6" >
             			<button type="submit" class="continue">Tiếp tục mua hàng</button>
             		</td>
             	</tr>
			</table>
		</form>
	</div>
@endsection
