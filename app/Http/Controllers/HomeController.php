<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\ChiTieu;
use App\Models\ThucHien;
use App\Models\dangkydichvu;
use App\Models\CTrinhHD;
use Carbon\Carbon;

class HomeController extends Controller
{

    public function __construct()
    {
    }

    public function getHome()
    {
        if(Auth::check())
        {
            $dangkydichvu = dangkydichvu::all();
            $ngaytb = dangkydichvu::select('ngaybao')->get();
            $ngay=Carbon::now('Asia/Ho_Chi_Minh');
            return view('index',compact('dangkydichvu','ngay','ngaytb'));
        }
        else
        {
            return view('auth.login');
        }
    }
    public function showchuongtrinh($id){
        $showchuongtrinh=CTrinhHD::where('thang',$id)->orderby('thang','DESC')->paginate(10);
        $thang=thang::all(); 
        return view('index',compact('thang','showchuongtrinh'));
    }
}
