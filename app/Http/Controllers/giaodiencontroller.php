<?php

namespace App\Http\Controllers;
use Hash;

use Illuminate\Http\Request;
use App\Slide;
use App\Product;
use App\ProductType;
use App\User;
use App\Cart;
use Auth;
use Session;
class giaodiencontroller extends Controller
{
   
    public function getindex()
    {
        $slide = Slide::all();
        $new_product = Product::where('new',1)->paginate(8);
        $hightlight = Product::where('highlight',1)->paginate(8);
        $promotion = Product::where('promotion',1)->paginate(8);

        return view('page.trangchu',compact('slide','new_product','hightlight','promotion'));
    }
    public function getloaisanpham($type)
    {
        $sp_theoloai = Product::where('id_type',$type)->paginate(3);
        $loai = ProductType::all();
        $loai_sp = ProductType::where('id',$type)->first();
        return view('page.loaisanpham',compact('sp_theoloai','loai','loai_sp'));
    }
    public function getchitietsanpham(Request $rep)
    {
        $sanpham = Product::where('id',$rep->id)->first();
        $sp_tuongtu = Product::where('id_type',$sanpham->id_type)->get();
        return view('page.chitietsanpham',compact('sanpham','sp_tuongtu'));
    }
    public function getlienhesanpham()
    {
        return view('page.lienhe');
    }
    public function getdangnhap()
    {
        return view('page.dangnhap');
    }

    public function getdangky()
    {
        return view('page.dangky');
    }

    public function getgiohang()
    {
        return view('page.checkout');
    }

    public function themgiohang(Request $req,$id){
        $prdct = Product::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($prdct,$id);
        $req->Session()->put('cart',$cart);
        return redirect()->back();
    }

    public function xoatungsanpham($id){
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);
        if(count($cart->items) > 0)
            Session::put('cart',$cart);
        else
            Session::forget('cart');
        return redirect()->back();
    }


    public function xoagiohang(){
        if(Session::has('cart'))
            Session::forget('cart');
        return redirect()->back();
    }

   
}
