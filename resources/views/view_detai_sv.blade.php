@extends('trangdangky')
@section('trangdangky_content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="form-group col-md-5" style="color:blue">
                    <h3 >Danh sách đề tài thực tập</h3>
                </div>
                <!-- <div class="form-group col-md-3">
                    <a href="http://127.0.0.1:8000/chitiet_dt_sv" class="btn btn-primary float-end">Chi tiết</a>
                </div> -->
                <div class="form-group col-md-4">
                    <form action="" class="form-inline">
                        <div class="form-group">
                            <input class="form-control" name="tendt" placeholder="Search by name...">
                        </div>

                        <button type="submit" class="btn btn-primary">Tìm</button>
                        <!-- <i class="fas fa-search"></i> -->
                    </form>
                </div>

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

            </div>
        </div>
        <div class="card-body">
            @if(Session::has('thongbao'))
            <div class="alert alert-success">
                {{Session::get('thongbao')}}
            </div>
            @endif
        
            Ngày bắt đầu:
            @foreach ($thoihan as $th)
            {{ $th->ngaybddk }}
            @endforeach
            <br>
            Ngày kết thúc:
            @foreach ($thoihan as $th)
            {{ $th->ngayktdk }}
            @endforeach

            <table class="table table-bodered table-hover  table-striped">
                <thead>
                    <tr>
                        <th>STT</th>
                        <!-- <th>Mã đề xuất</th> -->
                        <!-- <th>Mã đề tài</th> -->
                        <th>Tên đề tài</th>
                        <th>Loại đề tài</th>
                        <!-- <th>Năm học</th> -->
                        <th>Mã sinh viên</th>
                        <th>Sinh viên </th>
                        <!-- <th>Tên đề tài</th> -->

                        <!-- <th>Ngày đăng ký </th> -->


                        <!-- <th>Mã đề xuất</th> -->

                    </tr>
                </thead>
                <tbody>
                    @foreach ($detaisv as $dt)
                    <tr>

                        <td style="width:100px"> {{ ++$i }}</td>
                        <!-- <td>{{$dt->madt}}</td>
                        <td>{{$dt->madx}}</td> -->
                        <td>
                            {{$dt->tendt}}
                            <!-- <textarea name="" id="" cols="30" rows="4"></textarea> -->

                        </td>
                        <!-- <td>{{$dt->maldt}}</td> -->
                        <td style="width:150px">{{$dt->loaidetai->tenldt}}</td>

                        <!-- <td>{{$dt->namhoc}}</td> -->
                        <td>{{$dt->DKy->id}}</td>
                        <td>{{$dt->DKy->name}}</td>
                        <!-- <td>{{$dt->dexuat->muctieu}}</td> -->
                        <!-- <td>{{$dt->DKy->updated_at}}</td>  -->
                        <!-- <td>{{$dt->madx}}</td>  -->
                        <td>
                            <div class="form-group col-md-12">
                                <form action="{{route('detaisv.update', $dt->madt)}}" method="POST" class="form-group col-md-4">
                                    @method('PUT')
                                    @csrf
                                    <button class="btn btn-info float-end ">Chọn</button>

                                </form>
                                <form action="{{route('detaisv.destroy', $dt->madt)}}" method="POST" class="form-group col-md-4">
                                    <button class="btn btn-danger float-end " onclick="return myFunction();">Hủy </button>

                                    @method('DELETE')
                                    @csrf

                                </form>
                                <form class=" form-group col-md-4">
                                    <a href="{{route('detaisv.edit', $dt)}}" class="btn btn-primary float-end">Chi tiết</a>

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
        </div>
        {{$detaisv->appends(Request::except('page'))->links() }}



    </div>
</div>
@endsection