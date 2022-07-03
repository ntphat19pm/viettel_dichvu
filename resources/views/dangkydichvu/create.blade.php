@extends('layouts.app')
@section('content')
<div class="card mt-3">
<div class="card-body table-responsive ">
<div class="title"><h3>Thêm dịch vụ</h3></div>

    <form action="{{ route('dangkydichvu.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <label for="mahd" class="form-label">Số hợp đồng</label>
                <input type="text" class="form-control" id="mahd" name="mahd" autocomplete="off" required>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="doanhnghiep_id">Doanh nghiệp<span class="text-danger font-weight-bold">*</span></label>
                    <select id="doanhnghiep_id" class="form-control custom-select @error('doanhnghiep_id') is-invalid @enderror" name="doanhnghiep_id" required autofocus>
                        <option value="">-- Chọn doanh nghiệp --</option>
                        @foreach($doanhnghiep as $value)
                            <option value="{{$value->id }}">{{ $value->tendoanhnghiep }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="dichvu_id">Dịch vụ<span class="text-danger font-weight-bold">*</span></label>
                    <select id="dichvu_id" class="form-control custom-select @error('dichvu_id') is-invalid @enderror" name="dichvu_id" required autofocus>
                        <option value="">-- Chọn dịch vụ --</option>
                        @foreach($dichvu as $value)
                            <option value="{{$value->id }}">{{ $value->tendv }} với giá {{number_format( $value->gia)}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            
            <div class="col-lg-6">
                <label for="soluong" class="form-label">Số lượng</label>
                <input type="number" class="form-control" id="soluong" name="soluong" autocomplete="off" required>
            </div>
        </div>
               
        <button type="submit" class="btn btn-primary">Thêm vào CSDL</button>
    </form>
    </div>
</div>
@endsection