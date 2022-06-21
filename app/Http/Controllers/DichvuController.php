<?php

namespace App\Http\Controllers;

use App\Models\dichvu;
use App\Models\khuyenmai;
use Toastr;
use Excel;
use App\Imports\dichvu_import;
use App\Exports\dichvu_export;
use Illuminate\Http\Request;

class DichvuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dichvu = dichvu::all();
        return view('dichvu.index',compact('dichvu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $khuyenmai=khuyenmai::all();
        return view('dichvu.create',compact('khuyenmai'));  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new dichvu;
        $data->tendv=$request->tendv;
        $data->thoigian=$request->thoigian;
        $data->gia=$request->gia;
        $data->khuyenmai_id=$request->khuyenmai_id;
        if($data->save()) {
            Toastr::success('Thêm dịch vụ thành công','Thêm dịch vụ');
            return redirect('dichvu');
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dichvu  $dichvu
     * @return \Illuminate\Http\Response
     */
    public function show(dichvu $dichvu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dichvu  $dichvu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=dichvu::find($id);
        $khuyenmai=khuyenmai::all();
        return view('dichvu.edit',compact('data','khuyenmai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dichvu  $dichvu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=dichvu::find($id);
        $data->tendv=$request->tendv;
        $data->thoigian=$request->thoigian;
        $data->gia=$request->gia;
        $data->khuyenmai_id=$request->khuyenmai_id;
        
       if($data->save()) {
            Toastr::success('Sửa dịch vụ thành công','Sửa dịch vụ');
            return redirect('dichvu');
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dichvu  $dichvu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(dichvu::find($id)->delete()){
            Toastr::success('Xóa dịch vụ thành công','Xóa dịch vụ');
            return redirect('dichvu');
        }
    }

    public function getXuat()
    {
        return Excel::download(new dichvu_export, 'danh-sach-dich-vu.xlsx');
    }

    public function postNhap(Request $request)
    {
        Excel::import(new dichvu_import, $request->file('file_excel'));
        return redirect('dichvu');
    }
}
