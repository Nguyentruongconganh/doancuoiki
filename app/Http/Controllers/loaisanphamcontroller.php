<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductType;
use App\Product;
class loaisanphamcontroller extends Controller
{
    public function getdanhsach(){
        $loaisanpham = ProductType::all();
        return view('admin.loaisanpham.danhsach',['loaisanpham'=>$loaisanpham]);
    }
    public function getthem(){
        return view('admin.loaisanpham.them');
    }

    public function postthem(Request $request){
        $this->validate($request,
        [
            'name'=>'required|unique:ProductType,name|min:2|max:100'
        ],
        [
            'name.required'=>'Bạn Chưa Nhập Loại Sản Phẩm',
            'name.unique'=>'Tên loại sản phẩm đã tồn tại',
            'name.min'=>'Tên loại sản phẩm phải có độ dài tự 3 cho đến 100 ký tự ',
            'name.max'=>'Tên loại sản phẩm phải có độ dài tự 3 cho đến 100 ký tự ',
        ]);

        $loaisanpham = new ProductType;
        $loaisanpham->name = $request->name;
        $loaisanpham->save();

        return redirect('admin/loaisanpham/them')->with('thongbao','Thêm Thành Công');
    }
    public function getsua($id){
       $loaisanpham =  ProductType::find($id);
       return view('admin/loaisanpham/sua',['loaisanpham'=>$loaisanpham]);
    }
    public function postsua(Request $request,$id)
    {
        $loaisanpham = ProductType::find($id);
        $this->validate($request,
        [
            'name'=>'required|unique:ProductType,name|min:2|max:100'
        ],
        [
            'name.required'=>'Bạn Chưa Nhập Loại Sản Phẩm',
            'name.unique'=>'Tên loại sản phẩm đã tồn tại',
            'name.min'=>'Tên loại sản phẩm phải có độ dài tự 3 cho đến 100 ký tự ',
            'name.max'=>'Tên loại sản phẩm phải có độ dài tự 3 cho đến 100 ký tự ',
        ]);

        $loaisanpham->name = $request->name;
        $loaisanpham->save();
        return redirect('admin/loaisanpham/sua/'.$id)->with('thongbao','Sửa Thành Công');
    }

    public function getxoa($id)
    {
        $loaisanpham = ProductType::find($id);
        $loaisanpham->delete();
        return redirect('admin/loaisanpham/danhsach')->with('thongbao','Bạn đã xóa thành công');
    }
}
