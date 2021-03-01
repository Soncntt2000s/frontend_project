<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TTS-Admin | Bill </title>
    <base href="{{asset('')}}">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <script src="js/lumino.glyphs.js"></script>
<style>
#navbar{
	margin-top:50px;}
#tbl-first-row{
	font-weight:bold;}
#logout{
	padding-right:30px;}		
</style>
</head>
<body style="padding-top:0;">
    @include('admin.header.headeradmin')
<div class="container">

    <div id="navbar" class="row">
    	<div class="col-sm-12">
        	<nav class="navbar navbar-default">
  				<div class="container-fluid">
                	<ul class="nav navbar-nav">
                        <li><a href="admin">Home</a></li>
                        <li><a href="admin/user">Khách hàng</a></li>
                        <li><a href="admin/bill">Hóa đơn</a></li>
                        <li><a href="admin/orders">Đơn đặt hàng</a></li>
                	</ul>
                   <!--  <p id="logout" class="navbar-text navbar-right"><a class="navbar-link" href="#">Logout</a></p> -->
                </div>
            </nav>
        </div>
    </div>
    <div class="row">
    	<div class="col-sm-12">
        	<table class="table table-striped">
            	<tr id="tbl-first-row">
                	<td width="5%">#</td>
                    <td width="21.25%">Fullname</td>
                    <td width="15%">Status</td>
                    <td width="21.25%">Email</td>
                    <td width="27.5%%">Địa chỉ</td>
                    <td width="5%">Edit</td>
                    <td width="5%">Delete</td>
                </tr>
                <tr>
                	<td>1</td>
                    <td>Nguyễn Văn A</td>
                    <td>Đã thanh toán</td>
                    <td>nguyenvana@gmail.com</td>
                    <td>223 đinh bộ lỉnh, phường 5 , Quận Bình Thạnh, HCM</td>
                    <td><a href="#">Edit</a></td>
                    <td><a href="#">Delete</a></td>
                </tr>
                <tr>
                	<td>2</td>
                    <td>Lê Thị B</td>
                    <td>Đã thanh toán</td>
                    <td>lethib@gmail.com</td>
                    <td>223 đinh bộ lỉnh, phường 5 , Quận Bình Thạnh, HCM</td>
                    <td><a href="#">Edit</a></td>
                    <td><a href="#">Delete</a></td>
                </tr>
                <tr>
                	<td>3</td>
                    <td>Nguyễn Văn A</td>
                    <td>Đã thanh toán</td>
                    <td>nguyenvana@gmail.com</td>
                    <td>223 đinh bộ lỉnh, phường 5 , Quận Bình Thạnh, HCM</td>
                    <td><a href="#">Edit</a></td>
                    <td><a href="#">Delete</a></td>
                </tr>
                <tr>
                	<td>4</td>
                    <td>Lê Thị B</td>
                    <td>Đã thanh toán</td>
                    <td>lethib@gmail.com</td>
                    <td>223 đinh bộ lỉnh, phường 5 , Quận Bình Thạnh, HCM</td>
                    <td><a href="#">Edit</a></td>
                    <td><a href="#">Delete</a></td>
                </tr>
                <tr>
                	<td>5</td>
                    <td>Nguyễn Văn A</td>
                    <td>Đã thanh toán</td>
                    <td>nguyenvana@gmail.com</td>
                    <td>223 đinh bộ lỉnh, phường 5 , Quận Bình Thạnh, HCM</td>
                    <td><a href="#">Edit</a></td>
                    <td><a href="#">Delete</a></td>
                </tr>
                <tr>
                	<td>6</td>
                    <td>Lê Thị B</td>
                    <td>Đã thanh toán</td>
                    <td>lethib@gmail.com</td>
                    <td>223 đinh bộ lỉnh, phường 5 , Quận Bình Thạnh, HCM</td>
                    <td><a href="#">Edit</a></td>
                    <td><a href="#">Delete</a></td>
                </tr>
			</table>
            <div aria-label="Page navigation">
            	<ul class="pagination">
                	<li>
                    	<a aria-label="Previous" href="#">
                        	<span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li>
                    	<a href="#" aria-label="Next">
        					<span aria-hidden="true">&raquo;</span>
      					</a>
      				</li>
                </ul>
            </div>
        </div>
    </div>
</div>

</body>
</html>
