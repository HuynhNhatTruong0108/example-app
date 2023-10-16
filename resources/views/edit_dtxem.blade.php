@extends('trangdangky')
@section('trangdangky_content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="form-group col-md-10" style="color:blue">
                    <h3>Chi tiết đề tài</h3>
                </div>
                <div class="form-group col-md-2">
                    <a href="{{route('detai1.index')}}" class="btn btn-primary float-end">Danh sách đề tài</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="card-body">
            <form action="{{route('detai1.update', $detai1->madt)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">

                    <!-- <div class="form-group col-md-4">
                        <div class="form-group col-md-4">
                            <strong>Mã đề tài</strong>
                        </div>
                        <div class="form-group col-md-8">
                            <input type="text" name="madt" value="{{$detai1->madt}}" class="form-control">
                        </div>

                    </div>
                    <div class="form-group col-md-4">
                        <div class="form-group col-md-4">
                            <strong>Tên đề tài</strong>
                        </div>
                        <div class="form-group col-md-8">
                            <input type="text" name="tendt" value="{{$detai1->tendt}}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <div class="form-group col-md-4">
                            <strong>Mã đề xuất</strong>
                        </div>
                        <div class="form-group col-md-8">
                            <input type="text" name="lop" value="{{$detai1->madx}}" class="form-control">
                        </div>
                    </div> -->
                    
                    <div class="form-group col-md-6">
                        <div class="form-group col-md-3">
                            <strong>Giảng viên:</strong>
                        </div>
                        <div class="form-group col-md-9">
                        {{$detai1->dexuat->User_phieudexuat->name}}
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="form-group col-md-3">
                            <strong>Email:</strong>
                        </div>
                        <div class="form-group col-md-9">
                        {{$detai1->dexuat->User_phieudexuat->email}}
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="form-group col-md-3">
                            <strong>Tên đề tài:</strong>
                        </div>
                        <div class="form-group col-md-9">
                            {{$detai1->tendt}}
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="form-group col-md-3">
                            <strong>Mã đề xuất:</strong>
                        </div>
                        <div class="form-group col-md-9">
                            {{$detai1->madx}}
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="form-group col-md-3">
                            <strong>Năm:</strong>
                        </div>
                        <div class="form-group col-md-9">
                            {{$detai1->namhoc}}
                        </div>
                    </div>
                    <hr>
                    <div class="form-group col-md-12">
                        <div class="form-group col-md-3">
                            <strong>Mục tiêu:</strong>
                        </div>
                        <div class="form-group col-md-9">
                            {!!$detai1->dexuat->muctieu!!}
                        </div>
                    </div>
                    <hr>
                    <div class="form-group col-md-12">
                        <div class="form-group col-md-3">
                            <strong>Yêu cầu:</strong>
                        </div>
                        <div class="form-group col-md-9">
                            {!!$detai1->dexuat->yeucau!!}
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <div class="form-group col-md-3">
                            <strong>Tài liệu tham khảo:</strong>
                        </div>
                        <div class="form-group col-md-9">
                            {!!$detai1->dexuat->tailieutk!!}
                        </div>
                    </div>

                    <!-- <div class="form-group col-md-4">
                        <div class="form-group col-md-4">
                            <strong>Trạng thái<i></i></strong>
                        </div>
                        <div class="form-group col-md-8">
                            <select name="trangthai" class="form-control">
                              
                                <option value="đăng" {{$detai1->trangthai== "đăng" ? 'selected' : ''}}>đăng</option>
                                <option value="chưa" {{$detai1->trangthai== "chưa" ? 'selected' : ''}}>chưa</option>
                                <option value="khóa" {{$detai1->trangthai== "khóa" ? 'selected' : ''}}>khóa</option>

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