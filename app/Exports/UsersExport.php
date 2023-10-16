<?php

namespace App\Exports;

use App\Models\Sinhvien;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Sinhvien::all();
    }
}
