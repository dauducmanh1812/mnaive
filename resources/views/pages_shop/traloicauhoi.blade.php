@extends('layout_shop.master_shop')
@section('content')
	
                <div class="row">

                    <div class="col-lg-12">
                        <h3 class="page-header">Trả lời:
                            
                        </h3>
                        <i style="color: red">
                            **Bạn vui lòng nhập câu trả lời
                        </i>
                            <p style="color: white;">{{$i=1}}</p>
                    <form style="width: 300px;padding-bottom: 30px" 
                        method="post" action="">
                        <input type="hidden" name="_token" value="{{csrf_token()}}" >
                        
                        <div class="form-group">
                               
                                <textarea rows="10" cols="100" name="traloi"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                    </div>
                </div>
                <!-- /.row -->
 
@endsection