@extends('quanly_layout')
@section('quanly_content')



<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="form-group col-md-4" style="color:blue">
                    <h3>Quản lý sinh viên</h3>
                </div>
                <div class="form-group col-md-4">
                    <a href="{{route('sinhvien.create')}}" class="btn btn-primary float-end ">Thêm mới</a>
                </div>
                <div class="form-group  col-md-4">
                    <form action="" class="form-inline">
                        <div class="form-group">
                            <input class="form-control" name="tensv" placeholder="Search by name...">
                        </div>

                        <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                        <!-- <i class="fas fa-search"></i> -->
                    </form>

                </div>
            </div>
        </div>
        <div class="card-body">
            @if(Session::has('thongbao'))
            <div class="alert alert-success">
                {{Session::get('thongbao')}}
            </div>
            @endif
            <table class="table table-bodered  table-striped">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Mã sinh viên</th>
                        <th>Tên sinh viên</th>
                        <th>Lớp</th>
                        <th>Giới tính</th>
                        <th>Ngày sinh</th>
                        <th>Email</th>
                        <th>Điện thoại</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sinhvien as $sv)
                    <tr>
                        <td style="width:100px">{{++$i}}</td>
                        <td>{{$sv->masv}}</td>
                        <td style="width:700px">{{$sv->tensv}}</td>
                        <td>{{$sv->lop}}</td>
                        <td>{{$sv->gioitinh}}</td>
                        <td>{{$sv->ngaysinh}}</td>
                        <td>{{$sv->email}}</td>
                        <td>{{$sv->sdt}}</td>
                        <td>
                            <div class="form-group col-md-12">
                                <form action="{{route('sinhvien.destroy', $sv->masv)}}" method="POST" class="form-group col-md-6">
                                    <!-- <a href="{{route('sinhvien.edit', $sv)}}" class="btn btn-info">sửa</a  class="form-group col-md-6"> -->
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return myFunction();">Xóa</button>
                                </form>
                                <form action="{{route('sinhvien.destroy', $sv->masv)}}" method="POST" class="form-group col-md-6">
                                    <a href="{{route('sinhvien.edit', $sv)}}" class="btn btn-info" onclick="return myFunction();">Sửa</a>
                                    <script>
                                        function myFunction() {
                                            if (!confirm("Bạn có chắc về thao tác này không ?"))
                                                event.preventDefault();
                                        }
                                    </script>
                                    @csrf
                                </form>
                            </div>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="http://127.0.0.1:8000/excel-csv-file" class="btn btn-info">import</a>
            <br>
        </div>
        <br>
        {{$sinhvien->appends(request()->all())->links()}}
    </div>

</div>
@endsection