<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Order;
use App\Models\Category;
use App\Models\Coupon;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $data["count"]=Product::all()->count();
        $data["countorder"]=Order::where([["ordered",true]])->count();
        $data["countcategory"]=Category::all()->count();
        $data["countcoupon"]=Coupon::all()->count();
        $data["countuser"]=User::all()->count();
        return view("admin/dashboard");
    }

    
}
