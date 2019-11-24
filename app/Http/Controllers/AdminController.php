<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\taoshop;
use App\Users;
use App\Shop;
use App\Binhluan;

class AdminController extends Controller
{
	public function page_admin(){
    	return view('pages_admin.admin');
    }


    public function approve_shop(){
    	$list_shop = taoshop::all();

    	//Users::where('id',$list_shop->user_id)->first('name');
    	return view('pages_admin.approve_shop',compact('list_shop'));
    }



    public function agree_shop( Request $id){
    	$take_shop = taoshop::where('id',$id->id)->select('user_id','tenshop','name','created_at')->first();
    	$agree_shop= new Shop();

    	$agree_shop->id = $take_shop->id;
    	$agree_shop->user_id = $take_shop->user_id;
    	$agree_shop->tenshop = $take_shop->tenshop;
    	$agree_shop->created_at = $take_shop->created_at;
    	$agree_shop->name    = $take_shop->name;
    	$agree_shop->save();

    	Users::where('id',$take_shop->user_id)->update(['role_id'=>2]);
    	$cancel_shop = taoshop::find($id->id);
    	$cancel_shop->delete();

    	return view('pages_admin.admin',compact('agree_shop','take_shop','cancel_shop'));
    	return redirect()->back();
    }


    public function cancel_shop(Request $id){
    	$cancel_shop = taoshop::destroy($id->id);
    		return view('pages_admin.admin',compact('cancel_shop'));
    }


    public function management_shop(){
    	//$shop = Shop::select('name','user_id')->groupBy('name','user_id')->get() ;
    	//$quantity = Shop::select('name','user_id')->groupBy('name','user_id')->count();
    	$users = Users::where('role_id','2')->get();

    	
    	
    	return view('pages_admin.management_shop',['users'=>$users]);
    }


    public function quantity_shop(Request $qt)
    {
    	$count = Shop::where('user_id',$qt->qt)->get();
    	return view('pages_admin.quantity_shop',compact('count'));
    }

    public function management_user()
    {
    	$user = Users::where('role_id','<','4')->paginate(4);
    	return view('pages_admin.management_user',compact('user'));
    }


    public function delete_user(Request $id)
    {
    	$delete = Users::destroy($id->id);
    	//$delete_shop = Shop::where('user_id',$id->id)->select('id')->get();
    	//$delete->detach($delete_shop);
    	$delete_shop = Shop::where('user_id','$id->id')->delete();
    	return redirect()->back();
    }
    public function BL()
    {

        $danhSachBL = Binhluan::all();
        return view('pages_admin.danhsachbinhluan',compact('danhSachBL'));
    }
    public function xoaBL($id)
    {

        Binhluan::destroy($id);
        return redirect()->back();
    }

}
