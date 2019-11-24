<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Shop;
use App\Loaisanpham;
use App\Sanpham;
use Cart;
use App\Tichdiem;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('header_client',function($view){
         if(Auth::check()){
            $list_shop = Shop::where('user_id',Auth::User()->id)->get();
            $view->with('list_shop',$list_shop);
         }
        });
        view()->composer('layout_shop.header_shop',function($view){
           
            $loaisp = Loaisanpham::all();
            $view->with('loaisp',$loaisp);
        });
        view()->composer('sidebar_client',function($view){
            $sanpham = Sanpham::all();
            $view->with('sanpham',$sanpham);
        });
        view()->composer('sidebar_client',function($view){
            $loaisanpham = Loaisanpham::all();
            $view->with('loaisanpham',$loaisanpham);
        });
        view()->composer('header_client',function ($view){
            if(Auth::check()){
                 $giohang = Cart::count();
                $view->with('giohang',$giohang);
            }
           
        });
       view()->composer('sidebar_client',function($view){
            $thuonghieu = Sanpham::select('hangsx')->distinct()->get();
            $view->with('thuonghieu',$thuonghieu);
       });
       view()->composer('*',function($view){
            $content = Cart::content();
            
            $total_money = Cart::subtotal();
            $grouped = array();
            foreach($content as $product) {
                if (!isset($grouped[$product->options->mashop])) {
                    $grouped[$product->options->mashop] = array();
                }
                array_push($grouped[$product->options->mashop], $product);
            };
            $view->with('grouped',$grouped);
            $view->with('content',$content);
            $view->with('total_money',$total_money);
       });

       // view()->composer('*',function($view){
       //      $diemthuong = Tichdiem::where('user_id',Auth::User()->id)->first();
       //        if($diemthuong->diem==0){
       //              $tienquydoi = 0;
       //          }
       //        else  if(0<$diemthuong->diem&&$diemthuong->diem<30)
       //         {
       //              $tienquydoi = 20000;
       //         }
       //         else if(30<$diemthuong->diem&&$diemthuong->diem<60)
       //         {
       //              $tienquydoi = 30000;
       //         }
       //         else if(60<$diemthuong->diem&&$diemthuong->diem<100)
       //         {
       //              $tienquydoi = 50000;
       //         }
       //         else
       //              $tienquydoi = 70000;
       //      $view->with('diemthuong',$diemthuong);
       //      $view->with('tienquydoi',$tienquydoi);
       // });
       
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
