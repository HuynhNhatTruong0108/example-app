@extends('quanly_layout')
@section('quanly_content')


<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="form-group col-md-8" style="color:blue">
                    <h3>Quản lý đề tài</h3>
                </div>
                <!-- <div class="form-group col-md-4">
                    <a href="{{route('detai.create')}}" class="btn btn-primary float-end ">Thêm mới</a>
                </div> -->
                <div class="form-group  col-md-4">
                    <form action="" class="form-inline">
                        <div class="form-group">
                            <input class="form-control" name="tendt" placeholder="Search by name...">
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
            <div class="form-group  col-md-12">
                <form action="" class="form-inline">
                    <div class="form-group  ">
                    <select name="namhoc" class="form-control">
                        <option value="" selected="selected">Năm học</option>
                        <option value="2021-2022">2021-2022</option>
                        <option value="2022-2023">2022-2023</option>
                        <option value="2023-2024">2023-2024</option>
                        <option value="2024-2025">2024-2025</option>
                        <option value="2025-2026">2025-2026</option>
                        <option value="2026-2027">2026-2027</option>
                        <option value="2027-2028">2027-2028</option>
                    </select>

                    </div>
                    <div class="form-group  col-md-3">
                    <select name="maldt" class="form-control">
                        <option value="100" selected="selected">Chọn loại thực tập</option>
                        <option value="100">Đồ án</option>
                        <option value="101">Chuyên đề </option>
                        <option value="102"> Thực tập cơ sở</option>
                        <option value="103">Thực tập chuyên ngành</option>
                    </select>
                    </div>
                    
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary">Lọc </button>

                    </div>

                    <!-- <i class="fas fa-search"></i> -->
                </form>

            </div>
            <table class="table table-bodered  table-striped">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Mã đề tài</th>
                        <th>Tên đề tài</th>
                        <!-- <th>Mã đề xuất</th> -->
                        <th>Loại đề</th>
                        <!-- <th>Năm học</th> -->
                        <th>Mã sinh viên</th>
                        <th>Sinh viên chọn</th>
                        <th>Trạng thái</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($detai as $dt)
                    <tr>
                        <td style="width:100px">{{++$i}}</td>
                        <td>{{$dt->madt}}</td>
                        <td>
                            <!-- <textarea name="" id="" cols="30" rows="4"></textarea> -->
                            {{$dt->tendt}}
                        </td>
                        <!-- <td>{{$dt->madx}}</td> -->
                        <!-- <td>{{$dt->maldt}}</td> -->
                        <td>{{$dt->loaidetai->tenldt}}</td>

                        <!-- <td>{{$dt->namhoc}}</td> -->
                        <!-- tam -->
                        <td>{{$dt->DKy->id}}</td>
                        <td>{{$dt->DKy->name}}</td> 
                        <td>{{$dt->trangthai}}</td> 
                        <td>
                            <form action="{{route('detai.destroy', $dt->madt)}}" method="POST">
                                <a href="{{route('detai.edit', $dt)}}" class="btn btn-info">Xem chi tiết - đăng</a>
                                <script>
                                function myFunction() {
                                    if (!confirm("Bạn có chắc về thao tác này không ?"))
                                        event.preventDefault();
                                }
                                </script>
                                @csrf
                                @method('DELETE')
                                <!-- <button type="submit" class="btn btn-danger">xóa</button> -->
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{$detai->appends(Request::except('page'))->links() }}
    </div>
</div>
@endsection