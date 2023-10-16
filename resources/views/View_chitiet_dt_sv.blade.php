@extends('trangdangky')
@section('trangdangky_content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-8" style="color:blue">
                    <h3>Chi tiết</h3>
                </div>
                <div class="col-md-4">
                    <form action="" class="form-inline">
                        <!-- <div class="form-group">
                            <input class="form-control" name="madx" placeholder="Search by name...">
                        </div> -->
                      
                        <a href="{{route('chitiet_dt.index')}}" class="btn btn-primary float-end">Danh sách đề tài</a>
           
                        <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                        <!-- <i class="fas fa-search"></i> -->
                    </form>
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
                        <td>{{++$i}}</td>
                        <td>{{$dx1->madx}}</td>

                        <td> {!!$dx1->muctieu!!}</td>
                        <td> {!!$dx1->yeucau!!}</td>
                        <td> {!!$dx1->tailieutk!!}</td>
                        <td> {!!$dx1->noidungkhac!!}</td>


                        <td>
                            <form action="" method="POST" class="form-group col-md-5">

                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Xóa</button>
                            </form>
                            <form action="" class="form-group col-md-5">
                            </form>

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