@extends('quanly_layout')
@section('quanly_content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10" style="color:blue">
                        <h3>Thêm giảng viên</h3>
                    </div>
                    <div class="coi-md-2">
                    <a href="{{route('giangvien.index')}}" class="btn btn-primary float-end">Danh sách giảng viên</a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
                <form action="{{route('giangvien.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <div class="form-group col-md-3">
                            <strong>Mã giảng viên</strong>
                            </div>
                            <div class="form-group col-md-9">
                            <input type="text" name="magv" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-group col-md-3">
                            <strong>Tên giảng viên</strong>
                            </div>
                            <div class="form-group col-md-9">
                            <input type="text" name="tengv" class="form-control" >
                            </div>
                           
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-group col-md-3">
                            <strong>Mã bộ môn</strong>
                            </div>
                            <div class="form-group col-md-9">
                            <select name="mabm" class="form-control">
                                <option>Chọn</option>
                                <option value="6661">6661</option>
                                <option value="6662">6662</option>
                                <option value="6663">6663</option>
                            </select>
                            </div>
                            
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-group col-md-3">
                            <strong>Khoa</strong>
                            </div>
                            <div class="form-group col-md-9">
                            <input type="text" name="khoa" class="form-control" value="Công nghệ thông tin">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-group col-md-3">
                            <strong>Điện thoại</strong>
                            </div>
                            <div class="form-group col-md-9">
                            <input type="text" name="sdt" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-group col-md-3">
                            <strong>Email </strong>
                            </div>
                            <div class="form-group col-md-9">
                            <input type="text" name="email" class="form-control" >
                            </div>
                           
                        </div>
                       
                        <div class="col-md-12">
                        <button type="submit" class="btn btn-success mt-2">Lưu</button>
                        </div>
                  
                    </div>
                </form> 
            </div>
        </div>
    </div>


@endsection	