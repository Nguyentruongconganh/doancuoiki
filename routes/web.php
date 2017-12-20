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

Route::get('/', function () {
    return view('welcome');
});


Route::get('index',[
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



//admin

//dang nhap dang ky
Route::get('dangnhap',[
    'as'=>'dang-nhap',
    'uses'=>'giaodiencontroller@getdangnhap'
]);


Route::get('dangky',[
    'as'=>'dang-ky',
    'uses'=>'giaodiencontroller@getdangky'
]);



