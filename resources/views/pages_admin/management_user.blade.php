@extends('layout_admin.master_admin')
@section('content')
	<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">List of Users</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" >
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Username </th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Type of users</th>
                                <th>Phone Number</th>
                                <th>Created Time</th>
                                <th>Delete</th>
           
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($user as $user)
                            <tr class="odd gradeX" align="center">
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->diachi}}</td>
                             @if($user->role_id==1)
                             	<td>Customer</td>
                             @elseif($user->role_id==2)
                             	<td>Shop Owner</td>
                             @endif
                                <td>{{$user->sodienthoai}}</td>
                                <td>{{$user->created_at}}</td>
                                <td class="center">
                                	
                                	<a href="{{route('delete_user',$user->id)}}" 
                                        onclick="return confirm('Do you want to delete this user?')">
                                        <i class="fa fa-trash-o  fa-fw"></i>
                                    </a>
                                </td>
                                
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
@endsection