<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $desc = ['PNS','GTY/PTY','GTT/PTT Provinsi','GTT/PTT Kab/Kota','Guru Honor Sekolah'];
        $arr = count($desc);

        for ($i=0; $i < $arr ; $i++) { 
            DB::table('employ_status')->insert([
                'desc' => $desc[$i],
            ]);
        }
        
        $desc = ['Guru BK','Guru Mapel','Guru Kelas','Kepala Sekolah','Wakil Kepala Sekolah','Kaprodi'];
        $arr = count($desc);

        for ($i=0; $i < $arr ; $i++) { 
            DB::table('employ_type')->insert([
                'desc' => $desc[$i],
            ]);
        }

        $desc = ['Islam','Kristen Protestan','Katholik','Hindu','Budha','Kong Hu Chu','Kepercayaan pada Tuhan YME'];
        $arr = count($desc);

        for ($i=0; $i < $arr ; $i++) { 
            DB::table('religions')->insert([
                'desc' => $desc[$i],
            ]);
        }
    }
}
