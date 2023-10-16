@extends('trangdexuat')
@section('trangdexuat_content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-10" style="color:blue">
                    <h3>Chi tiết phiếu đề xuất</h3>
                </div>
                <div class="coi-md-2">
                    <a href="{{route('phieudexuat.index')}}" class="btn btn-primary float-end">Danh sách đề xuất</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="card-body">
            <form action="{{route('phieudexuat.update', $phieudexuat->madx)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <!-- <div class="form-group col-md-6">
                        <div class="form-group col-md-3">
                            <strong>Mã đề xuất</strong>
                        </div>
                        <div class="form-group col-md-9">
                            <input type="text" name="madt" value="{{$phieudexuat->madx}}" class="form-control">
                        </div>

                    </div> -->

                    <div class="form-group col-md-6">
                        <div class="form-group col-md-4">
                            <strong>Mã giảng viên:</strong>
                        </div>

                        <div class="form-group col-md-8">
                        {{$phieudexuat->magv}}
                            <!-- <input type="text" name="magv" value="{{$phieudexuat->magv}}" class="form-control"> -->
                        </div>

                    </div>

                    <div class="form-group col-md-6">
                        <div class="form-group col-md-3">
                            <strong>Ngày duyệt:</strong>
                        </div>
                        <div class="form-group col-md-9">
                        {{$phieudexuat->ngayduyet}}
                            <!-- <input type="date" name="ngayduyet" value="{{$phieudexuat->ngayduyet}}" class="form-control"> -->
                        </div>

                    </div>
                    <div class="form-group col-md-6">
                        <div class="form-group col-md-3">
                            <strong>Tên đề tài:</strong>
                        </div>
                        <div class="form-group col-md-9">
                        {{$phieudexuat->dexuat->tendt}}
                            <!-- <input type="date" name="ngayduyet" value="{{$phieudexuat->ngayduyet}}" class="form-control"> -->
                        </div>

                    </div>

                    <div class="form-group col-md-12">
                        <div class="form-group col-md-3">
                            <strong>Mục tiêu:</strong>
                        </div>
                        <div class="form-group col-md-9">
                        {!!$phieudexuat->muctieu!!}
                            <!-- <textarea class="ckeditor" id="ckdetor1" class="form-control" id="exampleFormControlTextarea1" rows="3" name="muctieu" value="{!$phieudexuat->muctieu}}">{{$phieudexuat->muctieu}}</textarea> -->
                        </div>
                    </div>




                    <div class="form-group col-md-12">
                        <div class="form-group col-md-3">
                            <strong>Yêu cầu: </strong>
                        </div>
                        <div class="form-group col-md-9">
                        {!!$phieudexuat->yeucau!!}
                            <!-- <textarea class="ckeditor" id="ckdetor1" class="form-control" id="exampleFormControlTextarea1" rows="3" name="yeucau" value="{!$phieudexuat->yeucau}}">{{$phieudexuat->yeucau}}</textarea> -->
                        </div>
                    </div>



                    <div class="form-group col-md-12">
                        <div class="form-group col-md-3">
                            <strong>Tài liệu tham khảo: </strong>
                        </div>
                        <div class="form-group col-md-9">
                        {!!$phieudexuat->tailieutk!!}
                            <!-- <textarea class="ckeditor" id="ckdetor1" class="form-control" id="exampleFormControlTextarea1" rows="3" name="tailieutk" value="{!$phieudexuat->tailieutk}}">{{$phieudexuat->tailieutk}}</textarea> -->
                        </div>
                    </div>




                    <div class="form-group col-md-12">
                        <div class="form-group col-md-3">
                            <strong>Nội dung khác: </strong>
                        </div>
                        <div class="form-group col-md-9">
                        {!!$phieudexuat->noidungkhac!!}
                            <!-- <textarea class="ckeditor" id="ckdetor1" class="form-control" id="exampleFormControlTextarea1" rows="3" name="noidungkhac" value="{!$phieudexuat->noidungkhac}}">{{$phieudexuat->noidungkhac}}</textarea> -->
                        </div>
                    </div>

                   
                        <!-- <div class="form-group col-md-3">
                            <strong>Tình trạng</strong>
                        </div> -->

                        <!-- <div class="form-group col-md-9">
                            <select name="tinhtrang" class="form-control">
                                <option value="chưa"{{$phieudexuat->tinhtrang== "chưa" ? 'selected' : ''}}>chưa</option>
                                <option value="duyệt"{{$phieudexuat->tinhtrang== "duyệt" ? 'selected' : ''}}>duyệt</option>
                                <option value="sửa"{{$phieudexuat->tinhtrang== "sửa" ? 'selected' : ''}}>sửa</option>
                                
                            </select>    
                        </div> -->

                   

                    
                    <div >
                        <!-- <div class="col-md-12">
                            <button type="submit" class="btn btn-success mt-2">Cập nhật</button>
                        </div> -->

                    </div>
            </form> 
        </div>
    </div>
</div>


@endsection