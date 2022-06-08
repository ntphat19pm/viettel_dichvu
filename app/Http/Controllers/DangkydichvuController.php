<?php

namespace App\Http\Controllers;

use App\Models\dangkydichvu;
use App\Models\dichvu;
use Carbon\Carbon;
use Toastr;
use App\Models\doanhnghiep;
use Illuminate\Http\Request;

class DangkydichvuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dangkydichvu = dangkydichvu::all();
        return view('dangkydichvu.index',compact('dangkydichvu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doanhnghiep=doanhnghiep::all();
        $dichvu=dichvu::all();
        return view('dangkydichvu.create',compact('doanhnghiep','dichvu'));  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new dangkydichvu;
        $data->doanhnghiep_id=$request->doanhnghiep_id;
        $data->dichvu_id=$request->dichvu_id;
        $data->ngaydangky=Carbon::now('Asia/Ho_Chi_Minh');

        $tgdichvu=dichvu::where('id',$request->dichvu_id)->select('thoigian')->first();
        if($tgdichvu->thoigian==6)
        {
            $data->ngayketthuc=Carbon::now('Asia/Ho_Chi_Minh')->addMonths(6);
            $data->ngaybao=Carbon::now('Asia/Ho_Chi_Minh')->addMonths(4);
        }
        elseif($tgdichvu->thoigian==12)
        {
            $data->ngayketthuc=Carbon::now('Asia/Ho_Chi_Minh')->addMonths(12);
            $data->ngaybao=Carbon::now('Asia/Ho_Chi_Minh')->addMonths(10);
        }
        elseif($tgdichvu->thoigian==24)
        {
            $data->ngayketthuc=Carbon::now('Asia/Ho_Chi_Minh')->addMonths(24);
            $data->ngaybao=Carbon::now('Asia/Ho_Chi_Minh')->addMonths(22);
        }
        
        if($data->save()) {
            Toastr::success('Thêm đăng ký dịch vụ thành công','Thêm đăng ký dịch vụ');
            return redirect('dangkydichvu');
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dangkydichvu  $dangkydichvu
     * @return \Illuminate\Http\Response
     */
    public function show(dangkydichvu $dangkydichvu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dangkydichvu  $dangkydichvu
     * @return \Illuminate\Http\Response
     */
    public function edit(dangkydichvu $dangkydichvu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dangkydichvu  $dangkydichvu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dangkydichvu $dangkydichvu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dangkydichvu  $dangkydichvu
     * @return \Illuminate\Http\Response
     */
    public function destroy(dangkydichvu $dangkydichvu)
    {
        //
    }
}
