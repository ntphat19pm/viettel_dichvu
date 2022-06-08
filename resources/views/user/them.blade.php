@extends('layouts.app')
@section('content')
<div class="card mt-3">
<div class="card-body table-responsive ">
<div class="title"><h3>Thêm người dùng</h3></div>

    <form action="{{ route('user.them') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <label for="name" class="form-label">Tên người dùng</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="" required autocomplete="name" autofocus>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" value="" class="form-control" id="email" name="email" required>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="password" class="form-label">Mật khẩu</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                  <label for="role">Quyền hạn<span class="text-danger font-weight-bold">*</span></label>
                  <select id="role" class="form-control custom-select @error('role') is-invalid @enderror" name="role" required autofocus>
                    <option value="admin">Quản lý</option>
                    <option value="staff">Nhân viên</option>
                  </select>
                </div>
            </div>
        </div>              
        <div class="row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </form>
    </div>
</div>
@endsection