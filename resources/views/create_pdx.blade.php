@extends('trangdexuat')
@section('trangdexuat_content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10" style="color:blue">
                        <h3>Thêm phiếu đề xuất</h3>
                    </div>
                    <div class="col-md-2">
                    <a href="{{route('phieudexuat.index')}}" class="btn btn-primary float-end">Danh sách đề xuất</a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="card-body">
                <form action="{{route('phieudexuat.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <!-- <div class="form-group col-md-4">
                            <div class="form-group col-md-5">
                            <strong>Mã đề xuất</strong>
                            </div>
                           
                            <div class="form-group col-md-7">
                            <input type="bigint" name="madx" value="0" class="form-control" >
                            </div>
                        </div> -->
                        <div class="form-group col-md-4">
                            <div class="form-group col-md-5">
                            <strong>Mã giảng viên</strong>
                            </div>
                            <div class="form-group col-md-7">
                            <input type="text" name="magv" value="{{Auth::user()->id}}" class="form-control" >
                            </div>
                        </div>
                        <!-- <div class="form-group  col-md-4">
                            <div class="form-group col-md-5">
                            <strong>Ngày duyệt </strong>
                            </div>
                            <div class="form-group col-md-7">
                            <input type="date" name="ngayduyet" class="form-control" >
                            </div>
                        </div> -->
                        <div class="form-group col-md-6">
                        <div class="form-group col-md-3">
                            <strong>Năm học:</strong>
                        </div>

                        <div class="form-group col-md-9">
                            <input type="text" name="namhoc" value="2022-2023" class="form-control">
                        </div>

                    </div>

                    
                    <div class="form-group col-md-6">
                        <div class="form-group col-md-3">
                            <strong>Loại đề tài:</strong>
                        </div>

                        <div class="form-group col-md-8">
                            <select name="maldt" class="form-control">
                                <option>Chọn</option>
                                <option value="100" >100-Đồ án</option>
                                <option value="101" >101-Chuyên đề</option>
                                <option value="102" >102-Thưc tập cơ sở</option>
                                <option value="103" >103-Thực tập chuyên ngành</option>
                            </select>
                        </div>

                    </div>

                        <div class="form-group col-md-12">
                            <div class="form-group col-md-2">
                            <strong>Mục tiêu</strong>
                            </div>
                            <div class="form-group col-md-10">
                            <textarea class="ckeditor" name="muctieu" id="ckdetor1" class="form-control" id="exampleFormControlTextarea1" rows="3" ></textarea>

                            </div>
                         
                        </div>

                        <div class="form-group col-md-12">
                            <div class="form-group col-md-2">
                            <strong>Yêu cầu</strong>
                            </div>
                            <div class="form-group col-md-10">
                            <textarea class="ckeditor" id="ckdetor2" class="form-control" id="exampleFormControlTextarea1" rows="3" name="yeucau"></textarea>

                            </div>
                         
                        </div>

                        <div class="form-group col-md-12">
                            <div class="form-group col-md-2">
                            <strong>Tài liệu tham khảo</strong>
                            </div>
                            <div class="form-group col-md-10">
                            <textarea class="ckeditor" id="ckdetor3" class="form-control" id="exampleFormControlTextarea1" rows="3" name="tailieutk"></textarea>

                            </div>
                         
                        </div>

                        <!-- <div class="form-group col-md-12">
                            <div class="form-group col-md-2">
                            <strong>Nội dung khác</strong>
                            </div>
                            <div class="form-group col-md-10">
                            <textarea class="ckeditor" id="ckdetor4" class="form-control" id="exampleFormControlTextarea1" rows="3" name="noidungkhac"></textarea>

                            </div>
                         
                        </div> -->

                        <div class="form-group col-md-6">
                            <div class="form-group col-md-3">
                            <strong>Tình trạng</strong>
                            </div>
                            <div class="form-group col-md-9">
                            <select name="tinhtrang" class="form-control">
                        
                                <option value="chưa ">chưa</option selected>
                                <!-- <option value="duyệt">duyệt</option>
                                <option value="chỉnh sửa">chỉnh sửa</option> -->
                            </select>
                            </div>
                            
                        </div>
                      
                        <div class=" col-md-12">
                        <button type="submit" class="btn btn-success mt-2">Lưu</button>
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>


@endsection	