@extends('layouts.app')
@section('content')
<div class="card mt-3">
<div class="card-body table-responsive ">
<div class="title"><h3>Thêm dịch vụ</h3></div>

    <form action="{{route('khuyenmai.update',$data->id)}}" method="POST" class="needs-validation" novalidate>
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <label for="tenkhuyenmai" class="form-label">Tên khuyến mãi</label>
                <input type="text" class="form-control" value="{{$data->tenkhuyenmai}}" id="tenkhuyenmai" name="tenkhuyenmai" autocomplete="off" required>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="tgkhuyenmai" class="form-label">Thời gian khuyến mãi</label>
                    <input type="number" class="form-control" value="{{$data->tgkhuyenmai}}" id="tgkhuyenmai" name="tgkhuyenmai" autocomplete="off" required>
                </div>
            </div>
        </div>
               
        <button type="submit" class="btn btn-primary">Thêm vào CSDL</button>
    </form>
    </div>
</div>
@endsection