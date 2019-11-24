@extends('layout_shop.master_shop')
@section('content')
    
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">Top sản phẩm bán chạy nhất
                            <small></small>
                        </h3>
                        <p style="color: white;">{{$i=1}}</p>
                    </div>
                    
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr align="center">
                                <th>Thứ hạng</th>
                                <th>Tên sản phẩm</th>
                                <th>Hình ảnh</th>
                                <th>Số lượng xuất</th>
                                <th>Doanh thu</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($sanPhamBanChay as $bl)
                            <tr class="odd gradeX" align="center">
                                <td>{{$i++}}</td>
                                <td>{{$bl->Sanpham->tensanpham}}</td>
                                <td>
                                    <img style="height:50px; " src="upload/{{$bl->Sanpham->hinhanh}}">
                                </td>
                                <td>{{$bl->soluongxuat}}</td>
                                <td>
                                    {{number_format($bl->soluongxuat*$bl->Sanpham->gia)}}
                                    đ
                                </td>

                               
                                
                            </tr>
                        @endforeach
                           
                        </tbody>
                        
                    </table>
                    <div class="row" align="center">
                        {{$sanPhamBanChay->links()}}
                    </div>
                </div>

                <!-- /.row -->
 
@endsection 