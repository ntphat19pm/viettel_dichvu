@extends('layouts.app')
@section('content')
<div class="card mt-3">
<div class="card-body table-responsive ">
<div class="title"><h3>Sửa doanh nghiệp</h3></div>

    <form action="{{route('doanhnghiep.update',$data->id)}}" method="POST" class="needs-validation" novalidate>
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <label for="mst" class="form-label">Mã số thuế</label>
                <input type="text" class="form-control" value="{{$data->mst}}" id="mst" name="mst" autocomplete="off" required>
            </div>
            <div class="col-lg-6">
                <label for="tendoanhnghiep" class="form-label">Tên doanh nghiệp</label>
                <input type="text" class="form-control" value="{{$data->tendoanhnghiep}}" id="tendoanhnghiep" name="tendoanhnghiep" autocomplete="off" required>
            </div>
            <div class="col-lg-6">
                <label for="diachi" class="form-label">Địa chỉ</label>
                <input type="text" class="form-control" value="{{$data->diachi}}" id="diachi" name="diachi" autocomplete="off" required>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="nguoidaidien" class="form-label">Người đại diện</label>
                    <input type="text" class="form-control" value="{{$data->nguoidaidien}}" id="nguoidaidien" name="nguoidaidien" autocomplete="off" required>
                </div>
            </div>
        </div>
               
        <button type="submit" class="btn btn-primary">Thêm vào CSDL</button>
    </form>
    </div>
</div>
@endsection