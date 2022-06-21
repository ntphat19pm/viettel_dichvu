@extends('layouts.app')

@section('content')
<div class="container-fluid pt-4 px-4">
    <table id ="zero_config" class="table table-hover mt-4">
        <thead>
            <tr>
                <th width="5">#</th>
                <th width="15" class="text-center">Tên doanh nghiệp</th>
                <th width="15" class="text-center">Tên dịch vụ</th>
                <th width="15" class="text-center">Ngày đăng ký</th>
                <th width="15" class="text-center">Trạng thái</th>
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
                    <a href="{{ route('dangkydichvu.edit', ['id' => $value->id]) }}"><i class="fa fa-edit"></i></a>
                    <a href="{{ route('dangkydichvu.destroy', ['id' => $value->id]) }}" onclick="return confirm('Bạn có muốn xóa lĩnh vực không?')"><i class="fa fa-trash-alt text-danger"></i></a>
                </td> 
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection