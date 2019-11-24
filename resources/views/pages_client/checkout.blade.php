@extends('master_client')
@section('content')
		<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="/index">Home</a></li>
				  <li class="active">Receiver Detail</li>
				</ol>
			</div><!--/breadcrums-->
			<div class="shopper-informations">
			@if(Auth::check())
				<div class="row">

					<div class="col-sm-3">
						<div class="shopper-info">
							<!-- <p>Số điểm tích lũy của bạn</p>
							<form>
								<input type="" name="" placeholder="Bạn hiện có: {{$diemthuong->diem}} điểm" disabled>
								<input type="" name="" placeholder="Số tiền tương ứng quy đổi: {{number_format($tienquydoi)}}VNĐ" disabled>
							</form> -->
						</div>
					</div> 
					<div class="col-sm-8">
						<div class="bill-to">
							<p>Thông tin khách hàng</p>
							<div class="form-one" style="width: 100%;">
								<form action="index/thongtindonhang" method="post">
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
									<input type="text" name="hoten" placeholder="Tên người nhận" value="{{$user->name}}">
									<input type="text" value="{{$user->email}}" name="email" placeholder="Email*">
									<input type="text" value="{{$user->diachi}}" name="diachi" placeholder="Địa chỉ">
									<input type="text" value="{{$user->sodienthoai}}" name="sodienthoai" placeholder="Số điện thoại *">
									<input type="text" name="ghichu" placeholder="Ghi chú">
									<select style="height: 40px;margin-bottom: 10px;" name="tichdiem">
										<option selected="">Điểm tích lũy</option>
										<option value="1">Dùng điểm tích lũy</option>
										<option value="0">Không sử dụng điểm</option>
									</select>
									<select style="height: 40px;margin-bottom: 10px; 
										name="thanhtoan">
										<option selected="">Hình thức thanh toán</option>
										<option value="1">Cash Delivery</option>
										<option value="0">ATM</option>
									</select>
									<div class="row" style="text-align: center;margin-bottom: 150px;">
					
										<button class="btn btn-primary" >Hoàn tất</button>
									</div>
								
									
								</form>
							</div>
				
						</div>
					</div>
				@else
						<div class="row">

					 
					<div class="col-sm-8">
						<div class="bill-to">
							<p>Thông tin khách hàng</p>
							<div class="form-one" style="width: 100%;">
								<form action="index/thongtindonhang" method="post">
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
									<input type="text" name="hoten" placeholder="Tên người nhận" >
									<input type="text" name="email" placeholder="Email*">
									<input type="text"  name="diachi" placeholder="Địa chỉ">
									<input type="text"  name="sodienthoai" placeholder="Số điện thoại *">
									<input type="text" name="ghichu" placeholder="Ghi chú">
									<select style="height: 40px;margin-bottom: 10px;"
									name = "thanhtoan">
										<option selected="">Hình thức thanh toán</option>
										<option value="1">Cash Delivery</option>
										<option value="0">ATM</option>
									</select>
									<div class="row" style="text-align: center;margin-bottom: 150px;">
					
										<button class="btn btn-primary" >Hoàn tất</button>
									</div>
								
									
								</form>
							</div>
				
						</div>
					</div>			
				</div>
				@endif
			</div>
			<!-- <div class="review-payment">
				<h2>Review & Payment</h2>
			</div>

			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/one.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Colorblock Scuba</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>$59</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$59</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>

						<tr>
							<td class="cart_product">
								<a href=""><img src="eshopper/images/cart/two.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Colorblock Scuba</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>$59</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$59</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<tr>
							<td class="cart_product">
								<a href=""><img src="eshopper/images/cart/three.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Colorblock Scuba</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>$59</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$59</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<tr>
							<td colspan="4">&nbsp;</td>
							<td colspan="2">
								<table class="table table-condensed total-result">
									<tr>
										<td>Cart Sub Total</td>
										<td>$59</td>
									</tr>
									<tr>
										<td>Exo Tax</td>
										<td>$2</td>
									</tr>
									<tr class="shipping-cost">
										<td>Shipping Cost</td>
										<td>Free</td>										
									</tr>
									<tr>
										<td>Total</td>
										<td><span>$61</span></td>
									</tr>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="payment-options">
					<span>
						<label><input type="checkbox"> Direct Bank Transfer</label>
					</span>
					<span>
						<label><input type="checkbox"> Check Payment</label>
					</span>
					<span>
						<label><input type="checkbox"> Paypal</label>
					</span>
				</div> -->
		</div>
	</section> <!--/#cart_items-->
@endsection