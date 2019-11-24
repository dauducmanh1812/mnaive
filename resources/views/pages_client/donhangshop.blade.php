@extends('master_client')
@section('content')
		<p style="color: white;">{{$i=1}}}</p>
		<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Chi tiết đơn hàng</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Đơn hàng</td>
							<td class="description">Shop </td>
							
							<td class="total">Tổng tiền</td>
							<td class="price">Trạng thái</td>
							<td>Tình trạng đơn</td>
							<td>Xem chi tiết đơn</td>
						</tr>
					</thead>
					<tbody>
						@foreach($donhangshop as $dhs)
							<tr>
								<td>
								  {{$i++}}
									
								</td>
				
								<td class="cart_description">
									<i>Shop: {{$dhs->Shop->tenshop}}</i>
								</td>
								<td class="cart_price">
									<p>{{number_format($dhs->tongtien)}}đ</p>
								</td>
								
								<td class="cart_total">
									@if($dhs->tinhtrangdon==0)
									
										Chưa giao hàng
								
									@elseif($dhs->tinhtrangdon==1&&$dhs->nhanhang==0)
									    Đang giao hàng
									@elseif($dhs->nhanhang==1)
										Giao hàng xong
									@endif
								</td>
								<td>
									@if($dhs->nhanhang==1)
										Hoàn thành 
									@else
										Chưa hoàn thành 
									@endif
								</td>
								<td class="cart_update">
									<a href="index/chitietdon/{{$dhs->id}}">Xem chi tiết</a>
								</td>
								
								
							</tr>
							
							
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

@endsection