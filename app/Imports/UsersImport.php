<?php

namespace App\Imports;

use App\Models\Sinhvien;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class UsersImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Sinhvien([
            'masv'     => $row['masv'],
            'tensv'    => $row['tensv'], 
            'lop'    => $row['lop'], 
            'gioitinh'    => $row['gioitinh'], 
            'ngaysinh'    => $row['ngaysinh'], 
            'sdt'    => $row['sdt'], 
            'email'    => $row['email'], 
        ]);
    }
}
