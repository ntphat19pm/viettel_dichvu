@extends('layouts.app')
@section('content')
<div class="card mt-3">
<div class="card-body table-responsive ">
<div class="title"><h3>Thêm Chi tiết DT - TB</h3></div>

    <form action="{{ route('nhanvien.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                <label for="nhanvien_id">Nhân viên<span class="text-danger font-weight-bold">*</span></label>
                <select id="nhanvien_id" class="form-control custom-select @error('chucvu_id') is-invalid @enderror" name="nhanvien_id" required autofocus>
                    <option value="">-- Chọn nhân viên --</option>
                    @foreach($user as $value)
                        <option value="{{$value->id }}">{{ $value->name }}</option>
                    @endforeach
                </select>
                </div>
            </div>
            <div class="col-lg-6">
                <label for="diachi" class="form-label">Địa chỉ</label>
                <input type="text" class="form-control" id="diachi" name="diachi" autocomplete="off" required>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="sdt" class="form-label">SĐT</label>
                    <input type="text" class="form-control" id="sdt" name="sdt" autocomplete="off" required>
                </div>
            </div>
        </div>
               
        <button type="submit" class="btn btn-primary">Thêm vào CSDL</button>
    </form>
    </div>
</div>
@endsection