@extends('layouts.app')
@section('content')
<div class="container-fluid" >
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive">
                    <h4 class="card-title">Danh sách doanh nghiệp</h4>
                    {{-- <div class="col-lg-6">
                      <div class="form-group">
                          <label for="caphoc">Cấp học<span class="text-danger font-weight-bold">*</span></label>
                          <select id="caphoc" class="form-control custom-select @error('caphoc') is-invalid @enderror" name="caphoc" required autofocus>
                              <option value="">Chọn</option>
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
                  </div> --}}
                  <form action="" class="form-inline mb-3">
                    <div class="form-group ">
                      <input class="form-control" name="tukhoa" placeholder="Nhập tên danh mục">
                     </div>
                     <button type="submit" class="btn btn-primary">
                      <i class ="fas fa-search"></i>
                    </button>
                    </form>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                        <a href="{{route('doanhnghiep.create')}}" class="btn btn-outline-secondary mt-2"><i class="fas fa-plus-circle"></i> Thêm doanh nghiệp</a> 
                        <button type="button" class="btn btn-outline-warning mt-2 ml-3" data-toggle="modal" data-target="#modal-secondary" href="#nhap"> <i class="fas fa-upload"></i> Nhập Excel</button>
                        <a href="{{ route('doanhnghiep.xuat') }}" class="btn btn-outline-success ml-3 mt-2"><i class="fas fa-download"></i> Xuất ra Excel</a>
                    </div>
                    <form action="{{ route('doanhnghiep.nhap') }}" method="post" enctype="multipart/form-data">
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
                                    <th class="text-center">#</th>
                                    <th class="text-center">Mã số thuế</th>
                                    <th class="text-center">Tên doanh nghiệp</th>
                                    <th class="text-center">Người đại diện</th>
                                    <th class="text-center">Số điện thoại</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($doanhnghiep as $value)
                                <tr>
                                    <th class="text-center">{{ $loop->iteration }}</th>
                                    <td class="text-center">{{$value->mst}}</td>
                                    <td width="25%" class="text-center">{{$value->tendoanhnghiep}}</td>
                                    <td class="text-center">{{$value->nguoidaidien}}</td>
                                    <td class="text-center">{{$value->sdt}}</td>
                                    <td class="text-center">
                                        <a href="{{ route('doanhnghiep.edit', ['id' => $value->id]) }}"><i class="fa fa-edit mr-3"></i></a>
                                        <a href="{{ route('doanhnghiep.destroy', ['id' => $value->id]) }}" onclick="return confirm('Bạn có muốn xóa lĩnh vực không?')"><i class="fa fa-trash-alt text-danger"></i></a>
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
