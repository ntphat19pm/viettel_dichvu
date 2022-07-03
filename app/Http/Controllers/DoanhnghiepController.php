<?php

namespace App\Http\Controllers;

use App\Models\doanhnghiep;
use Toastr;
use Excel;
use App\Imports\doanhnghiep_import;
use App\Exports\doanhnghiep_export;
use Illuminate\Http\Request;

class DoanhnghiepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doanhnghiep = doanhnghiep::all();
        return view('doanhnghiep.index',compact('doanhnghiep'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doanhnghiep.create');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new doanhnghiep;
        $data->mst=$request->mst;
        $data->matruong=$request->matruong;
        $data->tendoanhnghiep=$request->tendoanhnghiep;
        $data->diachi=$request->diachi;
        $data->nguoidaidien=$request->nguoidaidien;
        $data->sdt=$request->sdt;
        $data->caphoc=$request->caphoc;
        $data->huyen=$request->huyen;
        $data->loaihinh=$request->loaihinh;
        $data->coquan=$request->coquan;
        if($data->save()) {
            Toastr::success('Thêm doanh nghiệp thành công','Thêm doanh nghiệp');
            return redirect('doanhnghiep');
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\doanhnghiep  $doanhnghiep
     * @return \Illuminate\Http\Response
     */
    public function show(doanhnghiep $doanhnghiep)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\doanhnghiep  $doanhnghiep
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=doanhnghiep::find($id);
        return view('doanhnghiep.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\doanhnghiep  $doanhnghiep
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=doanhnghiep::find($id);
        $data->mst=$request->mst;
        $data->matruong=$request->matruong;
        $data->tendoanhnghiep=$request->tendoanhnghiep;
        $data->diachi=$request->diachi;
        $data->nguoidaidien=$request->nguoidaidien;
        $data->sdt=$request->sdt;
        $data->caphoc=$request->caphoc;
        $data->huyen=$request->huyen;
        $data->loaihinh=$request->loaihinh;
        $data->coquan=$request->coquan;
        
       if($data->save()) {
            Toastr::success('Sửa doanh nghiệp thành công','Sửa doanh nghiệp');
            return redirect('doanhnghiep');
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\doanhnghiep  $doanhnghiep
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(doanhnghiep::find($id)->delete()){
            Toastr::success('Xóa doanh nghiệp thành công','Xóa doanh nghiệp');
            return redirect('doanhnghiep');
        }
    }

    public function getXuat()
    {
        return Excel::download(new doanhnghiep_export, 'danh-sach-doanh-nghiep.xlsx');
    }

    public function postNhap(Request $request)
    {
        Excel::import(new doanhnghiep_import, $request->file('file_excel'));
        return redirect('doanhnghiep');
    }
}
