<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Hash;

class usercontroller extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }
    
    public function getdanhsach(){
        $user = User::all();
        return view('admin.user.danhsach',['user'=>$user]);
    }
    public function getthem(){
         $user =  User::all();
         return view('admin.user.them',['user'=>$user]);
    }
 
    public function postthem(Request $request){
        $this->validate($request,[
            'name'=>'required|min:3|unique:users,name',
            'password'=>'required|min:6|max:20',
            'email'=>'required|email|unique:users,email',
            'passwordAgain'=>'required|same:password'
        ],[
            'email.required'=>'vui lòng nhập email',
            'email.email'=>'Không đúng định dạng email',
            'email.unique'=>'Email đã có người sử dụng',
            'passwordAgain.same'=>'Mật khẩu không giống nhau',
            'password.min'=>'Mật khẩu ít nhất 6  kí tự và nhiều nhất 20 kí tự'
             ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phanquyen = $request->quyen;	
        $user->save();
        return redirect('admin/user/them')->with('thongbao','Thêm user thành công');
    }
    // public function getsua($id){
    //      $slide =  slide::find($id);
    //      return view('admin/slide/sua',['slide'=>$slide]);
    // }
    // public function postsua(Request $request,$id)
    // {
    //     $slide =Slide::find($id);
    //     if($request->hasFile('image'))
    //     {
    //         $file = $request->file('image');
    //         $duoi =  $file->getClientOriginalExtension();
    //         if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg')
    //         {
    //             return redirect('admin/slide/them')->with('loi','bạn chỉ được chọn file có đuôi jpg,png,jpeg');

    //         }
    //         $name= $file->getClientOriginalName();
    //         $image = str_random(4). "_". $name;
    //         while(file_exists('sourch/image/slide'.$image))
    //         {
    //             $image = str_random(4) . "_" . $name;

    //         }
            
    //         $file->move("sourch/image/slide",$image);
    //         $slide->image = $image;
    //     }
    //     else
    //     {
    //         $slide->image ="";
    //     }
    //     $slide->save();
    //     return redirect('admin/slide/them')->with('thongbao','sửa sản phẩm thành công');
    // }
     
 
    public function getxoa($id)
    {
        $user =User::find($id);
        $user->delete();

        return redirect('admin/user/danhsach')->with('thongbao','Xóa thành công');
    }
}
