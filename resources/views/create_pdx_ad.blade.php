@extends('quanly_layout')
@section('quanly_content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10" style="color:blue">
                        <h3>Thêm đề xuất</h3>
                    </div>
                    <div class="col-md-2">
                    <a href="{{route('phieudexuatad.index')}}" class="btn btn-primary float-end">Danh sách đề xuất</a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="card-body">
                <form action="{{route('phieudexuatad.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <div class="form-group col-md-3">
                            <strong>Mã đề xuất</strong>
                            </div>
                            <div class="form-group col-md-9">
                            <input type="text" name="madx" class="form-control" >
                            
                      
                            </div>
                        </div>
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
                            <strong>Ngày duyệt </strong>
                            </div>
                            <div class="form-group col-md-9">
                            <input type="date" name="ngayduyet" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <div class="form-group col-md-3">
                            <strong>Nội dung</strong>
                            </div>
                            <div class="form-group col-md-9">
                            <textarea class="ckeditor" id="ckdetor1" class="form-control" id="exampleFormControlTextarea1" rows="3" name="noidung"></textarea>

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