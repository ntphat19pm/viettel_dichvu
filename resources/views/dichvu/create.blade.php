@extends('layouts.app')
@section('content')
<div class="card mt-3">
<div class="card-body table-responsive ">
<div class="title"><h3>Thêm dịch vụ</h3></div>

    <form action="{{ route('dichvu.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <label for="tendv" class="form-label">Tên dịch vụ</label>
                <input type="text" class="form-control" id="tendv" name="tendv" autocomplete="off" required>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="thoigian">Thời gian dịch vụ<span class="text-danger font-weight-bold">*</span></label>
                    <select id="thoigian" class="form-control custom-select @error('thoigian') is-invalid @enderror" name="thoigian" required autofocus>
                      <option value="">-- Chọn thời gian dịch vụ --</option>
                      <option value="6">6 tháng</option>
                      <option value="12">1 năm</option>
                      <option value="24">2 năm</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6">
                <label for="gia" class="form-label">Giá dịch vụ</label>
                <input type="number" class="form-control" id="gia" name="gia" autocomplete="off" required>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="khuyenmai_id">Khuyến mãi<span class="text-danger font-weight-bold">*</span></label>
                    <select id="khuyenmai_id" class="form-control custom-select @error('khuyenmai_id') is-invalid @enderror" name="khuyenmai_id" required autofocus>
                        <option value="">-- Chọn khuyến mãi --</option>
                        @foreach($khuyenmai as $value)
                            <option value="{{$value->tgkhuyenmai }}">{{ $value->tenkhuyenmai }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
               
        <button type="submit" class="btn btn-primary">Thêm vào CSDL</button>
    </form>
    </div>
</div>
@endsection