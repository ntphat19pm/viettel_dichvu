@extends('layouts.app')
@section('content')
<div class="card mt-3">
<div class="card-body table-responsive ">
<div class="title"><h3>Thêm dịch vụ</h3></div>

    <form action="{{route('dichvu.update',$data->id)}}" method="POST" class="needs-validation" novalidate>
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <label for="tendv" class="form-label">Tên dịch vụ</label>
                <input type="text" class="form-control" value="{{$data->tendv}}" id="tendv" name="tendv" autocomplete="off" required>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="thoigian">Lĩnh vực<span class="text-danger font-weight-bold">*</span></label>
                    <select id="thoigian" class="form-control custom-select @error('thoigian') is-invalid @enderror" name="thoigian" required autofocus>
                      <option value="6" {{($data->thoigian== '6')?'selected':'' }}>6 tháng</option>
                      <option value="12" {{($data->thoigian== '12')?'selected':'' }}>1 năm</option>
                      <option value="24" {{($data->thoigian== '24')?'selected':'' }}>2 năm</option>
                    </select>
                  </div>
            </div>
            <div class="col-lg-6">
                <label for="gia" class="form-label">Giá dịch vụ</label>
                <input type="number" class="form-control" value="{{$data->gia}}" id="gia" name="gia" autocomplete="off" required>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="khuyenmai_id">Sản phẩm<span class="text-danger font-weight-bold">*</span></label>
                    <select id="khuyenmai_id" class="form-control custom-select @error('khuyenmai_id') is-invalid @enderror" name="khuyenmai_id" required autofocus>
                        @foreach($khuyenmai as $value)
                        <option value="{{ $value->tgkhuyenmai }}" {{($data->khuyenmai_id== $value->tgkhuyenmai)?'selected':'' }}>{{$value->tenkhuyenmai}}</option>
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