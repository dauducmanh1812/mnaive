<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
						</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index"><img src="eshopper/images/home/logo.png" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								@if(Auth::check())
								<li><a href="#"><i class="fa fa-user"></i>{{Auth::User()->name}}</a></li>
								<li><a href="{{route('dangxuat')}}"><i class="fa fa-star"></i>Log out</a></li>
								<li><a href="index/don-hang"><i class="fa fa-crosshairs"></i>Your Orders</a></li>
								<li><a href="index/gio-hang"><i class="fa fa-shopping-cart"></i>Your Cart({{ Cart::count() }})</a></li>
								
								@else
									<li><a href="{{route('dangki')}}"><i class="fa fa-star"></i>Register</a></li>
									<li><a href="{{route('login')}}"><i class="fa fa-lock"></i>Login</a></li>
									<li><a href="index/gio-hang"><i class="fa fa-shopping-cart"></i>Your Cart({{ Cart::count() }})</a></li>
									
								@endif
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index" class="active">Home Page</a></li>
                                
                                @if(Auth::check())
                                	<li class="dropdown"><a href="#">My Shop</a>
                                	
	                                	<ul role="menu" class="sub-menu">
	                                		@foreach($list_shop as $ls)
	                                        	<li><a href="qlshop/shop/{{ $ls->id }}">{{$ls->tenshop}}</a></li>
											 @endforeach
	                                    </ul>
	                                
                                	</li>
									<li><a href="{{route('taoshop')}}">Create New Shop</a></li>
								@endif
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search pull-right" style="position: relative;">
							<form action="tim-kiem" method = "get">
								<input type="text" name="search"	placeholder="Type the product you want..."
									 style="width:300px;height: 30px" />
								<button style="position: absolute;top: 0;right: 0;bottom: 0;">	
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->