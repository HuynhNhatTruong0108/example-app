@extends('quanly_layout')
@section('quanly_content')



<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="form-group col-md-6" style="color:blue">
                    <h3>Quản lý tài khoản giảng viên</h3>
                </div>
            
                <div class="form-group  col-md-8">
                    <form action="" class="form-inline">
                        <div class="form-group">
                            <!-- <input class="form-control" name="tensv" placeholder="Search by name..."> -->
                        </div>

                        <!-- <button type="submit" class="btn btn-primary">Tìm kiếm</button> -->
                        <!-- <i class="fas fa-search"></i> -->
                    </form>

                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="form-group  col-md-4">
                <form action="" class="form-inline">
                    <div class="form-group">
                        <input class="form-control" n   ame="id" placeholder="Search by name...">
                    </div>

                    <button type="submit" class="btn btn-primary">Tìm mã</button>
                    <!-- <i class="fas fa-search"></i> -->
                </form>

            </div>
            <div class="form-group  col-md-4">
                <form action="" class="form-inline">
                    <div class="form-group">
                        <input class="form-control" name="name" placeholder="Search by name...">
                    </div>

                    <button type="submit" class="btn btn-primary">Tìm tên</button>
                    <!-- <i class="fas fa-search"></i> -->
                </form>

            </div>
            @if(Session::has('thongbao'))
            <div class="alert alert-success">
                {{Session::get('thongbao')}}
            </div>
            @endif
            <table class="table table-bodered  table-striped">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Mã tài khoản</th>
                        <th>Họ tên</th>
                        <th>Email</th>
                        <th>Quyền</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($taikhoan1 as $sv)
                    <tr>
                        <td style="width:100px">{{++$i}}</td>
                        <td>{{$sv->id}}</td>
                        <td>{{$sv->name}}</td>
                        <td>{{$sv->email}}</td>
                        <td>{{$sv->quyen}}</td>
                        <td>
                            <div class="form-group col-md-12">

                                <form action="{{route('taikhoan1.destroy', $sv->id)}}" method="POST" class="form-group col-md-5">
                                    <button type="submit" class="btn btn-danger" onclick="return myFunction();">Xóa</button>

                                    @csrf
                                    @method('DELETE')
                                </form>
                                <form action="">
                                    <a href="{{route('taikhoan1.edit', $sv)}}" class="btn btn-info" onclick="return myFunction();">Sửa</a class="form-group col-md-5">

                                </form>
                                <script>
                                    function myFunction() {
                                        if (!confirm("Bạn có chắc về thao tác này không ?"))
                                            event.preventDefault();
                                    }
                                </script>
                            </div>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- <a href="http://127.0.0.1:8000/excel-csv-file" class="btn btn-info">import</a> -->
            <br>
        </div>
        <br>
        {{$taikhoan1->appends(request()->all())->links()}}
    </div>

</div>
@endsection