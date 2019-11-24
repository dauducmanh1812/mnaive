@extends('layout_shop.master_shop')
@section('content')
	           <p style="color: white;">{{$i=1}}</p>
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">Danh sách
                            <small>đơn hàng đã giao</small>
                        </h3>
                    </div>
                    <!-- /.col-lg-12 -->

                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr align="center">
                                <th>STT</th>
                                <th>Tên KH</th>
                                <th>Thông tin KH</th>
                                <th>Thời gian đặt</th>
                                <th>Tổng tiền</th>
                                <th>HT thanh toán</th>
                                <th>Chi tiết đơn</th>
                                <th>Thời gian ship hàng</th>
                                <th>Thời gian nhận hàng</th>
                                <th>Nhận hàng</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($dondathanhtoan as $dh)
                            <tr class="odd gradeX" align="center">
                                <td>{{$i++}}</td>
                                <td>{{$dh->Donhang->hoten}}</td>
                                <td>
                                    <a href="qlshop/shop/{{$shop->id}}/donhang/thongtinkh/{{$dh->Donhang->id}}">Xem thông tin</a>
                                </td>
                                <td>{{$dh->Donhang->created_at}}</td>
                                <td>{{number_format($dh->tongtien)}} VNĐ</td>
                                <td>
                                    @if($dh->hinhthuc==0)
                                        <i style="color: green;">Cash Delivery</i>
                                    @else
                                        <i style="color: green;">Payment Online</i>
                                    @endif
                                </td>
                                <td>
                                    <a href="qlshop/shop/{{$shop->id}}/donhang/chitiet/{{$dh->id}}">
                                        Xem chi tiết
                                    </a>
                                </td>
                                <td >
                                    {{$dh->created_at}}
                                </td>
                                <td>
                                @if($dh->nhanhang==1)
                                    {{$dh->updated_at}}
                                @else
                                @endif
                                </td>
                                <td>
                                    @if($dh->nhanhang==1)
                                        <i style="color: green;">Đã nhận hàng</i>
                                    @else
                                        <a href="qlshop/shop/{{$shop->id}}/donhang/nhanhang/{{$dh->id}}">
                                            Xác nhận
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach    
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
 
@endsection