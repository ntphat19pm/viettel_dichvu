<?php

namespace App\Http\Controllers;

use App\Models\dangkydichvu;
use App\Models\dichvu;
use Carbon\Carbon;
use Toastr;
use File;
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
        $data->soluong=$request->soluong;
        $data->mahd=$request->mahd;
        $data->ngaydangky=Carbon::now('Asia/Ho_Chi_Minh');

        $tgdichvu=dichvu::where('id',$request->dichvu_id)->select('thoigian','khuyenmai_id','gia')->first();
        $data->ngayketthuc=Carbon::now('Asia/Ho_Chi_Minh')->addMonths($tgdichvu->thoigian)->addMonths($tgdichvu->khuyenmai_id);
        $data->ngaybao=Carbon::now('Asia/Ho_Chi_Minh')->addMonths($tgdichvu->thoigian)->addMonths($tgdichvu->khuyenmai_id)->subMonths(1);
        
        $data->thanhtien=$tgdichvu->gia * $request->soluong;
        // if($tgdichvu->thoigian==6)
        // {
        //     $data->ngayketthuc=Carbon::now('Asia/Ho_Chi_Minh')->addMonths(6);
        //     $data->ngaybao=Carbon::now('Asia/Ho_Chi_Minh')->addMonths(5);
        // }
        // elseif($tgdichvu->thoigian==12)
        // {
        //     $data->ngayketthuc=Carbon::now('Asia/Ho_Chi_Minh')->addMonths(12);
        //     $data->ngaybao=Carbon::now('Asia/Ho_Chi_Minh')->addMonths(11);
        // }
        // elseif($tgdichvu->thoigian==24)
        // {
        //     $data->ngayketthuc=Carbon::now('Asia/Ho_Chi_Minh')->addMonths(24);
        //     $data->ngaybao=Carbon::now('Asia/Ho_Chi_Minh')->addMonths(23);
        // }
        
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
    public function show( $id)
    {
        $data=dangkydichvu::find($id);
        $doanhnghiep=doanhnghiep::all();
        $dichvu=dichvu::all();
        return view('dangkydichvu.show',compact('data','doanhnghiep','dichvu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dangkydichvu  $dangkydichvu
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $data=dangkydichvu::find($id);
        $doanhnghiep=doanhnghiep::all();
        $dichvu=dichvu::all();
        return view('dangkydichvu.edit',compact('data','doanhnghiep','dichvu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dangkydichvu  $dangkydichvu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=dangkydichvu::find($id);
        $data->doanhnghiep_id=$request->doanhnghiep_id;
        $data->dichvu_id=$request->dichvu_id;
        $data->soluong=$request->soluong;
        $data->mahd=$request->mahd;
        
       if($data->save()) {
            Toastr::success('Sửa đăng ký dịch vụ thành công','Sửa đăng ký dịch vụ');
            return redirect('dangkydichvu');
       }
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

    public function wordExport( $id)
    {
        $data=dangkydichvu::find($id);
        $doanhnghiep=doanhnghiep::all();
        $dichvu=dichvu::all();
        $template= new \PhpOffice\PhpWord\PhpWord('word-template/abc.docx');
        $section = $template->addSection();
        $text = $section->addText($data->id);
        $text = $section->addText($data->doanhnghiep->tendoanhnghiep);
        $text = $section->addText($data->dichvu->tendv);
        $text = $section->addText($data->ngaydangky);
        $text = $section->addText($data->ngayketthuc);

        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($template, 'Word2007');
        $fileName=$data->doanhnghiep->tendoanhnghiep;
        $objWriter->save($fileName . '.docx');
        return response()->download($fileName . '.docx')->deleteFileAfterSend(true);
    }

    public function getIn(Request $request, $id)
    {
     
        $data=dangkydichvu::find($id);
        $doanhnghiep=doanhnghiep::all();
        $dichvu=dichvu::all();
        return view('dangkydichvu.in',compact('data','doanhnghiep','dichvu'));
        
    }

    public function hopdong()
    {
        return view('dangkydichvu.hopdong');
    }
}
