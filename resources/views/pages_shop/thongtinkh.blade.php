@extends('layout_shop.master_shop')
@section('content')
	 <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">Thông tin khách hàng: {{$thongtinkh->hoten}}
                        
                        </h3>
                        <p>Họ tên: {{$thongtinkh->hoten}}</p>
                        <p>Email : {{$thongtinkh->email}}</p>
                        <p>Địa chỉ : {{$thongtinkh->diachi}}</p>
                        <p>Số điện thoại : {{$thongtinkh->sodienthoai}}</p>
                        <p>Ghi chú : {{$thongtinkh->ghichu}}</p>

                    </div>
@endsection