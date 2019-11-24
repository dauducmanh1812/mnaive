@extends('master_client')
@section('content')
	@include('slider')
	<section>
		<div class="container">
			<div class="row">
				@include('sidebar_client')
				
				<div class="col-sm-9 padding-right">
					<div class="features_items">
						<!--features_items-->
						<h2 class="title text-center">Các sản phẩm mới </h2>
						@foreach($danhsach as $ds)
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="upload/{{$ds->hinhanh}}" style="width:200px;height:200px"/>
											<h2>{{number_format($ds->gia)}}đ</h2>
											<p>{{$ds->tensanpham}}</p>
											
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>{{number_format($ds->gia)}}đ</h2>
												<p>{{$ds->tensanpham}}</p>
												<a href="index/them-gio-hang/{{$ds->id}}" 
													class="btn btn-default add-to-cart"
														onclick="return alert(
															@if (isset($error))
																'San pham da ton tai trong gio hang cua ban'
															@else
																'Thêm vào giỏ hàng thành công'
															@endif
														)">;
													<i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng
												</a>
											
											</div>
										</div>
										@if($ds->trangthai==1)
											<img src="eshopper/images/home/sale.png" class="new" alt="" />
											
										@else
											<img src="eshopper/images/home/new.png" class="new" alt="" />
										@endif
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li>
											<a href="index/sanpham/{{$ds->id}}">
												<i class="fa fa-plus-square"></i>Xem  chi tiết sản phẩm
											</a>
										</li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Mua ngay</a></li>
									</ul>
								</div>
							</div>
						</div>
						@endforeach
						<div class="row" align="center">{{$danhsach->links()}}</div>
						
					</div><!--features_items-->
				
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">Các sản phẩm mới</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
								@foreach($sanphammoi as $sp)
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="upload/{{$sp->hinhanh}}" height="240" width="150" />
													<h2>{{number_format($sp->gia)}}VNĐ</h2>
													<p>{{$sp->tensanpham}}</p>
													@if(Auth::check())
														<a href="index/them-gio-hang/{{$sp->id}}" 
															class="btn btn-default add-to-cart"
															onclick="return alert(
																@if (isset($error))
																'San pham da ton tai trong gio hang cua ban'
															@else
																'Thêm vào giỏ hàng thành công'
															@endif
															)">
															<i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng
														</a>
													@else
														<a href="" 
															class="btn btn-default add-to-cart">
															Đăng nhập để mua hàng
														</a>
													@endif
												</div>
												<img src="eshopper/images/home/new.png" class="new" alt="" />
												
											</div>
										</div>
									</div>
								@endforeach
									
								</div>
								<div class="item">	
									@foreach($sanphammoi as $sp)
										<div class="col-sm-4">
											<div class="product-image-wrapper">
												<div class="single-products">
													<div class="productinfo text-center">
														<img src="upload/{{$sp->hinhanh}}" height="240" width="268" />
														<h2>{{number_format($sp->gia)}}VNĐ</h2>
														<p>{{$sp->tensanpham}}</p>
														<a href="index/them-gio-hang/{{$ds->id}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
													</div>
													
												</div>
											</div>
										</div>
									@endforeach
									
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>
@endsection