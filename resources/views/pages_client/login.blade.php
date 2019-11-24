@extends('master_client')
@section('content')
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Đăng nhập</h2>
						@if(Session::has('message'))
							<div class="alert alert-danger">
								{{Session::get('message')}};
							</div>
						@endif

						<form action="{{route('dangnhap')}}" method="post">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<input type="email" name="email" placeholder="Email" />
							<input type="password" name="password" placeholder="Password" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Ghi nhớ đăng nhập
							</span>
							<button type="submit" class="btn btn-default">Đăng nhập</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Tạo mới tài khoản!</h2>
						<form action="#">
							<input type="text" placeholder="Tên khách hàng"/>
							<input type="email" placeholder="Email "/>
							<input type="password" placeholder="Password"/>
							<button type="submit" class="btn btn-default">Đăng ký</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
@endsection