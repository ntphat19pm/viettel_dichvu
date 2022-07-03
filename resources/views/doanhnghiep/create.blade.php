@extends('layouts.app')
@section('content')
<div class="card mt-3">
<div class="card-body table-responsive ">
<div class="title"><h3>Thêm doanh nghiệp</h3></div>

    <form action="{{ route('doanhnghiep.store') }}" method="post">
        @csrf
        <div class="form-group">
            <a>
                <button type="submit" class="btn btn-outline-primary float-right mt-2 ml-3"><i class="fas fa-plus-circle"></i> Lưu</button>
            </a>
            <a href="{{route('doanhnghiep')}}" class="btn btn-outline-danger mt-2 ml-3">
                <i class="fas fa-sign-out-alt"> Quay về bảng doanh nghiệp</i>     
            </a>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <label for="mst" class="form-label">Mã số thuế</label>
                <input type="number" class="form-control" id="mst" name="mst" autocomplete="off" required>
            </div>
            <div class="col-lg-6">
                <label for="matruong" class="form-label">Mã trường</label>
                <input type="number" class="form-control" id="matruong" name="matruong" autocomplete="off" required>
            </div>
            <div class="col-lg-6">
                <label for="tendoanhnghiep" class="form-label">Tên doanh nghiệp</label>
                <input type="text" class="form-control" id="tendoanhnghiep" name="tendoanhnghiep" autocomplete="off" required>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="loaihinh">Loại hình đào tạo<span class="text-danger font-weight-bold">*</span></label>
                    <select id="loaihinh" class="form-control custom-select @error('loaihinh') is-invalid @enderror" name="loaihinh" required autofocus>
                        <option value="CL">Công lập</option>
                        <option value="TT">Tư thục</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="caphoc">Cấp học<span class="text-danger font-weight-bold">*</span></label>
                    <select id="caphoc" class="form-control custom-select @error('caphoc') is-invalid @enderror" name="caphoc" required autofocus>
                        <option value="SGD">Sở Giáo dục và Đào tạo</option>
                        <option value="PGD">Phòng Giáo dục và Đào tạo</option>
                        <option value="DH">Đại học</option>
                        <option value="LC">Liên cấp</option>
                        <option value="MN">Mầm non</option>
                        <option value="MG">Mẫu giáo</option>
                        <option value="NT">Nhà trẻ</option>
                        <option value="TH">Tiểu học</option>
                        <option value="THCS">Trung học cơ sở</option>
                        <option value="THPT">Trung học phổ thông</option>
                        <option value="TTGDTX">Trung tâm giáo dục thường xuyên</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="huyen">Huyện<span class="text-danger font-weight-bold">*</span></label>
                    <select id="huyen" class="form-control custom-select @error('huyen') is-invalid @enderror" name="huyen" required autofocus>
                        <option value="AP">An Phú</option>
                        <option value="CP">Châu Phú</option>
                        <option value="CT">Châu Thành</option>
                        <option value="CM">Chợ Mới</option>
                        <option value="PT">Phú Tân</option>
                        <option value="TB">Tịnh Biên</option>
                        <option value="TS">Thoại Sơn</option>
                        <option value="TT">Tri Tôn</option>
                        <option value="CĐ">Châu Đốc</option>
                        <option value="LX">Long Xuyên</option>
                        <option value="TC">Tân Châu</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="nguoidaidien" class="form-label">Người đại diện</label>
                    <input type="text" class="form-control" id="nguoidaidien" name="nguoidaidien" autocomplete="off" required>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="sdt" class="form-label">Số điện thoại</label>
                    <input type="number" class="form-control" id="sdt" name="sdt" autocomplete="off" required>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="diachi" class="form-label">Địa chỉ</label>
                    <input type="text" class="form-control" id="diachi" name="diachi" autocomplete="off" required>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="coquan" class="form-label">Số điện thoại cơ quan</label>
                    <input type="number" class="form-control" id="coquan" name="coquan" autocomplete="off" required>
                </div>
            </div>
            
        </div>
    </form>
    </div>
</div>
@endsection