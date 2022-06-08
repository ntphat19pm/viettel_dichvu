@extends('layouts.app')
@section('content')
<div class="container-fluid" >
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive">
                    <h4 class="card-title">Danh sách dịch vụ</h4>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">

                        <a href="{{route('dichvu.create')}}" class="btn btn-outline-secondary mt-2"><i class="fas fa-plus-circle"></i> Thêm dịch vụ</a> 
                        <button type="button" class="btn btn-outline-warning mt-2 ml-3" data-toggle="modal" data-target="#modal-secondary" href="#nhap"> <i class="fas fa-upload"></i> Nhập Excel</button>
                        <a href="{{ route('dichvu.xuat') }}" class="btn btn-outline-success ml-3 mt-2"><i class="fas fa-download"></i> Xuất ra Excel</a>
                    </div>
                    <form action="{{ route('dichvu.nhap') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal fade" id="modal-secondary">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Nhập file Excel</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <div class="mb-0">
                                  <label for="file_excel" class="form-label">Chọn tập tin Excel</label>
                                  <input type="file" class="form-control" id="file_excel" name="file_excel" required />
                                  <a href="{{url('public/uploads/file_nhap')}}/danh-sach-chi-tieu.xlsx" class="btn btn-outline-info mt-3">Download file Excel</a>
                                </div>
                              </div>
                              <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-outline-success">Upload file Excel</button>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                      </form>
                    <div class="">
                        <table id ="zero_config" class="table table-hover mt-4">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th class="text-center">Tên dịch vụ</th>
                                    <th class="text-center">Thời gian</th>
                                    <th class="text-center">Khuyến mãi</th>
                                    <th class="text-center">Giá</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($dichvu as $value)
                                <tr>
                                    <th>{{ $loop->iteration }}</th>
                                    <td width="45%" class="text-center">{{$value->tendv}}</td>
                                    <td class="text-center">
                                        @if ($value->thoigian==6)
                                        6 tháng
                                        @elseif($value->thoigian==12)
                                        1 năm
                                        @elseif($value->thoigian==24)
                                        2 năm
                                        @endif
                                    </td>
                                    <td class="text-center">{{$value->khuyenmai}}</td>
                                    <td class="text-center">{{$value->gia}}</td>
                                    <td class="text-center">
                                      <a href="{{ route('dichvu.edit', ['id' => $value->id]) }}"><i class="fa fa-edit mr-3"></i></a>
                                      <a href="{{ route('dichvu.destroy', ['id' => $value->id]) }}" onclick="return confirm('Bạn có muốn xóa lĩnh vực không?')"><i class="fa fa-trash-alt text-danger"></i></a>
                                    </td> 
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
