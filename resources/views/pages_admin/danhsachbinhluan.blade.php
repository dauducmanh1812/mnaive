@extends('layout_admin.master_admin')
@section('content')
    
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">All comments from users
                            <small></small>
                        </h3>
                        <p style="color: white;">{{$i=1}}</p>
                    </div>
                    
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Customer ID</th>
                                <th>Customer Name</th>
                                <th>Product Name</th>
                                <th>Product Photo</th>
                                <th>Detail</th>
                                <th>Time</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($danhSachBL as $bl)
                            <tr class="odd gradeX" align="center">
                                <td>{{$i++}}</td>
                                <td>{{$bl->user_id}}</td>
                                <td>{{$bl->hoten}}</td>
                                <td>{{$bl->Sanpham->tensanpham}}</td>
                                <td>
                                    <img style="height:50px; " src="upload/{{$bl->Sanpham->hinhanh}}">
                                </td>
                                <td>{{$bl->noidung}}</td>
                                <td>{{$bl->created_at}}</td>
                                
                                <td>
                                    <a href="xoa-binh-luan/{{$bl->id}}" onclick="return confirm('Do you want to delete this comment?')">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </a>
                                </td>
                                
                            </tr>
                        @endforeach
                            
                        </tbody>
                    </table>
                   
                </div>

                <!-- /.row -->
 
@endsection 