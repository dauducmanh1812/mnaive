@extends('master_client')
@section('content')
	<table>
		<div class="row form_login" style="width: 500px;margin: auto;background: pink;padding: 20px 20px;">
		<form method="post" action="{{route('dangki')}}" >
		<input type="hidden" name="_token" value="{{csrf_token()}}" >
			<h3 style="text-align: center;color: red;">Đăng kí</h3>
			<div class="form-group">
				@if(count($errors)>0)
					<div class="alert alert-danger">
						@foreach($errors->all() as $err)
							{{$err}};
						@endforeach
					</div>
				@endif
			    @if(Session::has('thanhcong'))
			    	<div class="alert alert-success">{{Session::get('thanhcong')}}</div>
			    @endif
			  </div>
			  <div class="form-group">
			    <b>Tên tài khoản</b>
			    <input  type="text" class=" form-control"  aria-describedby="emailHelp" placeholder="Tên đăng nhập" name="name">
			  </div>
			   <div class="form-group">
			    <b>Email</b>
			    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Email">
			  </div>
			  <div class="form-group">
			    <b>Mật khẩu</b>
			    <input type="password" class="form-control" name="password" placeholder="Password">
			  </div>
			  <div class="form-group">
			    <b>Địa chỉ</b>
			    <input type="text" class="form-control" name="address" aria-describedby="emailHelp" placeholder="Địa chỉ">
			  </div>
			   <div class="form-group">
			    <b>Số điện thoại</b>
			    <input type="text" class="form-control" name="phone" aria-describedby="emailHelp" placeholder="Số điện thoại">
			  </div>
			   <div class="form-group" style="text-align: center">
			   	 <button type="submit" class=" col-6 btn btn-danger">Đăng kí</button>
			   	</div>
			 
		</form>
	</table>
@endsection