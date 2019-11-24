@extends('layout_shop.master_shop')
@section('content')
	
               <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">Danh sách
                            <small>Sản phẩm khuyến mại</small>
                        </h3>
                    </div>
                    <!-- /.col-lg-12 -->
                    <p style="color: white;">{{$i=1}}</p>
                    <table class="table table-striped table-bordered table-hover" >
                        <thead>
                            <tr align="center">
                                <th>STT</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá</th>
                                <th>Tỉ lệ khuyến mại</th>
                                <th>Hình ảnh</th>
                                <th>Thêm vào danh sách khuyến mại</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($list_sp as $list)
                            
                            <tr class="odd gradeX" align="center">
                                <td>{{$i++}}</td>
                                <td>{{$list->tensanpham}}</td>
                                <td>{{number_format($list->gia)}}đ</td>
                                <td>{{$list->tilekhuyenmai}}%</td>
                                <td>
                                    <img src="upload/{{$list->hinhanh}}" style="height: 50px;">
                                </td>
                                @if($list->trangthai==1)
                                    <td style="color:#12f112;">Đã thêm </td>
                                    
                                @else
                                     <td >
                                        <a href="qlshop/shop/{{$shop->id}}/khuyenmai/chapnhan/{{$list->id}}"  style="color:red;">Thêm ngay</a>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                            
                        </tbody>
                    </table>
                </div>

@endsection
