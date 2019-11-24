<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use Session;
use Hash;
use Auth;
use App\Shop;
use App\taoshop;
use App\Sanpham;
use App\Loaisanpham;
use App\Tichdiem;
use App\Donhang;
use App\Donhangshop;
use App\Chitietdon;
use App\Sanphamshop;
use App\Binhluan;
use App\Card;
use Cart;

class pagesController extends Controller
{
   
    public function post_dangki(Request $request){
    	$this->validate($request,
    		[
    			'email'		=>'required|email|unique:users,email',
    			'password'	=>'required|min:6|max:20',
    			'name'	=>'required|unique:users,name',
    		],

    		[
    			'email.required'	=>'Vui lòng nhập email',
    			'email.email'		=>'Không đúng định dạng email',
    			'email.unique'		=>'Email đã có người sử dụng',
                'name.unique'       =>'Tên đã có người sử dụng',
    			'password.required'	=>'Vui lòng nhập password',
    			'name.required'		=>'Vui lòng nhập tên',
                'name.unique'       =>'Tên tài khoản đã tồn tại',
    			'password.min'		=>'Mật khẩu ít nhất 6 kí tự'
    		]
    	);
    	$users = new Users();
    	$users->name 	= $request->name;
    	$users->email   =$request->email;
    	$users->password= Hash::make($request->password);
    	$users->diachi = $request->address;
    	$users->sodienthoai   =$request->phone;
    	$users->role_id = 1; 
    	$users->save();

        $tichdiem = new Tichdiem();
        $tichdiem->user_id = $users->id;
        $tichdiem->diem = 0;
        $tichdiem->save();
    	return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');
    }
    public function dangki(){
    	return view('pages_client.dangki');
    }

    public function post_dangnhap(Request $request){
    	$this->validate($request,[
    		'email' 	=>'required',
    		'password'	=>'required'
    	],
    	[
    		'email.required' => 'Vui lòng nhập email!',
    		'password.required'=>'Vui lòng nhập mật khẩu'
    	]);
    	$credentials = array('email'=>$request->email,'password'=>$request->password);
    	$check_admin = array('email'=>$request->email,'password'=>$request->password,'role_id'=>4);
    	if(Auth::attempt($check_admin))
    		return redirect()->route('page_admin');
    	else if(Auth::attempt($credentials))
    		return redirect()->route('index');
    	else
    		return redirect()->back()->with('message','Sai tài khoản hoặc mật khẩu!');
    }
    
    public function dangnhap(){
    	return view('pages_client.login');
    }
    public function dangxuat(){
    	Auth::logout();
    	return redirect()->route('index');
    }
    public function timkiem(Request $req)
    {
        $search = Sanpham::where('tensanpham','like','%'.$req->search.'%')
                            ->orwhere('gia','like','%'.$req->search.'%')
                            ->join('Loaisanpham','Loaisanpham.id','=','Sanpham.loaisanpham_id')
                            ->orwhere('Loaisanpham.tenloaisanpham','like','%'.$req->search.'')
                            ->paginate(3);
        $count  = Sanpham::where('tensanpham','like','%'.$req->search.'%')
                            ->orwhere('gia','like','%'.$req->search.'%')
                            ->join('Loaisanpham','Loaisanpham.id','=','Sanpham.loaisanpham_id')
                            ->orwhere('Loaisanpham.tenloaisanpham','like','%'.$req->search.'')
                            ->get();
        $key_search = $req->search;
        return view('pages_client.search',compact('search','count','key_search'));
    }
    public function taoshop(){
    	return view('pages_client.taoshop');
    }
    
   


    public function post_createshop(Request $request){
    	$this->validate($request,[
    		'tenshop' =>'required|unique:shop,tenshop'
    	],
    	[
    		'tenshop.required'=>'Vui lòng nhập tên shop',
    		'tenshop.unique'	=>'Shop đã tồn tại,vui lòng chọn tên khác'
    	]
    	);
    	$shop = new taoshop();
    	if(Auth::check())
    	{
    		$shop->user_id = Auth::User()->id;
	    	$shop->tenshop = $request->tenshop;
            $shop->name    = Auth::User()->name;
	    	$shop->save();
            
    	}
	    	
    	return redirect()->back()->with('success','Vui lòng đợi phê duyệt');
    }


