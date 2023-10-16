@extends('trangdexuat')
@section('trangdexuat_content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-10" style="color:blue">
                    <h3>Chi tiết đề xuất</h3>
                </div>
                <div class="col-md-2">
                <a href="{{route('phieudexuat.index')}}" class="btn btn-primary float-end">Danh sách đề xuất</a>

                </div>
            </div>
        </div>
        <div class="card-body">
            @if(Session::has('thongbao'))
            <div class="alert alert-success">
                {{Session::get('thongbao')}}
            </div>
            @endif
            <table class="table table-bodered">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Mã đề xuất</th>

                        <th>Mục tiêu</th>
                        <th>Yêu cầu</th>
                        <th>Tài liệu t.khảo</th>
                        <th>Nội dung khác</th>




                    </tr>
                </thead>
                <tbody>
                    @foreach ($chitietdx as $dx1)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$dx1->madx}}</td>

                        <td> {!!$dx1->muctieu!!}</td>
                        <td> {!!$dx1->yeucau!!}</td>
                        <td> {!!$dx1->tailieutk!!}</td>
                        <td> {!!$dx1->noidungkhac!!}</td>



                        <!-- { $content !!} -->

                        <td>




                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection