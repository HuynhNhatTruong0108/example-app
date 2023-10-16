@extends('trangdexuat')
@section('trangdexuat_content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-10" style="color:blue">
                    <h3>Chi tiết đề tài</h3>
                </div>
                <div class="col-md-2">
                    <a href="{{route('dexuat.index')}}" class="btn btn-primary float-end">Danh sách đề tài</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="card-body">
            <form action="{{route('dexuat.update', $dexuat->madt)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="form-group col-md-6">
                        <div class="form-group col-md-4">
                            <strong>Mã đề tài:</strong>
                        </div>
                        <div class="form-group col-md-8">
                        {{$dexuat->madt}}
                            <!-- <input type="text" name="madt" value="{{$dexuat->madt}}" class="form-control"> -->

                        </div>

                    </div>

                    <div class="form-group col-md-6">
                        <div class="form-group col-md-4">
                            <strong>Mã đề xuất:</strong>
                        </div>
                        <div class="form-group col-md-8">
                        {{$dexuat->madx}}
                            <!-- <input type="text" name="lop" value="{{$dexuat->madx}}" class="form-control"> -->
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="form-group col-md-4">
                            <strong>Loại đề tài:</strong>
                        </div>
                        <div class="form-group col-md-8">
                            <select name="maldt" class="form-control">
                                <option>Chọn</option>
                                <option value="100" {{$dexuat->maldt== "100" ? 'selected' : ''}}>100-Đồ án</option>
                                <option value="101" {{$dexuat->maldt== "101" ? 'selected' : ''}}>101-Chuyên đề</option>
                                <option value="102" {{$dexuat->maldt== "102" ? 'selected' : ''}}>102-Thưc tập cơ sở</option>
                                <option value="103" {{$dexuat->maldt== "103" ? 'selected' : ''}}>103-Thực tập chuyên ngành</option>
                            </select>
                        </div>

                    </div>
                    <div class="form-group col-md-6">
                        <div class="form-group col-md-3">
                            <strong>Giảng viên:</strong>
                        </div>
                        <div class="form-group col-md-9">
                        {{$dexuat->dexuat->User_phieudexuat->name}}
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="form-group col-md-3">
                            <strong>Email:</strong>
                        </div>
                        <div class="form-group col-md-9">
                        {{$dexuat->dexuat->User_phieudexuat->email}}
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <div class="form-group col-md-2">
                            <strong>Tên đề tài:</strong>
                        </div>
                        <div class="form-group col-md-6">
                        {{$dexuat->tendt}}
                            <!-- <input type="text" name="tendt" value="{{$dexuat->tendt}}" class="form-control"> -->
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <div class="form-group col-md-3">
                            <strong>Mục tiêu:</strong>
                        </div>
                        <div class="form-group col-md-9">
                            {!!$dexuat->dexuat->muctieu!!}
                        </div>
                    </div>
                    <hr>
                    <div class="form-group col-md-12">
                        <div class="form-group col-md-3">
                            <strong>Yêu cầu:</strong>
                        </div>
                        <div class="form-group col-md-9">
                            {!!$dexuat->dexuat->yeucau!!}
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <div class="form-group col-md-3">
                            <strong>Tài liệu tham khảo:</strong>
                        </div>
                        <div class="form-group col-md-9">
                            {!!$dexuat->dexuat->tailieutk!!}
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Cập nhật</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection