<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Shop;
use\App\Sanpham;
use\App\Loaisanpham;
use\App\Sanphamshop;
use\App\Donhang;
use\App\Donhangshop;
use\App\Chitietdon;
use\App\Binhluan;
class ShopController extends Controller
{
   public function shop($id){
        $shop = Shop::find($id);
        view()->share('shop',$shop);
        
    	return view('pages_shop.trangchu',['shop'=>$shop]);
    }
    //=======================THỐNG KÊ===================================//
    public function sanPhamBanChay($id)
    {
        $shop = Shop::find($id);
        view()->share('shop',$shop);
        $sanPhamBanChay = Sanphamshop::where('shop_id',$id)
        ->where('soluongxuat','>',0)->orderBy('soluongxuat','desc')->paginate(5);
        return view('pages_shop.topbanchay',compact('shop','sanPhamBanChay'));
    }
    public function sanPhamBinhChon($id)
    {
        $shop = Shop::find($id);
        view()->share('shop',$shop);
        $sanPhamBinhChon = Sanphamshop::where('shop_id',$id)->
        where('sodiem','>',0)->orderBy('sodiem','desc')->paginate(5);
        return view('pages_shop.topbinhchon',compact('shop','sanPhamBinhChon'));
    }
    public function tongDoanhThu($id)
    {
        $shop = Shop::find($id);
        view()->share('shop',$shop);

        $tongDoanhThu = Donhangshop::where('shop_id',$id)->where('nhanhang','1')
        ->sum('tongtien');
        return view('pages_shop.tongdoanhthu',compact('shop','tongDoanhThu'));
    }


    //====================QUẢN LÝ SẢN PHẨM===========================//

    public function getProduct($id)
    {
        $shop = Shop::find($id);
        view()->share('shop',$shop);
        $loaisanpham  = Loaisanpham::all();
        return view('pages_shop.themsp_shop',compact('shop','loaisanpham'));
    }


    public function postProduct($id, Request $request)
    {
    	$shop = Shop::find($id);
        view()->share('shop',$shop);
    	$this->validate($request,
    		[
    			'tensanpham' => 'required|unique:sanpham,tensanpham',
    			'gia'		=>'required',
    		],
    		[
    			'tensanpham.required'=>'Tên sản phẩm không được bỏ trống',
    			'tensanpham.unique'=>'Tên sản phẩm đã tồn tại',
    			'gia.required'=>'Giá không được bỏ trống'

    		]);
        $new_product = new Sanpham();
        $sanphamshop = new Sanphamshop();
        $new_product->shop_id 		= $shop->id;
        $new_product->tensanpham 	= $request->tensanpham;
        $new_product->gia 			= $request->gia;
        $new_product->mota 			= $request->mota;
        // $new_product->tilekhuyenmai = $request->tilekhuyenmai;
        $new_product->loaisanpham_id= $request->loaisanpham;
        $new_product->trangthai = 0;
        $new_product->hangsx = strtoupper($request->hangsx);

        if($request->hasFile('hinhanh')){
        	$file = $request->file('hinhanh');
        	$duoi = $file->getClientOriginalExtension();
        	if($duoi != 'jpg' && $duoi != "png" && $duoi != "jpeg"){
        		return redirect()->back()->with('loi','Định dạng ảnh phải là jpg,png,jpeg');
        	}

        	$name = $file->getClientOriginalName();
        	$hinhanh= str_random(4)."_".$name;
        	while(file_exists("upload".$hinhanh)){
        		$hinhanh= str_random(4)."_".$name;
        	}
        	
        	$file->move("upload",$hinhanh);
        	$new_product->hinhanh = $hinhanh;
        }
        else
        {
        	$new_product->hinhanh = "";
        }
        

        $new_product->save();
            $sanphamshop->shop_id = $shop->id;
            $sanphamshop->sanpham_id = $new_product->id;
            $sanphamshop->soluongnhap = $request->soluong;
            $sanphamshop->sodiem = 0;
            $sanphamshop->soluongxuat = 0;
           
            $sanphamshop->save();
        
        return redirect()->back()->with('thanhcong','Thêm sản phẩm thành công');
    }

