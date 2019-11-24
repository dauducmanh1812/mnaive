@extends('master_client')
@section('content')
	<section>
		<div class="container">
			<div class="row">
				@include('sidebar_client')
				
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="upload/{{$sanpham->hinhanh}}" alt="" />
								<h3>ZOOM</h3>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
										<div class="item active">
										 	 <a href="">
										  		<img src="upload/{{$sanpham->hinhanh}}" alt="" style="width: 85px;height: 84px;" />
										  	</a>
											<a href="">
												<img src="upload/{{$sanpham->hinhanh}}" alt="" style="width: 85px;height: 84px;" />
											</a>
											 <a href="">
											 	<img src="upload/{{$sanpham->hinhanh}}" alt="" style="width: 85px;height: 84px;" />
											 </a>
										  
										</div>
										<div class="item">
											 <a href="">
											 	<img src="upload/{{$sanpham->hinhanh}}" alt="" style="width: 85px;height: 84px;" />
											 </a>
											 <a href="">
											 	<img src="upload/{{$sanpham->hinhanh}}" alt="" style="width: 85px;height: 84px;" />
											 </a>
											 <a href="">
											 	<img src="upload/{{$sanpham->hinhanh}}" alt="" style="width: 85px;height: 84px;" />
											 </a>
										</div>
										
									</div>

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								
								<h2>{{$sanpham->tensanpham}}</h2>
								<p>Bình chọn</p>
								<img src="eshopper/images/product-details/rating.png" alt="" />
								<span>
									<span>{{number_format($sanpham->gia)}}đ</span>
								@if($sanpham->Sanphamshop->soluongnhap>0)	
									<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										<a href="index/them-gio-hang/{{$sanpham->id}}"
										onclick="return alert('Thêm vào giỏ hàng thành công')"
										>Thêm vào giỏ hàng</a>
									</button>
								@else
									<button type="button" class="btn btn-fefault cart" disabled>
										<i class="fa fa-shopping-cart"></i>
										Thêm vào giỏ hàng
									</button>
								@endif
								</span>
								@if($sanpham->Sanphamshop->soluongnhap>0)
								<p><b>Tình trạng:</b><i style="color:green">Còn hàng</i></p>
								@else
									<p><b>Tình trạng:</b><i style="color:red">Hết hàng</i></p>
								@endif

								@if($sanpham->kmtile==0)
									
									<p>
										<b>Chỉ còn:</b>
										<b style="color: red;font-size: 200%;">{{number_format($sanpham->gia-$sanpham->gia*$sanpham->tilekhuyenmai/100)}}đ</b>
									</p>
								@else
									<p><b>Khuyến mại:</b><i style="color: red;">{{$sanpham->kmtile}}%</i></p>
									<p>
										<b>Còn lại duy nhất:
											<i style="color: red;">
												{{ROUND((strtotime($sanpham->thoigiankmtile)-strtotime(date('Y-m-d H:i:s')))/86400)}}
                                        		ngày
											</i>
										</b>
									</p>
									<p>
										<b>Giá sốc:</b>
										<b style="color: red;font-size: 200%;">{{number_format($sanpham->gia-$sanpham->gia*$sanpham->kmtile/100)}}đ</b>
									</p>
								@endif
								<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="#details" data-toggle="tab">Chi tiết</a></li>
								<li class="active"><a href="#reviews" data-toggle="tab">Bình luận</a></li>
							</ul>
						</div>
					
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									<!-- <div class="comment">
										<ul>
											<li><a href=""><i class="fa fa-user"></i>Nguyễn Văn A</a></li>
											<li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
											<li><a href=""><i class="fa fa-calendar-o"></i>16 NOV 2017</a></li>
										</ul>
										<p>Sản phẩm tốt như mong đợi</p>
									</div> -->
									@foreach($comment as $cm)
										<div class="comment">
										
											<ul>
												<li><a href="">
													<i class="fa fa-user"></i>
														{{$cm->hoten}}
													</a>
												</li>
												<li><a href="">
													<i class="fa fa-clock-o"></i>
														{{$cm->created_at}}</a>
												</li>
												
												
											</ul>
											<p>
												<a href="">
													@if($cm->sodiem ==3)
														<i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
														<i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
														<i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
													@elseif($cm->sodiem ==4)
														<i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
														<i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
														<i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
														<i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
													@elseif($cm->sodiem ==2)
														<i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
														<i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
													@elseif($cm->sodiem ==1)
														<i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
													@else 
														Câu hỏi:
													@endif
													</a>
												
											</p>
											<p>{{$cm->noidung}}</p>
											@if($cm->traloi!=NULL)
												<a href="">Shop</a>: <b>{{$cm->traloi}}</b>
												</br>
											@endif

										
										</div>
									@endforeach
									<div class="row" style="text-align: center">
										{{$comment->links()}}
									</div>
									<div class="send" style="padding-top: 20px;">
										<p><b>Gửi đánh giá hoặc câu hỏi của bạn về sản phẩm</b></p>
									
					<form action="index/danh-gia/{{$sanpham->id}}" method="post">
						<input type="hidden" name="_token" value="{{csrf_token()}}" >
					 @if(Session::has('thanhcong'))
                             <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
                      @endif
                      @if(!Auth::check())
						<span>
							<input type="text" name="name" placeholder="Your Name"/>
							<input type="email" name="email" placeholder="Email Address"/>
						</span>
						<textarea name="content" ></textarea>
						<b>Đánh giá:
							<select name="rate" style="width: 200px;">
								
								<option value="4">Rất Tốt</option>
								<option value="3">Tốt</option>
								<option value="2">Trung Bình</option>
								<option value="1">Xấu</option>
								<option value="0">Hỏi về sản phẩm</option>
							</select>
						 </b> 
						<button type="submit" class="btn btn-default pull-right">
							Submit
						</button>
					@else
						<textarea name="content" ></textarea>
						<b>Đánh giá:
							<select name="rate" style="width: 200px;">
								
								<option value="4">Rất Tốt</option>
								<option value="3">Tốt</option>
								<option value="2">Trung Bình</option>
								<option value="1">Xấu</option>
								<option value="0">Hỏi về sản phẩm</option>
							</select>
						 </b> 
						<button type="submit" class="btn btn-default pull-right">
							Submit
						</button>
					@endif
					</form>
									</div>
									
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">recommended items</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend1.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend2.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend3.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend1.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend2.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend3.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
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