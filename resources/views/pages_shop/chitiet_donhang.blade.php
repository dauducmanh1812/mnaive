@extends('layout_shop.master_shop')
@section('content')
	       <p style="color: white;">{{$i=1}}</p>
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">Chi tiết
                            <small>đơn hàng số 1</small>
                        </h3>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr align="center">
                                <th>STT</th>
                                <th>Tên sản phẩm</th>
                                <th>Hình ảnh</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Size</th>
                                <th>Màu sắc</th>
                                <th>Tổng tiền</th>
                                

                                
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($chitietdon as $ct)
                            <tr class="odd gradeX" align="center">
                                <td>{{$i++}}</td>
                                <td>{{$ct->Sanpham->tensanpham}}</td> 
                                <td>
                                    <img src="upload/{{$ct->Sanpham->hinhanh}}" height="50">
                                </td> 
                                <td>{{$ct->Sanpham->gia}}</td>
                                <td>{{$ct->soluong}}</td>
                                <td>{{$ct->size}}</td>
                                <td>{{$ct->mausac}}</td>
                                <td>{{number_format($ct->Sanpham->gia*$ct->soluong)}} VNĐ</td>
                                
                            </tr>
                        @endforeach
                            
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
 
@endsection