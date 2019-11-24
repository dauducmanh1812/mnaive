@extends('master_client')
@section('content')
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
							<td class="image">Tên sản phẩm</td>
							<td class="description"></td>
							<td class="price">Giá</td>
							<td class="quantity">Số lượng</td>
							<td class="total">Tổng tiền</td>
							

						</tr>
					</thead>
					<tbody>
							@foreach($chitietdon as $ctd)
							<tr>
								<td class="cart_product">
									<a href=""><img src="upload/{{$ctd->Sanpham->hinhanh}}" height=60></a>
								</td>
								<td class="cart_description">
									<h4>
										<a href="">{{$ctd->Sanpham->tensanpham}}</a>

									</h4>
									
									
								</td>
								<td class="cart_price">
									<p>{{number_format($ctd->Sanpham->gia)}}đ</p>
								</td>
								<td class="cart_quantity">
									<p>{{$ctd->soluong}}</p>
								</td>
								<td class="cart_total">
									<p class="cart_total_price">
										{{number_format($ctd->Sanpham->gia*$ctd->soluong)}}đ
									</p>
								</td>
								
								
							</tr>
							@endforeach
							
						
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	
@endsection