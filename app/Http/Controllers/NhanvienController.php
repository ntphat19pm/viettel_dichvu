<?php

namespace App\Http\Controllers;

use App\Models\nhanvien;
use App\Models\User;
use Toastr;
use Illuminate\Http\Request;

class NhanvienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nhanvien = nhanvien::all();
        return view('nhanvien.index',compact('nhanvien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user=User::all();
        return view('nhanvien.create',compact('user'));  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new nhanvien;
        $data->nhanvien_id=$request->nhanvien_id;
        $data->sdt=$request->sdt;
        $data->diachi=$request->diachi;
        if($data->save()) {
            Toastr::success('Thêm nhân viên thành công','Thêm nhân viên');
           return redirect('nhanvien');
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\nhanvien  $nhanvien
     * @return \Illuminate\Http\Response
     */
    public function show(nhanvien $nhanvien)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\nhanvien  $nhanvien
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::all();
        $data=nhanvien::find($id);
        return view('nhanvien.edit',compact('data','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\nhanvien  $nhanvien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=nhanvien::find($id);
        $data->nhanvien_id=$request->nhanvien_id;
        $data->sdt=$request->sdt;
        $data->diachi=$request->diachi;
        
       if($data->save()) {
           return redirect('nhanvien');
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\nhanvien  $nhanvien
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(nhanvien::find($id)->delete()){
            Toastr::success('Xóa nhân viên thành công','Xóa nhân viên');
            return redirect('nhanvien');
        }
    }
}
