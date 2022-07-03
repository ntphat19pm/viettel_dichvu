@extends('layouts.app')

@section('content')

<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-lg-11">
            <h3 class="card-title">
              <i class="fas fa-chart-bar mr-1"></i>
              DANH SÁCH ĐĂNG KÝ DỊCH VỤ
            </h3>
          </div>
          <div class="card-tools">
            <button class="btn btn-tool" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
      </div>
     
      <div class="" id="collapseExample">
        <div class="card-body">
          <table id ="zero_config" class="table table-hover mt-4">
            <thead>
                <tr>
                    <th width="5">#</th>
                    <th width="15" class="text-center">Mã số thuế</th>
                    <th width="15" class="text-center">Tên doanh nghiệp</th>
                    <th width="15" class="text-center">Tên dịch vụ</th>
                    <th width="15" class="text-center">Ngày đăng ký</th>
                    <th width="15" class="text-center">Trạng thái</th>
                    <th width="5" class="text-center">Xem chi tiết</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dangkydichvu as $value)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td class="text-center">{{$value->doanhnghiep->mst}}</td>
                    <td class="text-center">{{$value->doanhnghiep->tendoanhnghiep}}</td>
                    <td class="text-center">{{$value->dichvu->tendv}}</td>
                    <td class="text-center">{{date("d-m-Y H:m:s",strtotime($value->ngaydangky))}}</td>
                    <td class="text-center">
                        <?php
                        $today = date("Y-m-d",strtotime($ngay));
                        $another_date = date("Y-m-d",strtotime($value->ngaybao));
                        if (strtotime($today) > strtotime($another_date)) {
                        echo "<i style='color: red'>Sắp hết hạn</i>";
                        } else {
                        echo "<i style='color:rgb(8, 253, 0)'>Còn hạn</i>";
                        }
                        ?>
                    </td>
                    <td class="text-center">
                        <a data-toggle="modal" data-target="#modal-secondary{{$value->id}}" href="#nhap"> <i class="fas fa-eye text-warning"></i></a>
                    </td>
                      <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal fade" id="modal-secondary{{$value->id}}">
                          <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">THÔNG TIN ĐĂNG KÝ</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <div class="text-center"><b>THÔNG TIN DOANH NGHIỆP</b></div>
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
                                <div class="text-center"><b>THÔNG TIN ĐĂNG KÝ DỊCH VỤ</b></div>
                                <div class="row">
                                  <div class="col-lg-8">
                                    Ngày đăng ký: {{date("d-m-Y",strtotime($value->ngaydangky))}}
                                    <br>Số lượng: {{$value->soluong}} user
                                  </div>
                                  <div class="col-lg-4">
                                    Ngày kết thúc: {{date("d-m-Y",strtotime($value->ngayketthuc))}}
                                    <br>Giá thành tiền: {{number_format($value->thanhtien)}} vnđ
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
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

{{-- <div class="container-fluid pt-4 px-4">
    <table id ="zero_config" class="table table-hover mt-4">
        <thead>
            <tr>
                <th width="5">#</th>
                <th width="15" class="text-center">Tên doanh nghiệp</th>
                <th width="15" class="text-center">Tên dịch vụ</th>
                <th width="15" class="text-center">Ngày đăng ký</th>
                <th width="15" class="text-center">Trạng thái</th>
                <th width="5" class="text-center">Xem chi tiết</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dangkydichvu as $value)
            <tr>
                <th>{{ $loop->iteration }}</th>
                <td class="text-center">{{$value->doanhnghiep->tendoanhnghiep}}</td>
                <td class="text-center">{{$value->dichvu->tendv}}</td>
                <td class="text-center">{{date("d-m-Y H:m:s",strtotime($value->ngaydangky))}}</td>
                <td class="text-center">
                    <?php
                    $today = date("Y-m-d",strtotime($ngay));
                    $another_date = date("Y-m-d",strtotime($value->ngaybao));
                    if (strtotime($today) > strtotime($another_date)) {
                    echo "<i style='color: red'>Sắp hết hạn</i>";
                    } else {
                    echo "<i style='color:rgb(8, 253, 0)'>Còn hạn</i>";
                    }
                    ?>
                </td>
                <td class="text-center">
                    <a data-toggle="modal" data-target="#modal-secondary{{$value->id}}" href="#nhap"> <i class="fas fa-eye text-warning"></i></a>
                </td>
                  <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal fade" id="modal-secondary{{$value->id}}">
                      <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">THÔNG TIN ĐĂNG KÝ</h4>
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
                            <button type="submit" class="btn btn-outline-success">Upload file Excel</button>
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
</div> --}}
@endsection