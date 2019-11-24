

      <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;background: #d0ffc0;">
           
             <marquee>
               <h3>
                   <a> Shop Homepage: <b>{{$shop->tenshop}}</b>
                        <i style="color: red;" class="fa fa-bolt" aria-hidden="true"></i>
                        <i style="color: red;" class="fa fa-bolt" aria-hidden="true"></i>
                        <i style="color: red;" class="fa fa-bolt" aria-hidden="true"></i>
                        <i style="color: red;" class="fa fa-bolt" aria-hidden="true"></i>
                        <i style="color: red;" class="fa fa-bolt" aria-hidden="true"></i>
                        Admin: <b>{{$shop->tenshop}}</b>
                    </a>
               </h3>     
                    
            </marquee>
            <div class="navbar-header">
            </div>
            <!-- /.navbar-header -->
            
            
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation" style="margin-top: 0">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="">

                                <i class="fa fa-bars" aria-hidden="true"></i>
                                <b >Category</b>
                            </a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Income Report <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Popularly Paid Products</a>
                                </li>
                                <li>
                                    <a href="#">Popularly Voted Products</a>
                                </li>
                                <li>
                                    <a href="qlshop/shop/{{$shop->id}}/thongke/doanh-thu ">Total Income</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-apple" aria-hidden="true"></i> Manage Products <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href=""> Product List </a>
                                     <ul class="nav nav-third-level">
                                        @foreach($loaisp as $lsp)
                                            <li>
                                                <a href="qlshop/shop/{{$shop->id}}/sanpham/danhsach/{{$lsp->id}}">
                                                    {{$lsp->tenloaisanpham}}
                                                </a>
                                            </li>
                                        @endforeach
                                       
                                     </ul>
                                </li>
                                <li>
                                    <a href="qlshop/shop/{{$shop->id}}/sanpham/them">Add Product</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                 <!--  -->
                         <li>
                            <a href="#">
                                <i class="fa fa-gift" aria-hidden="true"></i>
                                Manage Orders <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="qlshop/shop/{{$shop->id}}/donhang/danhsach"> Orders On Process </a>
                                </li>
                                <li>
                                    <a href="qlshop/shop/{{$shop->id}}/donhang/don-da-thanh-toan"> Finished Orders </a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <!-- <li>
                            <a href="#"><i class="fa fa-pie-chart" aria-hidden="true"></i>Quản lí kho<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="">Sản phẩm kho</a>
                                     <ul class="nav nav-third-level">
                                        @foreach($loaisp as $lsp)
                                            <li>
                                                <a href="qlshop/shop/{{$shop->id}}/khohang/danhsach/{{$lsp->id}}">
                                                    {{$lsp->tenloaisanpham}}
                                                </a>
                                            </li>
                                        @endforeach
                                       
                                     </ul>
                                </li>
                               
                            </ul> -->
                            <!-- /.nav-second-level -->
                        <!-- </li> -->
                         <li>
                            <a href="#">
                                <i class="fa fa-comments" aria-hidden="true"></i>
                                Manage Comments <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="qlshop/shop/{{$shop->id}}/binhluan/danhsach"> Questions List </a>
                                </li>
                                <li>
                                    <a href="qlshop/shop/{{$shop->id}}/binhluan/danhgia"> Votes List </a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>


        