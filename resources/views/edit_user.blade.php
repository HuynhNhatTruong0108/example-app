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
                    <a href="{{route('taikhoan.index')}}" class="btn btn-primary float-end">Danh sách tài khoản</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="card-body">
            <form action="{{route('taikhoan.update', $taikhoan->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="form-group col-md-6">
                        <div class="form-group col-md-3">
                            <strong>Mã tài khoản:</strong>
                        </div>
                        <div class="form-group col-md-9">
                            <input type="text" name="id" value="{{$taikhoan->id}}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="form-group col-md-3">
                            <strong>Họ tên:</strong>
                        </div>
                        <div class="form-group col-md-9">
                            <input type="text" name="name" value="{{$taikhoan->name}}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="form-group col-md-3">
                            <strong>Email:</strong>
                        </div>
                        <div class="form-group col-md-9">
                            <input type="text" name="email" value="{{$taikhoan->email}}" class="form-control">

                        </div>

                    </div>
                    <div class="form-group col-md-6">
                        <div class="form-group col-md-3">
                            <strong>Quyền:</strong>
                        </div>
                        <div class="form-group col-md-9">
                            <select name="quyen" class="form-control">
                
                                <option value="USR" {{$taikhoan->quyen== "USR" ? 'selected' : ''}}>USR</option>
                                <option value="GV" {{$taikhoan->quyen== "GV" ? 'selected' : ''}}>GV</option>
                                <option value="ADM" {{$taikhoan->quyen== "ADM" ? 'selected' : ''}}>ADM</option>
                            </select>
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