@extends('trangdexuat')
@section('trangdexuat_content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-10" style="color:blue">
                    <h3>Danh sách đề tài</h3>
                </div>
                
                <div class="col-md-2">
                    <a href="{{route('dexuat.create')}}" class="btn btn-primary float-end ">Đề xuất</a>
                </div>
            </div>
        </div>
        
        <div class="card-body">
        <div class="form-group  col-md-4">
                    <form action="" class="form-inline">
                        <div class="form-group">
                            <input class="form-control" name="tendt" placeholder="Search by name...">
                        </div>

                        <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                        <!-- <i class="fas fa-search"></i> -->
                    </form>

                </div>
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
                        <!-- <th>Mã đề xuất</th>  -->
                        <th>Loại đề tài</th>
                        <th>Năm học</th>
                        <th>Mã sinh viên</th>
                        <th>Sinh viên chọn</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($dexuat as $dt)
                    <tr>
                        <td style="width:100px">{{++$i}}</td>
                        <td>{{$dt->madt}}</td>
                        <td>{{$dt->tendt}}</td>
                        <!-- <td>{{$dt->madx}}</td>  -->
                        <!-- <td>{{$dt->maldt}}</td> -->
                        <td>{{$dt->loaidetai->tenldt}}</td>

                        <td>{{$dt->namhoc}}</td>
                        <td>{{$dt->DKy->id}}</td>
                        <td>{{$dt->DKy->name}}</td>

                        <td>
                            <form action="{{route('dexuat.destroy', $dt->madt)}}" method="POST">
                                <a href="{{route('dexuat.edit', $dt)}}" class="btn btn-info" onclick="return myFunction();">Chi tiết</a>
                                <!-- <button type="submit" class="btn btn-danger" onclick="return myFunction();">xóa</button> -->

                                @csrf
                                @method('DELETE')
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
        </div>
        {{$dexuat->links()}}
    </div>
</div>
@endsection