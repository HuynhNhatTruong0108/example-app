@extends('quanly_layout')
@section('quanly_content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-10" style="color:blue">
                    <h3>Chi tiết</h3>
                </div>
                <div class="col-md-2">
                <a href="{{route('phieudexuatad.index')}}" class="btn btn-primary float-end">Danh sách đề xuất</a>

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
            <table class="table table-bodered">
                <thead>
                    <tr>

                        <!-- <th>Mã giảng viên</th>  -->
                        <th>STT</th>
                        <th>Mã đề xuất</th>

                        <th>Mục tiêu</th>
                        <th>Yêu cầu</th>
                        <th>Tài liệu t.khảo</th>
                        <th>Nội dung khác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($chitiet_dt as $dx1)
                    <tr>
                       
                        <!-- <td>{{$dx1->magv}}</td>  -->
                        <td>{{++$i}}</td>
                        <td>{{$dx1->madx}}</td>

                        <td> {!!$dx1->muctieu!!}</td>
                        <td> {!!$dx1->yeucau!!}</td>
                        <td> {!!$dx1->tailieutk!!}</td>
                        <td> {!!$dx1->noidungkhac!!}</td>

                        <td>


                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{$chitiet_dt->links()}}
    </div>
</div>
@endsection