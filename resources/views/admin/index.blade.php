<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TTS-Admin @yield('title')
	<base href="{{asset('')}}">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	<script src="js/lumino.glyphs.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		@include('admin.header.headeradmin')
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li role="presentation" class="divider"></li>
			<li class="active"><a href="admin"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Trang chủ</a></li>
			<li><a href="admin/bill"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Hóa đơn</a></li>
			<li><a href="admin/product"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Sản phẩm</a></li>
			<li><a href="admin/category"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Hảng</a></li>
			<li role="presentation" class="divider"></li>
		</ul>
		
	</div><!--/.sidebar-->
	
	@yield('conainer')
	<script src="./js/jquery-1.11.1.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/chart.min.js"></script>
	<script src="./js/chart-data.js"></script>
	<script src="./js/easypiechart.js"></script>
	<script src="./js/easypiechart-data.js"></script>
	<script src="./js/bootstrap-datepicker.js"></script>
	@yield('js')
	
</body>

</html>