@extends('admin.index')
@section('title')
| Product </title>
@endsection
@section('conainer')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sản phẩm</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách sản phẩm</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="/admin/addproduct" class="btn btn-primary">Thêm sản phẩm</a>
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th width="30%">Tên Sản phẩm</th>
											<th>Giá sản phẩm</th>
											<th width="20%">Ảnh sản phẩm</th>
											<th>Hảng</th>
											<th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Laptop DELL N5590G5</td>
											<td>44.990.000 đ</td>
											<td>
												<img width="200px" src="./common/img/DELL/Inspiron_N5590G5/Inspiron_N5590G5_1.png" class="thumbnail">
											</td>
											<td>DELL</td>
											<td>
												<a href="/admin/editproduct" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a href="#" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
											</td>
										</tr>										
									</tbody>
									<tbody>
										<tr>
											<td>1</td>
											<td>Laptop DELL N5590G5</td>
											<td>44.990.000 đ</td>
											<td>
												<img width="200px" src="./common/img/DELL/Inspiron_N5590G5/Inspiron_N5590G5_1.png" class="thumbnail">
											</td>
											<td>DELL</td>
											<td>
												<a href="/admin/editproduct" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a href="#" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
											</td>
										</tr>										
									</tbody>
									<tbody>
										<tr>
											<td>1</td>
											<td>Laptop DELL N5590G5</td>
											<td>44.990.000 đ</td>
											<td>
												<img width="200px" src="./common/img/DELL/Inspiron_N5590G5/Inspiron_N5590G5_1.png" class="thumbnail">
											</td>
											<td>DELL</td>
											<td>
												<a href="/admin/editproduct" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a href="#" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
											</td>
										</tr>										
									</tbody>
								</table>							
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@endsection

@section('js')
	<script>
		$('#calendar').datepicker({
		});
		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>
@endsection
