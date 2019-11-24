@extends('layout_shop.master_shop')
@section('content')
	 <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">Update
                            <small>Sản phẩm</small>
                        </h3>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                     
                        <form action="qlshop/shop/{{$shop->id}}/sanpham/sua/{{$sanpham->id}}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" >
                            @if(count($errors)>0)
                                <div class="alert alert-danger">
                                    @foreach($errors->all() as $err)
                                    <ul> 
                                        <li>{{$err}}</br></li>
                                    </ul>
                                      
                                    @endforeach
                                </div>
                            @endif
                             @if(Session::has('thanhcong'))
                             <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
                            @endif
                           
                            <div class="form-group">
                                <label>Tên sản phẩm:</label>
                                <input class="form-control" value="{{$sanpham->tensanpham}}" name="tensanpham" placeholder="" />
                            </div>
                            <div class="form-group">
                                <label>Giá:</label>
                                <input class="form-control" value="{{$sanpham->gia}}" name="gia" placeholder="Đơn vị VNĐ" />
                            </div>
                            <div class="form-group">
                                <label>Tỉ lệ khuyến mại:</label>
                                <input class="form-control" value="{{$sanpham->tilekhuyenmai}}" 
                                    name="tilekhuyenmai" placeholder=" %" />
                            </div>
                            <div class="form-group">
                                <label>Loại sản phẩm</label>
                               
                                <select name="loaisanpham">
                                    @foreach($loaisanpham as $lsp)
                                        <option value="{{$lsp->id}}">{{$lsp->tenloaisanpham}}</option>
                                    @endforeach
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label>Hình ảnh</label>
                                <img src="upload/{{$sanpham->hinhanh}}" style="height: 60px;">
                                <input type="file" class="form-control" value="{{$sanpham->hinhanh}}"  name="hinhanh">
                            </div>
                            
                            <div class="form-group">
                                <label>Mô tả sản phẩm</label>
                                <textarea id="demo" class="ckeditor" value="" name="mota" rows="3">{{$sanpham->mota}}</textarea>
                               
                            </div>
                           
                            <button type="submit" class="btn btn-success">Thêm</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        <form>
                    </div>
                </div>
@endsection