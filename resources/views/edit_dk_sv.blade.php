
@extends('trangdangky')
@section('trangdangky_content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="form-group col-md-10" style="color:blue">
                        <h3>Cập nhật </h3>
                    </div>
                    <div class="form-group col-md-2">
                    <a href="{{route('dangky.index')}}" class="btn btn-primary float-end">Danh sách </a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="card-body">
                <form action="{{route('dangky.update', $dangky->madk)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="form-group col-md-4">
                            <div class="form-group col-md-4">
                            <strong>Mã đăng ký:</strong>
                            </div>
                            <div class="form-group col-md-8">
                            <input type="text" name="madk" value="{{$dangky->madk}}" class="form-control" >
                            </div>
                            
                        </div>
                        <div class="form-group col-md-4">
                            <div class="form-group col-md-4">
                            <strong>Mã sinh viên:</strong>
                            </div>
                            <div class="form-group col-md-8">
                            <input type="text" name="masv" value="{{$dangky->masv}}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <div class="form-group col-md-4">
                            <strong>Mã đề tài:</strong>
                            </div>
                            <div class="form-group col-md-8">
                            <input type="text" name="madt" value="{{$dangky->madt}}" class="form-control">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success mt-2">Đổi đề tài</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection	