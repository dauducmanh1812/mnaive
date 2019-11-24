@extends('layout_shop.master_shop')
@section('content')
	
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">Danh sách 
                            <small></small>
                        </h3>
                        <p style="color: white;">{{$i=1}}</p>
                    </div>
                    
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr align="center">
                                <th>STT</th>
                                <th>Tên sản phẩm</th>
                                <th>Hình ảnh</th>
                                <th>Thương hiệu</th>
                                <th>Số lượng nhập</th>
                                <th>Số lượng xuất</th>
                                <th>Thời gian nhập</th>

                                
                                
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($spkho as $lsp)
                            <tr class="odd gradeX" align="center">
                                <td>{{$i++}}</td>
                                <td>{{$lsp->tensanpham}}</td>
                                <td>
                                    <img style="height:50px; " src="upload/{{$lsp->hinhanh}}">
                                </td>
                                <td>{{$lsp->hangsx}}</td>
                                <td>{{$lsp->Sanphamshop->soluongnhap}}</td>
                                <td>{{$lsp->Sanphamshop->soluongxuat}}</td>
                                <td>{{$lsp->created_at}}</td>
                                
                            </tr>
                        @endforeach
                            
                        </tbody>
                    </table>
                </div>

                <!-- /.row -->
 
@endsection 