@extends('layout_shop.master_shop')
@section('content')
    
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">Danh sách đánh giá của khách hàng
                            <small></small>
                        </h3>
                        <p style="color: white;">{{$i=1}}</p>
                    </div>
                    
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr align="center">
                                <th>STT</th>
                                <th>Tên khách hàng</th>
                                <th>Tên sản phẩm</th>
                                <th>Hình ảnh</th>
                                <th>Số <i class="fa fa-star" aria-hidden="true"></i></th>
                                <th>Nội dung</th>
                                <th>Thời gian bình luận</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($binhluan as $bl)
                            <tr class="odd gradeX" align="center">
                                <td>{{$i++}}</td>
                                <td>{{$bl->hoten}}</td>
                                <td>{{$bl->Sanpham->tensanpham}}</td>
                                <td>
                                    <img style="height:50px; " src="upload/{{$bl->Sanpham->hinhanh}}">
                                </td>
                                <td>
                                    @if($bl->sodiem ==3)

                                                        <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                                                        <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                                                        <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                                                    @elseif($bl->sodiem ==4)
                                                        <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                                                        <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                                                        <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                                                        <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                                                    @elseif($bl->sodiem ==2)
                                                        <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                                                        <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                                                    @elseif($bl->sodiem ==1)
                                                        <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                                    @endif
                                </td>
                                


                                <td>{{$bl->noidung}}</td>
                                <td>{{$bl->created_at}}</td>

                               <!--  <td>
                                    <a href="qlshop/shop/{{$shop->id}}/binhluan/xoa/{{$bl->id}}" onclick="return confirm('Bạn có thực sự muốn xóa câu hỏi này?')">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </a>
                                </td> -->
                                
                            </tr>
                        @endforeach
                            
                        </tbody>
                    </table>
                </div>

                <!-- /.row -->
 
@endsection 