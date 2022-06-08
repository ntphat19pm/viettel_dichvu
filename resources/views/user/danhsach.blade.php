@extends('layouts.app')
@section('content')
<div class="container-fluid" >
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive">
                    <h4 class="card-title">Danh sách người dùng</h4>
                    <p>
                        <a href="{{route('user.them')}}" class="btn btn-success" ><i class="fas fa-plus"></i> Thêm  </a>
                        <a href="#nhap" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#importModal"><i class="fas fa-upload"></i> Nhập từ Excel</a>
                    </p>
                    <div class="">
                        <table id ="zero_config" class="table table-hover mt-4">
                            <thead>
                                <tr>
                                    <th width="5">#</th>
                                    <th width="15" class="text-center">Tên người dùng</th>
                                    <th width="15" class="text-center">Tên đăng nhập</th>
                                    <th width="15" class="text-center">Email</th>
                                    <th width="5" class="text-center">Sửa</th>
                                    <th width="5" class="text-center">Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($user as $value)
                                <tr>
                                    <th>{{ $loop->iteration }}</th>
                                    <td class="text-center">{{$value->name }}</td>
                                    <td class="text-center">{{$value->username }}</td>
                                    <td class="text-center">{{$value->email }}</td>
                                    <td class="text-center"><a href="{{ route('user.sua', ['id' => $value->id]) }}"><i class="fa fa-edit"></i></a></td> 
                                    <td class="text-center"><a href="{{ route('user.xoa', ['id' => $value->id]) }}" onclick="return confirm('Bạn có muốn xóa lĩnh vực không?')"><i class="fa fa-trash-alt text-danger"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<form action="{{ route('chitieu.nhap') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="importModal" tabindex="-1" role="dialog" aria-labelledby="importModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="importModalLabel">Nhập từ Excel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-0">
                        <label for="file_excel" class="form-label">Chọn tập tin Excel</label>
                        <input type="file" class="form-control" id="file_excel" name="file_excel" required />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times"></i> Hủy bỏ</button>
                    <button type="submit" class="btn btn-danger"><i class="fas fa-upload"></i> Nhập dữ liệu</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
