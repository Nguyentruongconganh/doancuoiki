@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sản Phẩm
                            <small>Danh Sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                     @endif
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên Sản Phẩm</th>
                                <th>Loại Sản Phẩm</th>
                                <th>Miêu Tả</th>
                                <th>Gía Gốc</th>
                                <th>Gía Khuyến Mãi</th>
                                <th>Mới</th>
                                <th>Nổi Bật</th>
                                <th>Khuyến Mãi</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($sanpham as $sp)
                            <tr class="odd gradeX" align="center">
                                <td>{{$sp->id}}</td>
                                <td>
                                    <p>{{$sp->name}}</p>
                                    <img width="100px" src="sourch/image/product/{{$sp->image}}" alt="" />
                                </td>
                
                                <td>{{$sp->product_type->name}}</td>
                                <td>{{$sp->description}}</td>
                                <td>{{$sp->unit_price}}</td>
                                <td>{{$sp->promotion_price}}</td>
                                <td>
                                    @if($sp->new == 1)
                                    {{'Có'}}
                                    @else
                                    {{'Không'}}
                                    @endif
                                </td>
                                <td>
                                     @if($sp->highlight == 1)
                                    {{'Có'}}
                                    @else
                                    {{'Không'}}
                                    @endif
                                </td>
                                <td>
                                    @if($sp->promotion == 1)
                                    {{'Có'}}
                                    @else
                                    {{'Không'}}
                                    @endif
                                </td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/sanpham/xoa/{{$sp->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/sanpham/sua/{{$sp->id}}">Edit</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
 </div>
 @endsection