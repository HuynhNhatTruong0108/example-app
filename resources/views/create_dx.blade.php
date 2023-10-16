@extends('trangdexuat')
@section('trangdexuat_content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10" style="color:blue">
                        <h3>Thêm đề tài</h3>
                    </div>
                    <div class="coi-md-2">
                    <a href="{{route('dexuat.index')}}" class="btn btn-primary float-end">Danh sách đề tài</a>
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
                <form action="{{route('dexuat.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <!-- <div class="form-group col-md-6">
                            <div class="form-group col-md-4">
                            <strong>Mã đề tài</strong>
                            </div>
                            <div class="form-group col-md-8">
                            <input type="text" name="madt" class="form-control" >
                            </div>
                        </div> -->
                       
                        <div class="form-group col-md-6">
                            <div class="form-group col-md-4">
                            <strong>Mã đề xuất</strong>
                            </div>
                            <div class="form-group col-md-8">
                            <input type="text" name="madx" class="form-control" >
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <div class="form-group col-md-4">
                            <strong>Mã loại đề tài</strong>
                            </div>
                            <div class="form-group col-md-8">
                            <select name="maldt" class="form-control">
                             
                                <option value="100">100-Đồ án</option>
                                <option value="101">101-Chuyên đề</option>
                                <option value="102">102-Thưc tập cơ sở</option>
                                <option value="103">103-Thực tập chuyên ngành</option>
                            </select>
                            </div>
                            
                        </div>

                        <div class="form-group col-md-12">
                            <div class="form-group col-md-2">
                            <strong>Tên đề tài</strong>
                            </div>
                            <div class="form-group col-md-8">
                            <input type="text" name="tendt" class="form-control" >
                            </div>
                        </div>
                     

                      

                        <div class="form-group col-md-6">
                            <div class="form-group col-md-4">
                            <strong>Năm học</strong>
                            </div>
                            <div class="form-group col-md-8">
                            <input type="text" value="2022-2023" name="namhoc" class="form-control" >
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <div class="form-group col-md-4">
                            <strong>Sinh viên chọn</strong>
                            </div>
                            <div class="form-group col-md-8">
                            <input type="bigint" value="0" name="user_id" class="form-control" >
                            </div>
                        </div>
                   
                        <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-success mt-2">Lưu</button>

                        </div>

                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>


@endsection	