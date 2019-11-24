@extends('master_client')
@section('content')
	<div class="container">
			<div class="row">
				<div class="col-sm-5 col-sm-offset-1">
					<div class="login-form" style="padding: 70px;"><!--login form-->
						<h2>Tạo shop </h2>
						@if(count($errors)>0)
							<div class="alert alert-danger">
								@foreach($errors->all() as $err)
									{{$err}};
								@endforeach
							</div>
						@endif
						@if(Session::has('success'))
							<div class="alert alert-success">
								{{Session::get('success')}};
							</div>
						@endif

						<form action="{{route('taoshop')}}" method="post" >
							<input type="hidden" name="_token" value="{{csrf_token()}}" >
							<input type="text" name="tenshop" placeholder="Tên shop" />
							<button type="submit" class="btn btn-default">Đăng kí ngay</button>
						</form>
					</div><!--/login form-->
				</div>
			</div>
		</div>
@endsection