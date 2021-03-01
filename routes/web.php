<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','IndexController@GetHome');
Route::get('/home','IndexController@GetIndex')->name('home');
Route::group(['prefix' => 'home'], function(){
	//Route /home/login
	Route::get('login','HomeLoginController@GetLogin');
	Route::post('login','HomeLoginController@PostVali');

	//Route /home/register
	Route::get('register','HomeRegister@GetRegister');
	Route::post('register','HomeRegister@PostVali');

	//Route /home/shoppingcart
	Route::get('ShoppingCart','ShoppingCartController@GetShoppingCart');
});

Route::get('admin','AdminController@GetHome');
//Route cho tới trang admin
Route::group(['prefix' => 'admin'], function(){
	Route::get('','AdminController@GetAdminHome');
	Route::get('home','AdminController@GetHome')->name('adminhome');

	//Router /admin/login
	Route::get('login','AdminLoginController@GetLogin');	

	//Route /admin/user tới trang danh sách user
	Route::get('user','AdminUserController@GetUser');

	//Route /admin/bill tới trang danh sách bill
	Route::get('bill','AdminBillController@GetBill');

	//Route /admin/product tới trang danh sách sản phẩm
	Route::get('product','AdminProductController@GetProduct');

	//Route /admin/addproduct tới trang thêm sản phẩm	
	Route::get('addproduct','AdminAddproductController@GetAddProduct');

	//Route /admin/addproduct tới trang thêm hảng	
	Route::get('category','AdminCategoryController@GetCategory');

	// Route /admin/edit 	
	// Route::get('edit','AdminController@GetEdit');

	// Route /admin/editcategory tới trang sửa hảng	
	Route::get('editcategory','AdminEditCategoryController@GetEditCategory');

	// Route::get('edit','AdminController@GetEdit');
	Route::get('editproduct','AdminEditProductController@GetEditProduct');

});

Route::get('chitietsanpham/{tenlt}',[
	'as'=>'chitietsanpham',
	'uses'=>'ChiTietController@GetChitiet'
]);
Route::get('muahang/{id}',[
	'as'=>'muahang',
	'uses'=>'CartController@GetaddCart'
]);

Route::get('giohang',[
	'as'=>'giohang',
	'uses'=>'CartController@GetshowCart'
]);

Route::get('cauhinhlaptop/{dongsp}',[
	'as'=>'cauhinhlaptop',
	'uses'=>'LaptopTheoCauHinhController@GetCauHinh'
]);

Route::get('test',function(){
	return view('container.san_pham');
});

Route::get('search',[
	'as'=>'search',
	'uses'=>'IndexController@getSearch'
]);