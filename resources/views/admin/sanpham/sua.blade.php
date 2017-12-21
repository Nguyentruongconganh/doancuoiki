
@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sản Phẩm
                            <small>{{$sanpham->name}}</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                         @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach($errors ->all() as $err)
                                    {{$err}}<br>
                                @endforeach
                            </div>
                        @endif

                        @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                        @endif
                        <form action="admin/sanpham/sua/{{$sanpham->id}}" method="POST" enctype="multipart/form-data">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

                            <div class="form-group">
                                <label>Tên Sản Phẩm</label>
                                <input class="form-control" name="name" placeholder="Nhập tên sản phẩm" />
                            </div>

                            <div class="form-group">
                                <label>Loại Sản Phẩm</label>
                                <select class="form-control" name="loaisanpham" id="loaisanpham" >
                                @foreach($loaisanpham as $sp)
                                    @if($sanpham -> producttype ->id == $sp->id )
                                    <option value="{{$sp->id}}">{{$sp->name}}</option>
                                    @endif
                                @endforeach
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label>Miêu tả</label>
                                <textarea id="demo" name="description" class="form-control ckeditor" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Gía gốc</label>
                                <input class="form-control" name="unit_price" placeholder="Nhập giá gốc sản phẩm" />
                            </div>
                            <div class="form-group">
                                <label>Gía khuyến mãi</label>
                                <input class="form-control" name="promotion_price" placeholder="Nhập giá khuyến mãi san phẩm " />
                            </div>
                           
                            <div class="form-group"> 
                                <label>Hình ảnh</label>
                                <input type="file" name="image" class="form-group"/>
                            </div>

                            <div class="form-group">
                                <label>Sản Phẩm Mới</label>
                                <label class="radio-inline">
                                    <input name="new" value="0" checked="" type="radio">Không
                                </label>
                                <label class="radio-inline">
                                    <input name="new" value="1" type="radio">Có
                                </label>
                            </div>

                            <div class="form-group">
                                <label>Sản Phẩm Nổi Bật</label>
                                <label class="radio-inline">
                                    <input name="highlight" value="0" checked="" type="radio">Không
                                </label>
                                <label class="radio-inline">
                                    <input name="highlight" value="1" type="radio">Có
                                </label>
                            </div>

                            <div class="form-group">
                                <label>Sản Phẩm Khuyến Mãi</label>
                                <label class="radio-inline">
                                    <input name="promotion" value="0" checked="" type="radio">Không
                                </label>
                                <label class="radio-inline">
                                    <input name="promotion" value="1" type="radio">Có
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Thêm</button>
                            <button type="reset" class="btn btn-default">Làm Mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
</div>
@endsection