@extends('layout_admin.master_admin')
@section('content')
	  
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Shop Detail</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Shop</th>
                                <th>Created Time</th>
                                <th>Income</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        	
                        		@foreach($count as $count)
    	                            <tr class="odd gradeX" align="center">
    	                                <td>{{$count->id}}</td>
    	                                <td>{{$count->tenshop}}</td>
    	                                <td>{{$count->created_at}}</td>
    	                                <td>10000đ</td>
    	                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href=""> Delete</a></td>
    	                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="">Edit</a></td>
    	                            </tr>
                            
                                @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            
@endsection