@extends('trangdexuat')
@section('trangdexuat_content')
Mã: {{Auth::user()->id}}
<br>
Họ tên: {{Auth::user()->name}}
<br>
Email: {{Auth::user()->email}}
<br>
Điện thoại: {{Auth()->user()->Giangvien->pluck('sdt')->implode(' ')}}
<br>
Khoa: {{Auth()->user()->Giangvien->pluck('khoa')->implode(' ')}}

@endsection