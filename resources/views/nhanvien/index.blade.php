@extends('layouts.app')
@section('content')
<div class="container-fluid" >
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive">
                    <h4 class="card-title">Danh sách nhân viên</h4>
                    <p>
                        <a href="{{route('nhanvien.create')}}" class="btn btn-success" ><i class="fas fa-plus"></i> Thêm  </a>
                        <a href="#nhap" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#importModal"><i class="fas fa-upload"></i> Nhập từ Excel</a>
                    </p>
                    <div class="">
                        <table id ="zero_config" class="table table-hover mt-4">
                            <thead>
                                <tr>
                                    <th width="5">#</th>
                                    <th width="15" class="text-center">Nhân viên</th>
                                    <th width="15" class="text-center">Địa chỉ</th>
                                    <th width="15" class="text-center">Số điện thoại</th>
                                    <th width="5" class="text-center">Sửa</th>
                                    <th width="5" class="text-center">Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($nhanvien as $value)
                                <tr>
                                    <th>{{ $loop->iteration }}</th>
                                    <td class="text-center">{{$value->user->name}}</td>
                                    <td class="text-center">{{$value->diachi}}</td>
                                    <td class="text-center">{{$value->sdt}}</td>
                                    <td class="text-center"><a href="{{ route('nhanvien.edit', ['id' => $value->id]) }}"><i class="fa fa-edit"></i></a></td> 
                                    <td class="text-center"><a href="{{ route('nhanvien.destroy', ['id' => $value->id]) }}" onclick="return confirm('Bạn có muốn xóa lĩnh vực không?')"><i class="fa fa-trash-alt text-danger"></i></a></td>
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
@endsection
