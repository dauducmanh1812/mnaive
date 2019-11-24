@extends('master_client')
@section('content')
		
		<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Danh sách đơn hàng đã mua </li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Đơn hàng </td>
							<td class="total">Tổng tiền</td>
							<td>Ghi chú</td>
							<td>Thời gian đặt</td>
							<td>Xem chi tiết</td>

						</tr>
					</thead>
					<tbody>
						@foreach($donhang as $dh)
							<tr>
								<td>
								 {{$i++}}
									
								</td>
								<td>{{number_format($dh->tongtien)}}</td>
								<td>
									{{$dh->ghichu}}
								</td>
								<td>{{$dh->created_at}}</td>
								<td>
									<a href="index/chi-tiet-don/{{$dh->id}}">Chi tiết</a>
								</td>
								
								
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->
@endsection
