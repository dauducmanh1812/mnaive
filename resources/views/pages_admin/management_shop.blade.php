@extends('layout_admin.master_admin')
@section('content')
	  			<p style="color: white;">{{$i=1}}</p>
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Danh sách 
                            <small>Các Shop</small>
                        </h1>
                    </div>

                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover">
                    	
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Owner Name</th>
                                <th>User ID</th>
                                <th>Shop quantity</th>
                                <th>Detail</th>
                                <th>Total Income</th>
                            </tr>
                        </thead>
                        <tbody>

                        	@foreach($users as $user)
                        		
	                            <tr class="odd gradeX" align="center">
                                
	                                <td>{{$i++}}</td>
	                                <td>{{$user->name}}</td>
	                                <td>{{$user->id}}</td>
	                                <td>{{$user->Shop->count()}}</td>
	                                
	                                <td class="center">
	                                	<a href="{{route('quantity_shop',$user->id)}}">Detail</a></td>
	                                <td></td>
	                            </tr>
                             
                            @endforeach
                           
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            
@endsection