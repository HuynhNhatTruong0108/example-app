@extends('quanly_layout')
@section('quanly_content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="form-group  col-md-4" style="color:blue">
                    <h3>Quản lý giảng viên</h3>
                </div>
                <div class="form-group  col-md-4">
                    <a href="{{route('giangvien.create')}}" class="btn btn-primary float-end ">Thêm mới</a>
                </div>
                <div class="form-group  col-md-4">
                    <form action="" class="form-inline">
                        <div class="form-group">
                            <input class="form-control" name="tengv" placeholder="Search by name...">
                        </div>

                        <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                        <!-- <i class="fas fa-search"></i> -->
                    </form>
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
                            <th>Mã giảng viên</th>
                            <th>Tên giảng viên</th>
                            <th>Bộ môn</th>
                            <!-- <th>Bộ môn</th>  -->
                            <!-- <th>Khoa</th> -->
                            <th>Số điện thoại</th>
                            <th>Email</th>
                        </tr>
                    </thead>  
                    <tbody>
                        @foreach ($giangvien as $gv)
                        <tr>
                            <td style="width:100px">{{++$i}}</td>
                            <td>{{$gv->magv}}</td>
                            <td>{{$gv->tengv}}</td>
                            <!-- <td>{{$gv->mabm}}</td>  -->
                            <td>{{$gv->bomon->tenbm}}</td>
                            <!-- <td>{{$gv->khoa}}</td> -->
                            <td>{{$gv->sdt}}</td>
                            <td>{{$gv->email}}</td>
                            <td>
                                <form action="{{route('giangvien.destroy', $gv->magv)}}" method="POST">
                                    <a href="{{route('giangvien.edit', $gv)}}" class="btn btn-info">Sửa</a>
                                    <button type="submit" class="btn btn-danger" onclick="return myFunction();">Xóa</button>

                                    @csrf
                                    @method('DELETE')
                                    <script>
                                        function myFunction() {
                                            if (!confirm("Bạn có chắc về thao tác này không ?"))
                                                event.preventDefault();
                                        }
                                    </script>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{$giangvien->links()}}
        </div>
    </div>
    @endsection