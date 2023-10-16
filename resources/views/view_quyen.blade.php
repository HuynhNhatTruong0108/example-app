<!-- quyền -->
@extends('quanly_layout')
@section('quanly_content')
<div class="container" > 
    <div class="card"> 
        <div class="card-header"> 
            <div class="row"> 
                <div class="col-md-6"> 
                    <h3>Quyền</h3> 
                </div> 
                
            </div>  
        </div> 
        <div class="card-body" > 
                @if(Session::has('thongbao')) 
                    <div class="alert alert-success"> 
                        {{Session::get('thongbao')}} 
                </div> 
                @endif 
                <table class="table table-bodered"> 
                    <thead> 
                        <tr> 
                            <th>STT</th>
                            <th>Mã quyền</th> 
                            <th>Tên quyền</th> 
                        </tr> 
                    </thead> 
                    <tbody> 
                        @foreach ($quyen as $qu) 
                            <tr> 
                                <td>{{++$i}}</td> 
                                <td>{{$qu->maquyen}}</td> 
                                <td>{{$qu->tenquyen}}</td>
                                <td> 
                                    
                                </td> 
                            </tr> 
                        @endforeach 
                    </tbody> 
            </table> 
        </div> 
    </div>
</div>
@endsection	