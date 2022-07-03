@extends('layouts.app')
@section('content')
<div class="card mt-3">
<div class="card-body table-responsive ">
<div class="title"><h3>Sửa đăng ký dịch vụ</h3></div>

    <form action="{{route('dangkydichvu.update',$data->id)}}" method="POST" class="needs-validation" novalidate>
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="doanhnghiep_id">Sản phẩm<span class="text-danger font-weight-bold">*</span></label>
                    <select id="doanhnghiep_id" class="form-control custom-select @error('doanhnghiep_id') is-invalid @enderror" name="doanhnghiep_id" required autofocus>
                        @foreach($doanhnghiep as $value)
                        <option value="{{ $value->id }}" {{($data->doanhnghiep_id== $value->id)?'selected':'' }}>{{$value->tendoanhnghiep}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="dichvu_id">Sản phẩm<span class="text-danger font-weight-bold">*</span></label>
                    <select id="dichvu_id" class="form-control custom-select @error('dichvu_id') is-invalid @enderror" name="dichvu_id" required autofocus>
                        @foreach($dichvu as $value)
                        <option value="{{ $value->id }}" {{($data->dichvu_id== $value->id)?'selected':'' }}>{{$value->tendv}}</option>
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