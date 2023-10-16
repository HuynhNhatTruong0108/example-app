@extends('quanly_layout')
@section('quanly_content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-10" style="color:blue">
                    <h3>Danh sách phiếu đề xuất</h3>
                </div>
                <div class="col-md-2">
                    <!-- <a href="{{route('phieudexuatad.create')}}" class="btn btn-primary float-end ">Thêm mới</a> -->
                </div>
            </div>
        </div>
        <hr>
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
            <table class="table table-bodered">
                <thead>
                    <tr>
                        <th style="width:100px">STT</th>
                        <th style="width:100px">Mã đề xuất</th>
                        <!-- <th style="width:300px">Mã giảng viên</th> -->
                        <th>Tên giảng viên</th>
                        <th>Ngày đề xuất</th>
                        <th>Ngày duyệt</th>
                        <!-- <th>Mục tiêu</th> 
                            <th>Yêu cầu</th> 
                            <th>Tài liệu t.khảo</th> 
                            <th>Nội dung khác</th>  -->
                        <th>Loại</th>
                        <th>Năm</th>
                        <th>Tình trạng</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($phieudexuatad as $dx1)
                    <tr>
                        <td style="width:100px">{{++$i}}</td>
                        <td style="width:150px">{{$dx1->madx}}</td>
                        <!-- <td style="width:200px">{{$dx1->magv}}</td> -->
                        <td>{{$dx1->User_phieudexuat->name}}</td>
                        <td>{{$dx1->created_at}}</td>
                        <td>{{$dx1->ngayduyet}}</td>
                        <!-- <td> {!!$dx1->muctieu!!}</td>
                                <td> {!!$dx1->yeucau!!}</td>
                                <td> {!!$dx1->tailieutk!!}</td>
                                <td> {!!$dx1->noidungkhac!!}</td> -->
                        <td>{{$dx1->loaidetai1->tenldt}}</td>
                        <td>{{$dx1->namhoc}}</td>
                        <td> {{$dx1->tinhtrang}}</td>


                        <td>
                            <form action="{{route('phieudexuatad.destroy', $dx1->madx)}}" method="POST" class="form-group col-md-5">
                            <button type="submit" class="btn btn-danger" onclick="return myFunction();">Xóa</button>

                                @csrf
                                @method('DELETE')

                            </form>
                            <script>
                                function myFunction() {
                                    if (!confirm("Bạn có chắc về thao tác này không ?"))
                                        event.preventDefault();
                                }
                            </script>
                            <form action="" class="form-group col-md-5">
                                <a href="{{route('phieudexuatad.edit', $dx1)}}" class="btn btn-info">Xem</a>
                            </form>
                            <!-- <form action="" class="form-group col-md-12">
                                <a href="{{route('phieudexuatad.show', $dx1)}}" class="btn btn-info">chi tiết</a>
                            </form> -->
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{$phieudexuatad->appends(Request::except('page'))->links() }}
    </div>
</div>
@endsection