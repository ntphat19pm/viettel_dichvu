<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\nhanvien;
use Illuminate\Http\Request;
use Excel;
use App\Imports\ChiTieuImport;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getDanhSach()
    {
        $user = User::all();
        return view('user.danhsach',compact('user'));
    }

    public function getThem()
    {
        return view('user.them');
    }

    public function postThem(Request $request)
    {          
        $orm = new User();
        $orm->name = $request->name;
        $orm->email = $request->email;
        $orm->role = $request->role;
        $sub_link=substr($request->email,0,-10);
        $orm->username=$sub_link;
        $orm->password=bcrypt($request->password);
        $orm->save();

        $th=new nhanvien;
        $th->nhanvien_id=$orm->id;
        $th->diachi=0;
        $th->sdt=0;
        if($th->save()){
            $orm=User::all();
            return redirect()->route('user')->with('status', 'Thêm mới thành công');
        }

        
    }

    public function getSua($id)
    {
        $data = User::find($id);
        return view('user.sua', compact('data'));
    }

    public function postSua(Request $request, $id)
    {
        $data=User::find($id);
        $data->name=$request->name;
        $data->email=$request->email;
        $data->role=$request->role;
        $sub_link=substr($request->email,0,-10);
        $data->username=$sub_link;
        if(!empty($request->password)) $data->password = bcrypt($request->password);  
        
       if($data->save()) {
           return redirect('user');
       }

    }

    public function getXoa($id)
    {
        $orm = ChiTieu::find($id);
        $orm->delete();
    
        return redirect()->route('chitieu');
    }

    public function postNhap(Request $request)
    {
        Excel::import(new ChiTieuImport, $request->file('file_excel'));

        return redirect()->route('chitieu');
    }
}
