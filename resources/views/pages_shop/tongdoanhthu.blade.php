@extends('layout_shop.master_shop')
@section('content')
    
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">Tổng doanh thu của shop ở thời điểm hiện tại là: 
                            <small>{{number_format($tongDoanhThu)}} đ</small>
                        </h3>
                        
                    </div>
                </div>

                <!-- /.row -->
 
@endsection 