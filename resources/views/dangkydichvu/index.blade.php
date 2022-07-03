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
                                        <a href="{{ route('dangkydichvu.show', ['id' => $value->id]) }}"><i class="fas fa-print text-success ml-2"></i></a>
                                        <a data-toggle="modal" data-target="#modal-secondary{{$value->id}}" href="#nhap"> <i class="fas fa-eye text-warning ml-2"></i></a>
                                        <a href="{{ route('dangkydichvu.edit', ['id' => $value->id]) }}"><i class="fa fa-edit ml-2"></i></a>
                                        <a href="{{ route('dangkydichvu.destroy', ['id' => $value->id]) }}" onclick="return confirm('Bạn có muốn xóa lĩnh vực không?')"><i class="fa fa-trash-alt text-danger ml-2"></i></a>
                                    </td> 

                                    <form action="" method="post" enctype="multipart/form-data">
                                      @csrf
                                      <div class="modal fade" id="modal-secondary{{$value->id}}">
                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h4 class="modal-title">THÔNG TIN ĐĂNG KÝ - {{$value->mahd}}</h4>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                              <div class="text-center"><b>THÔNG TIN NHÀ TRƯỜNG</b></div>
                                              <div class="row">
                                                <div class="col-lg-8">
                                                  Tên: {{$value->doanhnghiep->tendoanhnghiep}}
                                                  <br>Địa chỉ: {{$value->doanhnghiep->diachi}}
                                                </div>
                                                <div class="col-lg-4">
                                                  Mã số thuế: {{$value->doanhnghiep->mst}}
                                                  <br>Số điện thoại: {{$value->doanhnghiep->sdt}}
                                                </div>
                                              </div>
                                              <hr>
                                              <div class="text-center"><b>THÔNG TIN DỊCH VỤ</b></div>
                                              <div class="row">
                                                <div class="col-lg-8">
                                                  Tên: {{$value->dichvu->tendv}}
                                                  <br>Khuyến mãi: {{$value->dichvu->khuyenmai_id}} tháng
                                                </div>
                                                <div class="col-lg-4">
                                                  Thời gian dịch vụ: {{$value->dichvu->thoigian}} tháng
                                                  <br>Giá dịch vụ: {{number_format($value->dichvu->gia)}} vnđ
                                                </div>
                                              </div>
                                              <hr>
                                              <div class="text-center"><b>THÔNG TIN ĐĂNG KÝ</b></div>
                                              <div class="row">
                                                <div class="col-lg-8">
                                                  Ngày đăng ký: {{date("d-m-Y",strtotime($value->ngaydangky))}}
                                                  <br>Số lượng: {{$value->soluong}}
                                                </div>
                                                <div class="col-lg-4">
                                                  Ngày kết thúc: {{date("d-m-Y",strtotime($value->ngayketthuc))}}
                                                  <br>Giá thành tiền: {{number_format($value->thanhtien)}} vnđ
                                                </div>
                                              </div>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                              <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                                              <a type="submit" href="{{ route('dangkydichvu.in',$value->id) }}" class="btn btn-outline-success"><i class="fas fa-print"></i> Export Portal</a>
                                            </div>
                                          </div>
                                          <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                      </div>
                                    </form> 
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
