@extends('layouts.app')
@section('content')
<div class="container-fluid" >
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive">
                    <h4 class="card-title">Danh sách dịch vụ</h4>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">

                        <a href="{{route('dangkydichvu.create')}}" class="btn btn-outline-secondary mt-2"><i class="fas fa-plus-circle"></i> Đăng ký dịch vụ</a> 
                        <button type="button" class="btn btn-outline-warning mt-2 ml-3" data-toggle="modal" data-target="#modal-secondary" href="#nhap"> <i class="fas fa-upload"></i> Nhập Excel</button>
                        <a href="{{ route('dangkydichvu.xuat') }}" class="btn btn-outline-success ml-3 mt-2"><i class="fas fa-download"></i> Xuất ra Excel</a>
                    </div>
                    <form action="{{ route('dangkydichvu.nhap') }}" method="post" enctype="multipart/form-data">
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
                                    <th width="5">#</th>
                                    <th width="15" class="text-center">Tên doanh nghiệp</th>
                                    <th width="15" class="text-center">Tên dịch vụ</th>
                                    <th width="15" class="text-center">Ngày đăng ký</th>
                                    <th width="15" class="text-center">Ngày kết thúc</th>
                                    <th width="5" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($dangkydichvu as $value)
                                <tr>
                                    <th>{{ $loop->iteration }}</th>
                                    <td class="text-center">{{$value->doanhnghiep->tendoanhnghiep}}</td>
                                    <td class="text-center">{{$value->dichvu->tendv}}</td>
                                    <td class="text-center">{{date("d-m-Y H:m:s",strtotime($value->ngaydangky))}}</td>
                                    <td class="text-center">{{date("d-m-Y H:m:s",strtotime($value->ngayketthuc))}}</td>
                                    <td class="text-center">
                                        <a href="{{ route('dangkydichvu.edit', ['id' => $value->id]) }}"><i class="fa fa-edit"></i></a>
                                        <a href="{{ route('dangkydichvu.destroy', ['id' => $value->id]) }}" onclick="return confirm('Bạn có muốn xóa lĩnh vực không?')"><i class="fa fa-trash-alt text-danger"></i></a>
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
