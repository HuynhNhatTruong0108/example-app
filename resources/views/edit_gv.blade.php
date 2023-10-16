@extends('quanly_layout')
@section('quanly_content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10" style="color:blue">
                        <h3>Cập nhật giảng viên</h3>
                    </div>
                    <div class="col-md-2">
                    <a href="{{route('giangvien.index')}}" class="btn btn-primary float-end">Danh sách sinh viên</a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="card-body">
                <form action="{{route('giangvien.update', $giangvien->magv)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="form-group col-md-6">
                            <div class="form-group col-md-3">
                            <strong>Mã giảng viên</strong>
                            </div>
                            <div class="form-group col-md-9">
                            <input type="text" name="magv" value="{{$giangvien->magv}}" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-group col-md-3">
                            <strong>Tên giảng viên</strong>
                            </div>
                            <div class="form-group col-md-9">
                            <input type="text" name="tengv" value="{{$giangvien->tengv}}" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-group col-md-3">
                            <strong>Mã bộ môn</strong>
                            </div>
                            <div class="form-group col-md-9">
                            <select name="mabm" class="form-control">
                                <option>Chọn bộ môn</option>
                                <option value="6661"{{$giangvien->mabm== "6661" ? 'selected' : ''}}>6661</option>
                                <option value="6662"{{$giangvien->mabm== "6662" ? 'selected' : ''}}>6662</option>
                                <option value="6663"{{$giangvien->mabm== "6663" ? 'selected' : ''}}>6663</option>
                                
                            </select>      
                            </div>
                                              
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-group col-md-3">
                            <strong>Khoa</strong>
                            </div>
                            <div class="form-group col-md-9">
                            <input type="text" name="khoa" value="{{$giangvien->khoa}}" class="form-control" >

                            </div>
                            
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-group col-md-3">
                            <strong>Điện thoại</strong>
                            </div>
                            <div class="form-group col-md-9">
                            <input type="text" name="sdt" value="{{$giangvien->sdt}}" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-group col-md-3">
                            <strong>Email </strong>
                            </div>
                            
                            <div class="form-group col-md-9">
                            <input type="text" name="email" value="{{$giangvien->email}}" class="form-control" >
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