<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UpdateMahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //mengaupdate data mahasiswa milik TI 2A
        DB::table('mahasiswa')->update(['kelas_id'=>1]);
    }
}
