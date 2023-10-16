@extends('quanly_layout')
@section('quanly_content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-10" style="color:blue">
                    <h3>Cập nhật tài khoản sinh viên</h3>
                </div>
                <div class="col-md-2">
                    <a href="{{route('thoihan.index')}}" class="btn btn-primary float-end">Quay lại</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="card-body">
            <form action="{{route('thoihan.update', $thoihan->math)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                     <!-- <div class="form-group col-md-12">
                        <div class="form-group col-md-3">
                            <strong>Ngày bắt đầu đăng ký:</strong>
                        </div>
                        <div class="form-group col-md-9">
                            <input type="date" name="ngaybddk" value="{{$thoihan->math}}" class="form-control">
                        </div>
                    </div> -->
                    <div class="form-group col-md-12">
                        <div class="form-group col-md-3">
                            <strong>Ngày bắt đầu đăng ký:</strong>
                        </div>
                        <div class="form-group col-md-9">
                            <input type="datetime-local" name="ngaybddk" value="{{($thoihan->ngaybddk)}}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <div class="form-group col-md-3">
                            <strong>Ngày kết thúc đăng ký:</strong>
                        </div>
                        <div class="form-group col-md-9">
                            <input type="datetime-local" name="ngayktdk" value="{{$thoihan->ngayktdk}}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <div class="form-group col-md-3">
                            <strong>Ngày bắt đầu đề xuất</strong>
                        </div>
                        <div class="form-group col-md-9">
                            <input type="datetime-local" name="ngaybddx" value="{{$thoihan->ngaybddx}}" class="form-control">

                        </div>

                    </div>
                    <div class="form-group col-md-12">
                        <div class="form-group col-md-3">
                            <strong>Ngày kết thúc đề xuất</strong>
                        </div>
                        <div class="form-group col-md-9">
                            <input type="datetime-local" name="ngayktdx" value="{{$thoihan->ngayktdx}}" class="form-control">
                        </div>

                    </div>
              



                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success mt-2">Cập nhật</button>
                </div>




        </div>
        </form>
    </div>
</div>
</div>


@endsection