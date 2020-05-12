<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Teacher;

class TeachersImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach ($collection as $key => $col) {
            if ($key >= 4) {
                Teacher::create([
                    'nik'=>$col[1],
                    'name'=>$col[2],
                    'nuptk'=>$col[3],
                    'sex'=>$col[4],
                    'placeBirth'=>$col[5],
                    'dateBirth'=>$col[6],
                    'nip'=>$col[7],
                    'employStatus'=>$col[8],
                    'employType'=>$col[9],
                    'religion'=>$col[10],
                    'street'=>$col[11],
                    'rt'=>$col[12],
                    'rw'=>$col[13],
                    'subVillage'=>$col[14],
                    'village'=>$col[15],
                    'district'=>$col[16],
                    'postalCode'=>$col[17],
                    'phone'=>$col[18],
                    'handphone'=>$col[19],
                    'email'=>$col[20],
                    'status'=>'1',
                    'photo'=>'teachers/'.$col[6].'.png',
                ]);
            }
        }
    }
}
