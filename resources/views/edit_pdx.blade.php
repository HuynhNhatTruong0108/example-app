@extends('trangdexuat')
@section('trangdexuat_content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-10" style="color:blue">
                    <h3>Cập nhật phiếu đề xuất</h3>
                </div>
                <div class="coi-md-2">
                    <a href="{{route('phieudexuat.index')}}" class="btn btn-primary float-end">Danh sách đề tài</a>
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


                    <div class="form-group col-md-12">
                        <div class="form-group col-md-2">
                            <strong>Tên đề tài:</strong>
                        </div>

                        <div class="form-group col-md-10">
                            <!-- <input type="text" name="magv" value="{{$phieudexuat->magv}}" class="form-control"> -->
                            {{$phieudexuat->dexuat->tendt}}
                        </div>

                    </div>

                    <div class="form-group col-md-6">
                        <div class="form-group col-md-3">
                            <strong>Năm học:</strong>
                        </div>

                        <div class="form-group col-md-9">
                            <input type="text" name="namhoc" value="{{$phieudexuat->namhoc}}" class="form-control">
                        </div>

                    </div>

                    
                    <div class="form-group col-md-6">
                        <div class="form-group col-md-3">
                            <strong>Loại đề tài:</strong>
                        </div>

                        <div class="form-group col-md-8">
                            <select name="maldt" class="form-control">
                                <option>Chọn</option>
                                <option value="100" {{$phieudexuat->maldt== "100" ? 'selected' : ''}}>100-Đồ án</option>
                                <option value="101" {{$phieudexuat->maldt== "101" ? 'selected' : ''}}>101-Chuyên đề</option>
                                <option value="102" {{$phieudexuat->maldt== "102" ? 'selected' : ''}}>102-Thưc tập cơ sở</option>
                                <option value="103" {{$phieudexuat->maldt== "103" ? 'selected' : ''}}>103-Thực tập chuyên ngành</option>
                            </select>
                        </div>

                    </div>                      </div>

                    </div>


                    <!-- <div class="form-group col-md-6">
                        <div class="form-group col-md-3">
                            <strong>Ngày duyệt</strong>
                        </div>
                        <div class="form-group col-md-9">
                            <input type="date" name="ngayduyet" value="{{$phieudexuat->ngayduyet}}" class="form-control">
                        </div>

                    </div> -->

                    <div class="form-group col-md-12">
                        <div class="form-group col-md-3">
                            <strong>Mục tiêu:</strong>
                        </div>
                        <div class="form-group col-md-9">
                            <textarea class="ckeditor" id="ckdetor1" class="form-control" id="exampleFormControlTextarea1" rows="3" name="muctieu" value="{!$phieudexuat->muctieu}}">{{$phieudexuat->muctieu}}</textarea>
                        </div>
                    </div>




                    <div class="form-group col-md-12">
                        <div class="form-group col-md-3">
                            <strong>Yêu cầu: </strong>
                        </div>
                        <div class="form-group col-md-9">
                            <textarea class="ckeditor" id="ckdetor1" class="form-control" id="exampleFormControlTextarea1" rows="3" name="yeucau" value="{!$phieudexuat->yeucau}}">{{$phieudexuat->yeucau}}</textarea>
                        </div>
                    </div>



                    <div class="form-group col-md-12">
                        <div class="form-group col-md-3">
                            <strong>Tài liệu tham khảo: </strong>
                        </div>
                        <div class="form-group col-md-9">
                            <textarea class="ckeditor" id="ckdetor1" class="form-control" id="exampleFormControlTextarea1" rows="3" name="tailieutk" value="{!$phieudexuat->tailieutk}}">{{$phieudexuat->tailieutk}}</textarea>
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
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success mt-2">Cập nhật</button>
                        </div>

                    </div>
            </form> 
        </div>
    </div>
</div>


@endsection