     public function danhsach_sp($id,$id_loaisp)
    {
        $shop = Shop::find($id);
        view()->share('shop',$shop);

        $list_sp = Sanpham::where('shop_id',$id)->where('loaisanpham_id',$id_loaisp)->paginate(5);
        return view('pages_shop.danhsach_sp',compact('shop','list_sp'));
    }
    public function getUpdate($id,$idsp)
    {
    	$shop = Shop::find($id);
        view()->share('shop',$shop);
        $loaisanpham  = Loaisanpham::all();
        $sanpham = Sanpham::find($idsp);
        return view('pages_shop.suasp_shop',compact('shop','loaisanpham','sanpham'));
    }
    public function postUpdate($id,$idsp, Request $request)
    {
    	$shop = Shop::find($id);
        view()->share('shop',$shop);
        $updatesp = Sanpham::find($idsp);
        $updatesp->tensanpham 	= $request->tensanpham;
        $updatesp->gia 			= $request->gia;
        $updatesp->mota 		= $request->mota;
        //$update_sp->loaisanpham_id= $request->loaisanpham;
        $updatesp->tilekhuyenmai= $request->tilekhuyenmai;

        if($request->hasFile('hinhanh')){
        	$file = $request->file('hinhanh');
        	$duoi = $file->getClientOriginalExtension();
        	if($duoi != 'jpg' && $duoi != "png" && $duoi != "jpeg"){
        		return redirect()->back()->with('loi','Định dạng ảnh phải là jpg,png,jpeg');
        	}

        	$name = $file->getClientOriginalName();
        	$hinhanh= str_random(4)."_".$name;
        	while(file_exists("upload".$hinhanh)){
        		$hinhanh= str_random(4)."_".$name;
        	}
        	
        	$file->move("upload",$hinhanh);
        	$updatesp->hinhanh = $hinhanh;
        }
        
        $updatesp->save();

        
        return redirect()->back()->with('thanhcong','Cập nhật sản phẩm thành công');
    }
    //=============HẾT PHẦN QUẢN LÝ SẢN PHẨM========================//

//====================QUẢN LÝ ĐƠN HÀNG================================//
    public function getDonhang($id){
    	$shop = Shop::find($id);
        view()->share('shop',$shop);
        $donhang = Donhangshop::where('shop_id',$id)->paginate(6);
    	return view('pages_shop.donhang',compact('shop','donhang'));
    }
    public function getChitietdon($id,$iddon){
    	$shop = Shop::find($id);
        view()->share('shop',$shop);
        $chitietdon = Chitietdon::where('donhangshop_id',$iddon)->get();
         return view('pages_shop.chitiet_donhang',compact('shop','chitietdon'));
    }
    public function getShipHang($id,$iddon)
    {
        $shop = Shop::find($id);
        view()->share('shop',$shop);
        $shiphang = Donhangshop::where('id',$iddon)
        ->update(['tinhtrangdon'=>1,'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>NULL]);
         return redirect()->back();
    }
    public function getNhanHang($id,$iddon)
    {
        $shop = Shop::find($id);
        view()->share('shop',$shop);
        $nhanhang = Donhangshop::where('id',$iddon)->update(['nhanhang'=>1]);
        return redirect()->back();
    }
    public function getThongTinKH($id,$iddon)
    {
        $shop = Shop::find($id);
        view()->share('shop',$shop);
        $thongtinkh = Donhang::where('id',$iddon)->first();
        return view('pages_shop.thongtinkh',compact('thongtinkh','shop'));
    }
    public function getDonDaThanhToan($id){
        $shop = Shop::find($id);
        view()->share('shop',$shop);
        $dondathanhtoan = Donhangshop::where('tinhtrangdon','1')->where('shop_id',$id)->paginate(6);
        return view('pages_shop.dondathanhtoan',compact('dondathanhtoan','shop'));  
    }


//====================QUẢN LÝ KHO HÀNG==============================//
    public function getKho($id,$id_loaisp){
    	$shop = Shop::find($id);
        view()->share('shop',$shop);
        $spkho = Sanpham::where('shop_id',$id)->where('loaisanpham_id',$id_loaisp)->paginate(5);
    	return view('pages_shop.khohang',compact('shop','spkho'));
    }
//====================QUẢN LÝ BÌNH LUẬN=============================//
    public function getDanhSachCauHoi($id)
    {
        $shop = Shop::find($id);
        view()->share('shop',$shop);
        $sanphamshop = $shop->productIds;
        
        $binhluan = Binhluan::where('kieubl',1)->whereIn('sanpham_id',$sanphamshop)->get();
        return view('pages_shop.danhsachbinhluan',compact('shop','binhluan'));
    }
    public function TraLoi($id,$id_cauhoi ,Request $request)
    {
        $shop = Shop::find($id);
        view()->share('shop',$shop);

        $traloi = Binhluan::where('id',$id_cauhoi)->update(['traloi'=>$request->traloi]);
        return view('pages_shop.traloicauhoi',compact('shop','id_cauhoi'));
    }
    public function xoaTraLoi($id,$id_cauhoi)
    {
        $shop = Shop::find($id);
        view()->share('shop',$shop);
        Binhluan::destroy($id_cauhoi);
        return redirect()->back();
    }
    public function danhGia($id)
    {
        $shop = Shop::find($id);
        view()->share('shop',$shop);
        $sanphamshop = $shop->productIds;
        
        $binhluan = Binhluan::where('kieubl',0)->whereIn('sanpham_id',$sanphamshop)->get();
        return view('pages_shop.danhsachdanhgia',compact('shop','binhluan'));
    }
    
}
