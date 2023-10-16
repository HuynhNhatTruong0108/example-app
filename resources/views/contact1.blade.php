@extends('quanly_layout')
@section('quanly_content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.min.js"></script>

    <div class="container">
        <div class="card">
            <div class="card-header" style="color:blue">
                <div class="row">               
                        <h3>Thông báo</h3>                
             </div>
            </div>
            <hr>
            <div class="card-body">
            @if(Session::has('thongbao')) 
                    <div class="alert alert-success"> 
                        {{Session::get('thongbao')}} 
                </div> 
                @endif 
                <form action="" method="POST">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-12">
                            <div class="form-group col-md-3">
                            <strong>Tiêu đề:</strong>
                            </div>
                            <div class="form-group col-md-9">
                            <input type="text" name="name" class="form-control" >

                            </div>
                        </div>
                        <!-- <div class="form-group col-md-4">
                            <div class="form-group col-md-3">
                            <strong>Email</strong>

                            </div>
                            <div class="form-group col-md-9">
                            <input type="email" name="email" class="form-control" >

                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <div class="form-group col-md-3">
                            <strong>Điện thoại</strong>
                            </div>
                            <div class="form-group col-md-9">
                            <input  name="phone" class="form-control" >
                            </div>
                        </div> -->
                        <div class="form-group col-md-12">
                            <div class="form-group col-md-3">
                            <strong>Gửi từ:</strong>
                            </div>
                            <div class="form-group col-md-8">
                            <input type="email" name="email" class="form-control" >

                            </div>
                        </div>
                        <div class="form-group col-md-12">
                        <div class="form-group col-md-3">
                            <strong>Đến:</strong>
                        </div>
                        <div class="form-group col-md-8">
                            <!-- <input type="email" name="email" class="form-control" > -->
                            <select multiple="multiple" id="1" class="form-control" name="email" require style="width:400px;height:60px">
                                @foreach ($guimail1 as $value)

                                <option value="{{$value->email }}">

                                    {{$value->email}}
                                </option>

                                @endforeach

                            </select>
                            <script>
                                $('select[multiple]').multiselect()
                            </script>
                        </div>
                    </div>
                        <div class="form-group col-md-12 mb-3">
                            <div class="form-group col-md-3">
                            <strong>Nội dung:</strong>
                            </div>
                            <div class="form-group col-md-9">
                            <textarea class="ckeditor" id="ckdetor1" class="form-control" id="exampleFormControlTextarea1" rows="3" name="content"></textarea>
                            </div>                 
                        </div>
                      
                        <div class="col-md-12">
                        <button type="submit" class="btn btn-success mt-2">Gửi</button>
                        </div>
                    
                            
                    </div>
                </form> 
            </div>
        </div>
    </div>


@endsection	