    public function trangchu(){
        $danhsach = Sanpham::where('id','>','0')->paginate(6);
        $sanphammoi = Sanpham::where('trangthai','1')->paginate(6);
        return view('pages_client.trangchu',compact('danhsach','sanphammoi'));
    }
    public function xemDonHang()
    {
        $i = 1;
        $donhang = Donhang::where('user_id',Auth::User()->id)->get();
        return view('pages_client.xemdonhang',compact('donhang','i'));
    }
    public function chiTietDon($id)
    {
        $i = 1;
        $donhangshop = Donhangshop::where('donhang_id',$id)->get();
        return view('pages_client.donhangshop',compact('donhangshop','i'));
    }
    public function donHangShop($id)
    {
        $i =1;
        $chitietdon = Chitietdon::where('donhangshop_id',$id)->get();
        return view('pages_client.chitietdon',compact('chitietdon','i'));
    }
    public function loaisanpham($id){
        $tenlsp = Loaisanpham::find($id);
        $loaisanpham = Sanpham::where('loaisanpham_id',$id)->paginate(6);
         return view('pages_client.loaisanpham',compact('loaisanpham','tenlsp'));
    }
    public function thuonghieu($tenth)
    {
        $tenth = $tenth;
        $thuonghieu = Sanpham::where('hangsx',$tenth)->paginate(6);
        return view('pages_client.thuonghieu',compact('thuonghieu','tenth'));
    }

    public function xemSanPham($id){
        $sanpham = Sanpham::find($id);
        $comment= Binhluan::where('sanpham_id',$id)->orderBy('id','desc')->paginate(5);
         return view('pages_client.product_detail',compact('sanpham','comment'));
    }

    public function danhGia($id,Request $request){
        $binhluan  = new Binhluan();
        $binhluan->sanpham_id = $id;
        
        if(Auth::check())
        {
            $profile = Users::find(Auth::User()->id);
            $binhluan->user_id = Auth::User()->id;
            $binhluan->hoten = $profile->name;
            $binhluan->email = $profile->email;

        }
           
        else
        {
            $binhluan->user_id = NULL;
            $binhluan->hoten = $request->name;
            $binhluan->email = $request->email;
        }
        if($request->rate==0)
            $binhluan->kieubl = 1;
        else
            $binhluan->kieubl = 0;
            
        $binhluan->noidung = $request->content;
        $binhluan->sodiem = $request->rate;
        $binhluan->save();
        $sanphamshop = Sanphamshop::where('sanpham_id',$id)->first();
        $point = $sanphamshop->sodiem + $request->rate;
        $update_point = Sanphamshop::where('sanpham_id',$id)->update(['sodiem'=>$point]);
        return redirect()->back()->with('thanhcong','Cảm ơn bạn đã phản hồi');
    }
    public function gioHang(){
           return view('pages_client.cart');
    }
    public function themgiohang($idsp){
      
        $spmua = Sanpham::where('id',$idsp)->first();
        
        $check = Card::where('id',$idsp)->first();
        if($check == null)
        {
            Cart::add(
                    array(
                        'id'    =>$idsp,
                        'name'  =>$spmua->tensanpham,
                        'qty'   =>1,
                        'price' =>$spmua->gia,
                        'options'=>[
                                    'img'=>$spmua->hinhanh,
                                    'mashop'=>$spmua->shop_id,
                                    'tenshop'=>$spmua->Shop->tenshop
                                    ]
                               
                    )
                );
        }
        else
        {
            $error = "Bạn đã chọn sản phẩm này rồi.";
        }

         return redirect()->back();
    }
       
