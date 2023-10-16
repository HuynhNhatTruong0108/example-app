@extends('trangdexuat')
@section('trangdexuat_content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="form-group  col-md-4" style="color:blue">
                    <h3>Thông tin cá nhân</h3>
                </div>
                <!-- <div class="form-group  col-md-4">
                    <a href="{{route('thongtincngv.create')}}" class="btn btn-primary float-end ">Thêm mới</a>
                </div> -->
                <!-- <div class="form-group  col-md-4">
                    <form action="" class="form-inline">
                        <div class="form-group">
                            <input class="form-control" name="tengv" placeholder="Search by name...">
                        </div>

                        <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                        <i class="fas fa-search"></i>
                    </form>
                </div> -->
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
                            <!-- <th>STT</th>
                            <th>Mã giảng viên</th>
                            <th>Tên giảng viên</th>
                            <th>Bộ môn</th>
                           
                            <th>Khoa</th>
                            <th>Số điện thoại</th>
                            <th>Email</th> -->
                        </tr>
                    </thead>  
                    <tbody>
                        @foreach ($thongtincngv as $gv)
                        <tr>

                            Mã: {{$gv->magv}}
                            <br>
                            Họ tên: {{$gv->tengv}}
                            <br>
                            <!-- <td>{{$gv->mabm}}</td>  -->
                            Bộ môn: {{$gv->bomon->tenbm}}
                            <br>
                            Khoa {{$gv->khoa}}
                            <br>
                            Số điện thoại: {{$gv->sdt}}
                            <br>
                            Email: {{$gv->email}}
                            <br>
                            <hr>

                            
                                <form action="" method="POST">
                                    <a href="{{route('thongtincngv.edit', $gv)}}" class="btn btn-info">Chỉnh sửa</a>
                                    <!-- <button type="submit" class="btn btn-danger" onclick="return myFunction();">xóa</button> -->

                                    @csrf
                                    @method('DELETE')
                                    <script>
                                        function myFunction() {
                                            if (!confirm("Bạn có chắc về thao tác này không ?"))
                                                event.preventDefault();
                                        }
                                    </script>
                                </form>
                      
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection