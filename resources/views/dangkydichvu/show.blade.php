@extends('layouts.app')
@section('content')
<div class="card mt-3">
<div class="card-body table-responsive ">
<div class="title"><h3>Xem các thông tin hợp đồng đăng ký dịch vụ</h3></div>

    <form action="" method="POST" class="needs-validation" novalidate>
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <label for="tendoanhnghiep" class="form-label">Tên doanh nghiệp</label>
                <input type="text" class="form-control" value="{{$data->doanhnghiep->tendoanhnghiep}}" id="tendoanhnghiep" name="tendoanhnghiep" autocomplete="off" required readonly>
            </div>
            <div class="col-lg-6">
                <label for="tendv" class="form-label">Tên dịch vụ</label>
                <input type="text" class="form-control" value="{{$data->dichvu->tendv}}" id="tendv" name="tendv" autocomplete="off" required readonly>
            </div>
            <div class="col-lg-6">
                <label for="ngaydangky" class="form-label">Ngày đăng ký</label>
                <input type="text" class="form-control" value="{{date("d-m-Y H:m:s",strtotime($data->ngaydangky))}}" id="ngaydangky" name="ngaydangky" autocomplete="off" required readonly>
            </div>
            <div class="col-lg-6">
                <label for="ngayketthuc" class="form-label">Ngày kết thúc</label>
                <input type="text" class="form-control" value="{{date("d-m-Y H:m:s",strtotime($data->ngayketthuc))}}" id="ngayketthuc" name="ngayketthuc" autocomplete="off" required readonly>
            </div>
        </div>
               
        {{-- <a href="{{ route('dangkydichvu.export', ['id' => $data->id]) }}" class="btn btn-primary mt-3">Export</a> --}}
        <a href="{{ route('dangkydichvu.hopdong',$data->id) }}" class="btn btn-primary mt-3">Export Etep</a>
    </form>
    </div>
</div>
@endsection