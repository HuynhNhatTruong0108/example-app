@extends('trangdangky')
@section('trangdangky_content')


<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="form-group col-md-4" style="color:blue">
                    <h3>Danh sách đã đăng ký</h3>
                </div>
                <div class="form-group col-md-8">
                <div class="card-body">
          

            </div>
        </div>
        <hr>
        <div class="card-body">
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
                    <button type="submit" class="btn btn-primary">Lọc</button>

                    </div>

                </div>
            @if(Session::has('thongbao'))
            <div class="alert alert-success">
                {{Session::get('thongbao')}}
            </div>
            @endif
            <table class="table table-bodered">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Mã đề tài</th>
                        <th>Tên đề tài</th>
                        <th>Loại đề tài</th>
                        <th>Năm học</th>
                        <th>Mã sinh viên</th>
                        <th>Sinh viên </th>
                        <th>Ngày đăng ký </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dangky as $dt)
                    <tr>
                        <td style="width:100px"> {{ $loop->iteration }}</td>
                        <td>{{$dt->madt}}</td>
                        <td>
                            {{$dt->tendt}}
                            <!-- <textarea name="" id="" cols="30" rows="4"></textarea> -->

                        </td>
                        <td>{{$dt->loaidetai->tenldt}}</td>
                        <td>{{$dt->namhoc}}</td>
                        <td>{{$dt->DKy->id}}</td>
                        <td>{{$dt->DKy->name}}</td>
                        <td>{{$dt->updated_at}}</td>
                        <td>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{$dangky->links()}}
    </div>
</div>
@endsection