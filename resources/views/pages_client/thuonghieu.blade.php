@extends('master_client')
@section('content')
<div class="container">
	<div class="row">
	@include('sidebar_client')
	<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Các sản phẩm Thương hiệu {{$tenth}}</h2>
						@foreach($thuonghieu as $th)
								<div class="col-sm-4">
									<div class="product-image-wrapper">
										<div class="single-products">
												<div class="productinfo text-center">
													<img src="upload/{{$th->hinhanh}}" style="width:200px;height:200px" />
													<h2>{{number_format($th->gia)}} VNĐ</h2>
													<p>{{$th->tensanpham}}</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
												</div>

												<div class="product-overlay">
													<div class="overlay-content">
														<h2>{{number_format($th->gia)}} VNĐ</h2>
														<p>{{$th->tensanpham}}</p>
												@if(Auth::check())
														<a href="index/them-gio-hang/{{$th->id}}" class="btn btn-default add-to-cart">
															<i class="fa fa-shopping-cart"></i>
															Thêm vào giỏ hàng</a>
													</div>
												@else
													<a class="btn btn-default add-to-cart">
															<i class="fa fa-shopping-cart"></i>
															Đăng nhập để mua hàng</a>
													</div>
												@endif

												</div>
												@if($th->trangthai==1)
													<img src="eshopper/images/home/sale.png" class="new" alt="" />
											
												@else
													<img src="eshopper/images/home/new.png" class="new" alt="" />
												@endif
										</div>
										<div class="choose">
											<ul class="nav nav-pills nav-justified">
												<li>
													<a href="index/sanpham/{{$th->id}}">
														<i class="fa fa-plus-square"></i>Xem  chi tiết sản phẩm
													</a>
												</li>
												<li><a href="#"><i class="fa fa-plus-square"></i>Mua ngay</a></li>
											</ul>
										</div>
									</div>
								</div>
							@endforeach
					</div>
				</div>
			</div>
		</div>
@endsection