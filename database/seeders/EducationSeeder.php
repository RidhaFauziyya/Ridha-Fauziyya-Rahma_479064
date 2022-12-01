<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Education;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $edu = [
            ['id'=>1, 'jenjangPendidikan' => 'Universsitas', 'namaInstansi'=>'Universitas Gadjah Mada', 'waktu'=>'2021-Now'],
            ['id'=>2, 'jenjangPendidikan' => 'SMA', 'namaInstansi'=>'SMA Negri 1 Kota Probolinggo', 'waktu'=>'2018-2021'],
            ['id'=>3, 'jenjangPendidikan' => 'SMP', 'namaInstansi'=>'SMP Negri 2 Kota Probolingoo', 'url'=>'2015-2018']
        ];
        Education::insert($edu);
    }
}
