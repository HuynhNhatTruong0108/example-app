@extends('quanly_layout')
@section('quanly_content')



<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="form-group col-md-6" style="color:blue">
                    <h3>Thời hạn công việc</h3>
                </div>

                <div class="form-group  col-md-4">
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

            @if(Session::has('thongbao'))
            <div class="alert alert-success">
                {{Session::get('thongbao')}}
            </div>
            @endif
            <table class="table table-bodered  table-striped">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Ngày bắt đầu đăng ký</th>
                        <th>Ngày kết thúc đăng ký</th>
                        <th>Ngày bắt đầu đề xuất</th>
                        <th>Ngày kết thúc đề xuất</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($thoihan as $sv)
                    <tr>
                        <td style="width:100px">{{++$i}}</td>
                        <td>{{$sv->ngaybddk}}</td>
                        <td>{{$sv->ngayktdk}}</td>
                        <td>{{$sv->ngaybddx}}</td>
                        <td>{{$sv->ngayktdx}}</td>
                        <td>
                                <form action="">
                                    <a href="{{route('thoihan.edit', $sv)}}" class="btn btn-info"  onclick="return myFunction();">Sửa</a class="form-group col-md-5">

                                </form>
                                <script>
                                    function myFunction() {
                                        if (!confirm("Bạn có chắc về thao tác này không ?"))
                                            event.preventDefault();
                                    }
                                </script>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
        </div>
        <br>
        {{$thoihan->appends(request()->all())->links()}}
    </div>

</div>
@endsection