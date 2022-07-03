@extends('layouts.app')
@section('content')
<div class="card mt-3">
<div class="card-body table-responsive ">
<div class="title"><h3>Sửa doanh nghiệp</h3></div>

    <form action="{{route('doanhnghiep.update',$data->id)}}" method="POST" class="needs-validation" novalidate>
        @csrf
        <a>
            <button type="submit" class="btn btn-outline-primary float-right mt-2 ml-3 mb-3"><i class="fas fa-plus-circle"></i> Lưu</button>
        </a>
        <a href="{{route('doanhnghiep')}}" class="btn btn-outline-danger mt-2 ml-3 mb-3">
            <i class="fas fa-sign-out-alt"> Quay về bảng doanh nghiệp</i>     
        </a>
        <div class="row">
            <div class="col-lg-6">
                <label for="mst" class="form-label">Mã số thuế</label>
                <input type="text" class="form-control" value="{{$data->mst}}" id="mst" name="mst" autocomplete="off" required>
            </div>
            <div class="col-lg-6">
                <label for="matruong" class="form-label">Mã trường</label>
                <input type="text" class="form-control" value="{{$data->matruong}}" id="matruong" name="matruong" autocomplete="off" required>
            </div>
            <div class="col-lg-6">
                <label for="tendoanhnghiep" class="form-label">Tên doanh nghiệp</label>
                <input type="text" class="form-control" value="{{$data->tendoanhnghiep}}" id="tendoanhnghiep" name="tendoanhnghiep" autocomplete="off" required>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                  <label for="loaihinh">Loại hình đào tạo<span class="text-danger font-weight-bold">*</span></label>
                  <select id="loaihinh" class="form-control custom-select @error('loaihinh') is-invalid @enderror" name="loaihinh" required autofocus>
                    <option value="CL" {{($data->loaihinh== 'CL')?'selected':'' }}>Công lập</option>
                    <option value="TT" {{($data->loaihinh== 'TT')?'selected':'' }}>Tư thục</option>
                  </select>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                  <label for="caphoc">Cấp học<span class="text-danger font-weight-bold">*</span></label>
                  <select id="caphoc" class="form-control custom-select @error('caphoc') is-invalid @enderror" name="caphoc" required autofocus>
                    <option value="SGD" {{($data->caphoc== 'SGD')?'selected':'' }}>Sở Giáo dục và Đào tạo</option>
                    <option value="PGD" {{($data->caphoc== 'PGD')?'selected':'' }}>Phòng Giáo dục và Đào tạo</option>
                    <option value="DH" {{($data->caphoc== 'DH')?'selected':'' }}>Đại học</option>
                    <option value="LC" {{($data->caphoc== 'LC')?'selected':'' }}>Liên cấp</option>
                    <option value="MN" {{($data->caphoc== 'MN')?'selected':'' }}>Mầm non</option>
                    <option value="MG" {{($data->caphoc== 'MG')?'selected':'' }}>Mẫu giáo</option>
                    <option value="NT" {{($data->caphoc== 'NT')?'selected':'' }}>Nhà trẻ</option>
                    <option value="TH" {{($data->caphoc== 'TH')?'selected':'' }}>Tiểu học</option>
                    <option value="THCS" {{($data->caphoc== 'THCS')?'selected':'' }}>Trung học cơ sở</option>
                    <option value="THPT" {{($data->caphoc== 'THPT')?'selected':'' }}>Trung học phổ thông</option>
                    <option value="THPT" {{($data->caphoc== 'TTGDTX')?'selected':'' }}>Trung tâm Giáo dục thường xuyên</option>
                  </select>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                  <label for="huyen">Huyện<span class="text-danger font-weight-bold">*</span></label>
                  <select id="huyen" class="form-control custom-select @error('huyen') is-invalid @enderror" name="huyen" required autofocus>
                    <option value="AP" {{($data->huyen== 'AP')?'selected':'' }}>An Phú</option>
                    <option value="CP" {{($data->huyen== 'CP')?'selected':'' }}>Châu Phú</option>
                    <option value="CT" {{($data->huyen== 'CT')?'selected':'' }}>Châu Thành</option>
                    <option value="CM" {{($data->huyen== 'CM')?'selected':'' }}>Chợ Mới</option>
                    <option value="PT" {{($data->huyen== 'PT')?'selected':'' }}>Phú Tân</option>
                    <option value="TB" {{($data->huyen== 'TB')?'selected':'' }}>Tịnh Biên</option>
                    <option value="TS" {{($data->huyen== 'TS')?'selected':'' }}>Thoại Sơn</option>
                    <option value="TT" {{($data->huyen== 'TT')?'selected':'' }}>Tri Tôn</option>
                    <option value="CĐ" {{($data->huyen== 'CĐ')?'selected':'' }}>Châu Đốc</option>
                    <option value="LX" {{($data->huyen== 'LX')?'selected':'' }}>Long Xuyên</option>
                    <option value="TC" {{($data->huyen== 'TC')?'selected':'' }}>Tân Châu</option>
                  </select>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="nguoidaidien" class="form-label">Người đại diện</label>
                    <input type="text" class="form-control" value="{{$data->nguoidaidien}}" id="nguoidaidien" name="nguoidaidien" autocomplete="off" required>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="sdt" class="form-label">Số điện thoại</label>
                    <input type="number" class="form-control" value="{{$data->sdt}}" id="sdt" name="sdt" autocomplete="off" required>
                </div>
            </div>
            <div class="col-lg-6">
                <label for="diachi" class="form-label">Địa chỉ</label>
                <input type="text" class="form-control" value="{{$data->diachi}}" id="diachi" name="diachi" autocomplete="off" required>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="coquan" class="form-label">Số điện thoại cơ quan</label>
                    <input type="number" class="form-control" value="{{$data->coquan}}" id="coquan" name="coquan" autocomplete="off" required>
                </div>
            </div>
        </div>
    </form>
    </div>
</div>
@endsection