@extends('layout_shop.master_shop')
@section('content')
	
                <div class="row">
                    <div class="col-lg-12">

                        <h3 class="page-header">Khuyến mại
                            <small>đồng giá</small>
                        </h3>
                            <p style="color: white;">{{$i=1}}</p>
                    <form style="width: 300px;padding-bottom: 30px" 
                        method="post" action="qlshop/shop/{{$shop->id}}/khuyenmai/chienluoc/donggia">
                        <input type="hidden" name="_token" value="{{csrf_token()}}" >
                        @if(Session::has('thanhcong'))
                             <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
                         @endif
                        <div class="form-group">
                                <label>Nhập giá khuyến mại:</label>
                                <input class="form-control" name="gia" placeholder="VNĐ" />
                        </div>
                         <div class="form-group">
                                <label>Nhập số ngày khuyến mại:</label>
                                <input class="form-control" name="songay" placeholder="days" />
                        </div>
                        <button type="submit" class="btn btn-success">Cập nhật</button>
                    </form>
                    </div>


                   
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr align="center">
                                <th>STT</th>
                                <th>Tên sản phẩm</th>
                                <th>Hình ảnh</th>
                                <th> Giá</th>
                                <th>Khuyến mại đến</th>
                                <th>Khuyến mãi còn lại</th>
                                <th>Xóa</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($danhsach as $ds)
                            <tr class="odd gradeX" align="center">
                                <td>{{$i++}}</td>
                                <td>{{$ds->tensanpham}}</td>
                                <td>
                                    <img src="upload/{{$ds->hinhanh}}" style="height: 50px;">
                                </td>
                                <td>{{number_format($ds->kmdonggia)}}đ</td>
                                <td>{{$ds->thoigiankmdonggia}}</td>
                                @if(strtotime($ds->thoigiankmdonggia)<=strtotime(date('Y-m-d H:i:s')))
                                    <td style="color: red">Đã hết hạn</td>
                                @else
                                    <td style="color: green;">
                                        {{ROUND((strtotime($ds->thoigiankmdonggia)-strtotime(date('Y-m-d H:i:s')))/86400)}}
                                        ngày
                                    </td>
                                @endif
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
                            </tr>
                        @endforeach
                            
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
 
@endsection