    public function xoa_san_pham($id){
        $remove = Cart::remove($id);
        return redirect()->back();
    }
    public function thongtindonhang(){
       if(Auth::check())
       {
            $diemthuong = Tichdiem::where('user_id',Auth::User()->id)->first();
              if($diemthuong->diem==0){
                    $tienquydoi = 0;
                }
              else  if(0<$diemthuong->diem&&$diemthuong->diem<30)
               {
                    $tienquydoi = 20000;
               }
               else if(30<$diemthuong->diem&&$diemthuong->diem<60)
               {
                    $tienquydoi = 30000;
               }
               else if(60<$diemthuong->diem&&$diemthuong->diem<100)
               {
                    $tienquydoi = 50000;
               }
               else
                    $tienquydoi = 70000;
            $user = Users::where('id',Auth::User()->id)->first();
       }
        
        
        return view('pages_client.checkout',compact('diemthuong','tienquydoi','user'));

    }
    public function postDonhang(Request $request)
    {
        $this->validate($request,
            [  
                'hoten'         => 'required',
                'email'         => 'required|email',
                'diachi'        =>'required',
                'sodienthoai'   =>'required'

            ],
            [
                'hoten.required'        =>'Bạn chưa điền tên',
                'email.required'        =>'Bạn chưa điền email',
                'diachi.required'       =>'Bạn chưa điền địa chỉ',
                'sodienthoai.required'  =>'Bạn cần điền số điện thoại'
            ]
            );
        if(Auth::check())
        {
             $diemthuong = Tichdiem::where('user_id',Auth::User()->id)->first();
               if($diemthuong->diem==0){
                    $tienquydoi = 0;
                }

               else if(0<$diemthuong->diem&&$diemthuong->diem<10)
               {
                    $tienquydoi = 10000;
               }
               else if(10<$diemthuong->diem&&$diemthuong->diem<20)
               {
                    $tienquydoi = 20000;
               }
               else if(20<$diemthuong->diem&&$diemthuong->diem<40)
               {
                    $tienquydoi = 30000;
               }
               else if(40<$diemthuong->diem&&$diemthuong->diem<70)
               {
                    $tienquydoi = 50000;
               }
               else if(70<$diemthuong->diem&&$diemthuong->diem<100)
               {
                    $tienquydoi = 70000;
               }
               else 
                    $tienquydoi = 100000;
        }


        $total_money = floatval(preg_replace('/[^\d.]/', '',Cart::subtotal()));
        $donhang                = new Donhang();
        if(Auth::check())
        {
            $donhang->user_id       = Auth::User()->id;
        }
        else
            $donhang->user_id       = NULL;
        $donhang->hoten         = $request->hoten;
        $donhang->email         = $request->email;
        $donhang->diachi        = $request->diachi;
        $donhang->ghichu        = $request->ghichu;
        $donhang->sodienthoai   = $request->sodienthoai;
        if($request->tichdiem==1)
        {
             $total_money = $total_money-$tienquydoi;
             $update_point = Tichdiem::where('user_id',Auth::User()->id)
             ->update(['diem'=>0]);
        }
        $donhang->tongtien      = $total_money;
        $donhang->hinhthucthanhtoan = $request->thanhtoan;
        $donhang->save();


        if(100000<$total_money&&$total_money<200000)
            $prize_point = 5;
        else if(200000<$total_money&&$total_money<300000)
            $prize_point = 10;
        else if(300000<$total_money&&$total_money<500000)
            $prize_point = 15;
        else if(500000<$total_money&&$total_money<700000)
            $prize_point = 20;
        else if(700000<$total_money&&$total_money<1000000)
            $prize_point = 30;
        else if(1000000<$total_money&&$total_money<2000000)
             $prize_point = 40;
        else
            $prize_point = 50;

        if($donhang->save()&&Auth::check())
        {
            $diem = Tichdiem::where('user_id',Auth::User()->id)->first();
            $diemthem = $diem->diem+$prize_point;
             $update_point = Tichdiem::where('user_id',Auth::User()->id)
             ->update(['diem'=>$diemthem]);
        }
        //Danh sach cac san pham trong gio hang
        $content = Cart::content();
            
            $total_money = Cart::subtotal();
            $grouped = array();
            foreach($content as $product) {
                if (!isset($grouped[$product->options->mashop])) {
                    $grouped[$product->options->mashop] = array();
                }
                array_push($grouped[$product->options->mashop], $product);
            };
        foreach ($grouped as $shop_id => $items) {
           
                $donhangshop                = new Donhangshop();
                $donhangshop->donhang_id    = $donhang->id;
                $donhangshop->shop_id       = $items[0]->options->mashop;
                foreach ($items as $item) {
                   $donhangshop->tongtien      += $item->price*$item->qty;
                }
                
                $donhangshop->tinhtrangdon  = 0;
                $donhangshop->hinhthuc      = 0;
                $donhangshop->nhanhang      = 0;
                $donhangshop->save();
             foreach ($items as $item) {
                $chitietdon                 =   new Chitietdon();
                $chitietdon->shop_id        = $items[0]->options->mashop;
                $chitietdon->donhangshop_id = $donhangshop->id;
                $chitietdon->sanpham_id     = $item->id;
                $chitietdon->soluong        = $item->qty;
                $chitietdon->save();

                $sanphamshop = Sanphamshop::where('sanpham_id',$item->id)->first();
                $soluongxuat = $sanphamshop->soluongxuat+$item->qty;
                $update_slx = Sanphamshop::where('sanpham_id',$item->id)
                                ->update(['soluongxuat'=>$soluongxuat]);

            }

            
        }
        
       Cart::destroy();
       if(Auth::check())
         return redirect()->back()->with('thanhcong','Đặt hàng thành công và bạn được cộng thêm'.$prize_point. 'điểm cho lần mua tiếp theo');
        else
             return redirect()->back()->with('thanhcong','Đặt hàng thành công');
    }
}
