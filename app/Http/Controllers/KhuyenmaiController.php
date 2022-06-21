<?php

namespace App\Http\Controllers;

use App\Models\khuyenmai;
use Toastr;
use Excel;
use App\Imports\khuyenmai_import;
use App\Exports\khuyenmai_export;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KhuyenmaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $khuyenmai = khuyenmai::all();
        return view('khuyenmai.index',compact('khuyenmai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('khuyenmai.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new khuyenmai;
        $data->tenkhuyenmai=$request->tenkhuyenmai;
        $data->tgkhuyenmai=$request->tgkhuyenmai;
        if($data->save()) {
            Toastr::success('Thêm khuyến mãi thành công','Thêm khuyến mãi');
            return redirect('khuyenmai');
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\khuyenmai  $khuyenmai
     * @return \Illuminate\Http\Response
     */
    public function show(khuyenmai $khuyenmai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\khuyenmai  $khuyenmai
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=khuyenmai::find($id);
        return view('khuyenmai.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\khuyenmai  $khuyenmai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=khuyenmai::find($id);
        $data->tenkhuyenmai=$request->tenkhuyenmai;
        $data->tgkhuyenmai=$request->tgkhuyenmai;
        
       if($data->save()) {
            Toastr::success('Sửa khuyến mãi thành công','Sửa khuyến mãi');
            return redirect('khuyenmai');
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\khuyenmai  $khuyenmai
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(khuyenmai::find($id)->delete()){
            Toastr::success('Xóa khuyến mãi thành công','Xóa khuyến mãi');
            return redirect('khuyenmai');
        }
    }

    public function getXuat()
    {
        return Excel::download(new khuyenmai_export, 'danh-sach-khuyen_mai.xlsx');
    }

    public function postNhap(Request $request)
    {
        Excel::import(new khuyenmai_import, $request->file('file_excel'));
        return redirect('khuyenmai');
    }
}
