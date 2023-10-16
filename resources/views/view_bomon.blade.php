@extends('quanly_layout')
@section('quanly_content')
<div class="container" > 
    <div class="card"> 
        <div class="card-header"> 
            <div class="row"> 
                <div class="col-md-6" style="color:blue"> 
                    <h3>Bộ môn</h3> 
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
                            <th>Mã bộ môn</th> 
                            <th>Tên bộ môn</th> 
                        </tr> 
                    </thead> 
                    <tbody> 
                        @foreach ($bomon as $bm) 
                            <tr> 
                                <td>{{++$i}}</td> 
                                <td>{{$bm->mabm}}</td> 
                                <td>{{$bm->tenbm}}</td>
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