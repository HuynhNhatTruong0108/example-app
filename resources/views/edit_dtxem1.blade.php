@extends('trangdexuat')
@section('trangdexuat_content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="form-group col-md-10" style="color:blue">
                    <h3>Chi tiết đề tài</h3>
                </div>
                <div class="form-group col-md-2">
                    <a href="{{route('detai2.index')}}" class="btn btn-primary float-end">Danh sách đề tài</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="card-body">
            <form action="{{route('detai2.update', $detai2->madt)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">

                    <!-- <div class="form-group col-md-4">
                        <div class="form-group col-md-4">
                            <strong>Mã đề tài</strong>
                        </div>
                        <div class="form-group col-md-8">
                            <input type="text" name="madt" value="{{$detai2->madt}}" class="form-control">
                        </div>

                    </div>
                    <div class="form-group col-md-4">
                        <div class="form-group col-md-4">
                            <strong>Tên đề tài</strong>
                        </div>
                        <div class="form-group col-md-8">
                            <input type="text" name="tendt" value="{{$detai2->tendt}}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <div class="form-group col-md-4">
                            <strong>Mã đề xuất</strong>
                        </div>
                        <div class="form-group col-md-8">
                            <input type="text" name="lop" value="{{$detai2->madx}}" class="form-control">
                        </div>
                    </div> -->
                    
                    <div class="form-group col-md-6">
                        <div class="form-group col-md-3">
                            <strong>Giảng viên</strong>
                        </div>
                        <div class="form-group col-md-9">
                        {{$detai2->dexuat->User_phieudexuat->name}}
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="form-group col-md-3">
                            <strong>Email:</strong>
                        </div>
                        <div class="form-group col-md-9">
                        {{$detai2->dexuat->User_phieudexuat->email}}
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="form-group col-md-3">
                            <strong>Tên đề tài:</strong>
                        </div>
                        <div class="form-group col-md-9">
                            {{$detai2->tendt}}
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="form-group col-md-3">
                            <strong>Mã đề xuất:</strong>
                        </div>
                        <div class="form-group col-md-9">
                            {{$detai2->madx}}
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="form-group col-md-3">
                            <strong>Năm:</strong>
                        </div>
                        <div class="form-group col-md-9">
                            {{$detai2->namhoc}}
                        </div>
                    </div>
                    <hr>
                    <div class="form-group col-md-12">
                        <div class="form-group col-md-3">
                            <strong>Mục tiêu:</strong>
                        </div>
                        <div class="form-group col-md-9">
                            {!!$detai2->dexuat->muctieu!!}
                        </div>
                    </div>
                    <hr>
                    <div class="form-group col-md-12">
                        <div class="form-group col-md-3">
                            <strong>Yêu cầu:</strong>
                        </div>
                        <div class="form-group col-md-9">
                            {!!$detai2->dexuat->yeucau!!}
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <div class="form-group col-md-3">
                            <strong>Tài liệu tham khảo:</strong>
                        </div>
                        <div class="form-group col-md-9">
                            {!!$detai2->dexuat->tailieutk!!}
                        </div>
                    </div>

                    <!-- <div class="form-group col-md-4">
                        <div class="form-group col-md-4">
                            <strong>Trạng thái<i></i></strong>
                        </div>
                        <div class="form-group col-md-8">
                            <select name="trangthai" class="form-control">
                              
                                <option value="đăng" {{$detai2->trangthai== "đăng" ? 'selected' : ''}}>đăng</option>
                                <option value="chưa" {{$detai2->trangthai== "chưa" ? 'selected' : ''}}>chưa</option>
                                <option value="khóa" {{$detai2->trangthai== "khóa" ? 'selected' : ''}}>khóa</option>

                            </select>
                        </div>
                    </div> -->
                    <div class="form-group col-md-12">
                        <!-- <button type="submit" class="btn btn-success mt-2">Cập nhật</button> -->

                    </div>

                </div>
            </form>
        </div>
    </div>
</div>


@endsection