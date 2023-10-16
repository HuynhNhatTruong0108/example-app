@extends('quanly_layout')
@section('quanly_content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-10" style="color:blue">
                    <h3>Cập nhật sinh viên</h3>
                </div>
                <div class="coi-md-2">
                    <a href="{{route('sinhvien.index')}}" class="btn btn-primary float-end">Danh sách sinh viên</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('sinhvien.update', $sinhvien->masv)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <!-- <div class="form-group col-md-6" >
                            <strong>Mã sinh viên</strong>
                            <input type="text" name="masv" value="{{$sinhvien->masv}}" class="form-control" placeholder="Nhập mã sinh viên">
                        </div> -->
                    <div class="form-group col-md-6">
                        <div class="form-group col-md-3">
                            <strong>Tên sinh viên</strong>
                        </div>
                        <div class="form-group col-md-9">
                            <input type="text" name="tensv" value="{{$sinhvien->tensv}}" class="form-control" placeholder="Nhập tên sinh viên">
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <div class="form-group col-md-3">
                            <strong>Giới tính</strong>
                        </div>
                        <div class="form-group col-md-9">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gioitinh" id="exampleRadios1" value="Nam" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    ___Nam
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gioitinh" id="exampleRadios2" value="Nữ  ">
                                <label class="form-check-label" for="exampleRadios2">
                                    ___Nữ
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <div class="form-group col-md-3">
                            <strong>Ngày sinh</strong>
                        </div>
                        <div class="form-group col-md-9">
                            <input type="date" name="ngaysinh" value="{{$sinhvien->ngaysinh}}" class="form-control" placeholder="Nhập ngày sinh">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="form-group col-md-3">
                            <strong>Lớp</strong>
                        </div>
                        <div class="form-group col-md-9">
                            <select name="lop" class="form-control">
                                <option>Chọn lớp</option>
                                <!-- <option value="61.CNTT-3">61.CNTT-3</option>
                                <option value="61.CNTT-2">61.CNTT-2</option>
                                <option value="61.CNTT-1">61.CNTT-1</option> -->
                                <option value="61.CNTT-3" {{$sinhvien->lop== "61.CNTT-3" ? 'selected' : ''}}>61.CNTT-3</option>
                                <option value="61.CNTT-2" {{$sinhvien->lop== "61.CNTT-2" ? 'selected' : ''}}>61.CNTT-2</option>
                                <option value="61.CNTT-1" {{$sinhvien->lop== "61.CNTT-1" ? 'selected' : ''}}>61.CNTT-1</option>
                            </select>

                        </div>

                    </div>


                    <div class="form-group col-md-6">
                        <div class="form-group col-md-3">
                            <strong>Email</strong>
                        </div>
                        <div class="form-group col-md-9">
                            <input type="text" name="email" value="{{$sinhvien->email}}" class="form-control" placeholder="Nhập email">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="form-group col-md-3">
                            <strong>Điện thoại</strong>
                        </div>
                        <div class="form-group col-md-9">
                            <input type="text" name="sdt" value="{{$sinhvien->sdt}}" class="form-control" placeholder="Nhập điện thoại">
                        </div>

                    </div>



                    <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-success mt-2">Cập nhật</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>


@endsection