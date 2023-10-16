@extends('quanly_layout')
@section('quanly_content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-10" style="color:blue">
                    <h3>Xem chi tiết đề xuất</h3>
                </div>
                <div class="coi-md-2">
                    <a href="{{route('phieudexuatad.index')}}" class="btn btn-primary float-end">Danh sách đề tài</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="card-body">
            <form action="{{route('phieudexuatad.update', $phieudexuatad->madx)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="form-group col-md-6">
                        <div class="form-group col-md-3">
                            <strong>Mã đề xuất:</strong>
                        </div>
                        <div class="form-group col-md-9">
                            <input type="text" name="madt" value="{{$phieudexuatad->madx}}" class="form-control">
                        </div>

                    </div>

                    <div class="form-group col-md-6">
                        <div class="form-group col-md-3">
                            <strong>Mã giảng viên:</strong>
                        </div>

                        <div class="form-group col-md-9">
                            <input type="text" name="magv" value="{{$phieudexuatad->magv}}" class="form-control">
                        </div>

                    </div>

                    <div class="form-group col-md-12">
                        <div class="form-group col-md-2">
                            <strong>Tên đề tài:</strong>
                        </div>

                        <div class="form-group col-md-10">
                            <!-- <input type="text" name="magv" value="{{$phieudexuatad->magv}}" class="form-control"> -->
                            {{$phieudexuatad->dexuat->tendt}}
                        </div>

                    </div>

                    <div class="form-group col-md-6">
                        <div class="form-group col-md-3">
                            <strong>Ngày duyệt:</strong>
                        </div>
                        <div class="form-group col-md-9">
                            <input type="date" name="ngayduyet" value="{{$phieudexuatad->ngayduyet}}" class="form-control">
                        </div>

                    </div>

                    <div class="form-group col-md-12">
                        <div class="form-group col-md-3">
                            <strong>Mục tiêu: </strong>
                        </div>
                        <div class="form-group col-md-9">
                        
                        {!!$phieudexuatad->muctieu!!}
                            <!-- <textarea class="ckeditor" id="ckdetor1" class="form-control" id="exampleFormControlTextarea1" rows="3" name="muctieu" value="{!$phieudexuatad->muctieu}}">{{$phieudexuatad->muctieu}}</textarea> -->
                        </div>
                    </div>




                    <div class="form-group col-md-12">
                        <div class="form-group col-md-3">
                            <strong>Yêu cầu: </strong>
                        </div>
                        <div class="form-group col-md-9">
                        {!!$phieudexuatad->yeucau!!}
                            <!-- <textarea class="ckeditor" id="ckdetor1" class="form-control" id="exampleFormControlTextarea1" rows="3" name="yeucau" value="{!$phieudexuatad->yeucau}}">{{$phieudexuatad->yeucau}}</textarea> -->
                        </div>
                    </div>



                    <div class="form-group col-md-12">
                        <div class="form-group col-md-3">
                            <strong>Tài liệu tham khảo: </strong>
                        </div>
                        <div class="form-group col-md-9">
                        {!!$phieudexuatad->tailieutk!!}
                            <!-- <textarea class="ckeditor" id="ckdetor1" class="form-control" id="exampleFormControlTextarea1" rows="3" name="tailieutk" value="{!$phieudexuatad->tailieutk}}">{{$phieudexuatad->tailieutk}}</textarea> -->
                        </div>
                    </div>




                    <div class="form-group col-md-12">
                        <div class="form-group col-md-3">
                            <strong>Nội dung khác: </strong>
                        </div>
                        <div class="form-group col-md-9">
                            <textarea class="ckeditor" id="ckdetor1" class="form-control" id="exampleFormControlTextarea1" rows="3" name="noidungkhac" value="{!$phieudexuatad->noidungkhac}}">{{$phieudexuatad->noidungkhac}}</textarea>
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <div class="form-group col-md-3">
                            <strong>Tình trạng:</strong>
                        </div>

                        <div class="form-group col-md-9">
                            <select name="tinhtrang" class="form-control">
                                <option value="đã duyệt"{{$phieudexuatad->tinhtrang== "đã duyệt" ? 'selected' : ''}}>đã duyệt</option>
                                <option value=" chưa duyệt"{{$phieudexuatad->tinhtrang== "chưa duyệt" ? 'selected' : ''}}>chưa duyệt</option>
                                <option value="chỉnh sửa"{{$phieudexuatad->tinhtrang== "chỉnh sửa" ? 'selected' : ''}}>chỉnh sửa</option>
                                <option value="lưu trữ"{{$phieudexuatad->tinhtrang== "chỉnh sửa" ? 'selected' : ''}}>lưu trữ</option>

                            </select>    
                        </div>

                    </div>

                    
                    <div >
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success mt-2">Cập nhật</button>
                        </div>

                    </div>
            </form> 
        </div>
    </div>
</div>


@endsection