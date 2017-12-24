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
use App\Customer;
use App\Bill;
use App\BillDetail;
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
    public function getdathang()
    {
        return view('page.dathang');
    }
    public function postdathang(Request $req)
    {
        $cart = Session::get('cart');
        $customer = new Customer;
        $customer->name = $req ->name;
        $customer->gender=$req->gender;
        $customer->email = $req->email;
        $customer->address = $req->address;
        $customer->phone_number=$req->phone;
        $customer->note = $req->notes;
        $customer->save();

        $bill = new Bill;
        $bill->id_customer = $customer->id;
        $bill->date_order = date('Y-m-d');
        $bill->total = $cart->totalPrice;
        $bill->payment = $req->payment;
        $bill->note = $req->notes;
        $bill->save();

        foreach($cart->items as $key => $value)
        {
            $bill_detail = new BillDetail;
            $bill_detail->id_bill= $bill->id;
            $bill_detail->id_product = $key;
            $bill_detail->quantity = $value['qty'];
            $bill_detail->unit_price = $value['price'] / $value['qty'];
            $bill_detail->save();
        }
        Session::forget('cart');
        return redirect()->back()->with('thongbao','Đặt Hàng thành công');
        

    }
    public function getsearch(Request $rep)
    {
        $product = Product::where('name','like','%'.$rep->key.'%')->orwhere('unit_price',$rep->key)->paginate(4);
        return view('page.timkiem',compact('product'));

    }
   
}
