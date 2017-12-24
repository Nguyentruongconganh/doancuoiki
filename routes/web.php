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


Route::get('/',[
    'as'=>'trang-chu',
    'uses'=>'giaodiencontroller@getindex'
]);

Route::get('loaisanpham/{type}',[
    'as'=>'loai-san-pham',
    'uses'=>'giaodiencontroller@getloaisanpham'
]);

Route::get('chitietsanpham/{id}',[
    'as'=>'chi-tiet-san-pham',
    'uses'=>'giaodiencontroller@getchitietsanpham'
]);

Route::get('lienhesanpham',[
    'as'=>'lien-he-san-pham',
    'uses'=>'giaodiencontroller@getlienhesanpham'
]);

Route::get('giohang',[
    'as'=>'check-out',
    'uses'=>'giaodiencontroller@getgiohang'
]);

Route::get('giohang/xoa-gio-hang',[
    'as'=>'empty-cart',
    'uses'=>'giaodiencontroller@xoagiohang'
]);

Route::get('giohang/them-gio-hang/{id}',[
    'as'=>'them-vao-gio-hang',
    'uses'=>'giaodiencontroller@themgiohang'
]);

Route::get('giohang/xoa-khoi-gio-hang/{id}',[
    'as'=>'giam-dan-gio-hang',
    'uses'=>'giaodiencontroller@xoatungsanpham'
]);

Route::get('dathang',[
    'as'=>'dat-hang',
    'uses'=>'giaodiencontroller@getdathang'
]);

Route::post('dathang',[
    'as'=>'dat-hang',
    'uses'=>'giaodiencontroller@postdathang'
]);


//admin
Route::group(['prefix'=>'admin'],function(){
    Route::group(['prefix'=>'loaisanpham'],function(){
        Route::get('danhsach','loaisanphamcontroller@getdanhsach');
        Route::get('sua/{id}','loaisanphamcontroller@getsua');
        Route::post('sua/{id}','loaisanphamcontroller@postsua');
        Route::get('them','loaisanphamcontroller@getthem');
        Route::post('them','loaisanphamcontroller@postthem');

        Route::get('xoa/{id}','loaisanpham@getxoa');
    });

    Route::group(['prefix'=>'sanpham'],function(){
        Route::get('danhsach','sanphamcontroller@getdanhsach');
        Route::get('sua/{id}','sanphamcontroller@getsua');
        Route::post('sua/{id}','sanphamcontroller@postsua');
        Route::get('xoa/{id}','sanphamcontroller@getxoa');
        Route::get('them','sanphamcontroller@getthem');
        Route::post('them','sanphamcontroller@postthem');
    });

    Route::group(['prefix'=>'slide'],function(){
        Route::get('danhsach','slidecontroller@getdanhsach');
        Route::get('sua/{id}','slidecontroller@getsua');
        Route::post('sua/{id}','slidecontroller@postsua');
        Route::get('xoa/{id}','slidecontroller@getxoa');
        Route::get('them','slidecontroller@getthem');
        Route::post('them','slidecontroller@postthem');
    });
});

//dang nhap dang ky
Route::get('dangnhap',[
    'as'=>'dang-nhap',
    'uses'=>'giaodiencontroller@getdangnhap'
]);


Route::get('dangky',[
    'as'=>'dang-ky',
    'uses'=>'giaodiencontroller@getdangky'
]);






Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('search',[
    'as'=>'search',
    'uses'=>'giaodiencontroller@getsearch'
]);