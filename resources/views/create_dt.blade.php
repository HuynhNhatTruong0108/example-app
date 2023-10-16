@extends('quanly_layout')
@section('quanly_content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10" style="color:blue">
                        <h3>Thêm đề tài</h3>
                    </div>
                    <div class="col-md-2">
                    <a href="{{route('detai.index')}}" class="btn btn-primary float-end">Danh sách đề tài</a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="card-body">
                <form action="{{route('detai.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-4">
                            <div class="form-group col-md-4">
                            <strong>Mã đề tài</strong>
                            </div>
                            <div class="form-group col-md-8">
                            <input type="text" name="madt" class="form-control" >

                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <div class="form-group col-md-4">
                            <strong>Tên đề tài</strong>
                            </div>
                            <div class="form-group col-md-8">
                            <input type="text" name="tendt" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <div class="form-group col-md-4">
                            <strong>Mã đề xuất</strong>
                            </div>
                            <div class="form-group col-md-8">
                            <input type="text"  name="madx" class="form-control" >
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