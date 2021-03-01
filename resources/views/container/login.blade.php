@extends('index')
@section('css')
	<link rel="stylesheet" href="./common/css/Style_User_Login.css" ></link>
	<link rel="stylesheet" href="./common/css/bootstrap.css">
	<script src="./js/bootstrap.min.js"></script>
@endsection
@section('title')
| Login
@endsection
@section('container')
	<div class="reponsive">
		<div  class="box-form-view">
			<div class="box_form_login">

				<p style="text-align: center; padding-top: 10px;"><b>Đăng nhập</b></p>

				<form action="" method="post" class="form" role="form">  
					@csrf
					<div class="form-group has-feedback">
						<input type="email" name="email" placeholder="Email hoặc số điện thoại" class="form-control">
						<i class="glyphicon glyphicon-envelope form-control-feedback"></i>
					</div>
					@if ($errors->has('email'))
						<div class="form-group has-feedback">
							<strong>{{$errors->first('email')}}</strong>
						</div>
					@endif
					<div class="form-group has-feedback">
						<i class="glyphicon glyphicon-lock form-control-feedback"></i>
						<input type="password" name="password" placeholder="Nhập mật khẩu" class="form-control">
					</div>
					@if ($errors->has('password'))
						<div class="form-group has-feedback">
							<strong>{{$errors->first('password')}}</strong>
						</div>
					@endif
			    	<br>
			    	<div class="checkbox">
			    		<input type="checkbox" name="remember">
			    		<label>Remember</label>
			    	</div>
			    	
			    	<button class="btn btn-lg btn-primary btn-block" type="submit"> Đăng nhập</button> 

			    	<a href="#">Quên mật khẩu ?</a>
				    	
			   </form>     
			</div>		<!-- Kết thúc box_form_register  -->
		</div>
	</div>	
@endsection
@section('js')
	<script src="./js/jquery-1.11.1.min.js"></script>
@endsection