<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Type of products</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
						@foreach($loaisanpham as $lsp)
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a  href="index/loai-san-pham/{{$lsp->id}}">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											{{$lsp->tenloaisanpham}}
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											 <li><a href="#"> </a></li> 
											
										</ul>
									</div>
								</div>
							</div>
						@endforeach
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<!-- <li><a href="#"> <span class="pull-right">(50)</span>Nike</a></li> -->
									@foreach($thuonghieu as $th)
										<li>
											<a href="index/thuong-hieu/{{$th->hangsx}}">
												{{$th->hangsx}}
											</a>
										</li>
									@endforeach
									
								</ul>
							</div>
						</div><!--/brands_products-->					
						<div class="shipping text-center"><!--shipping-->
							<img src="eshopper/images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>