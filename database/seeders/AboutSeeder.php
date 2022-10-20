<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    private $_about = [
        ["namaAktifitas" => "Seeder 1", "imagePath" => "xxx1.jp", "description" => "Deskripsi seeder 1"],
        ["namaAktifitas" => "Seeder 2", "imagePath" => "xxx2.jp", "description" => "Deskripsi seeder 2"],
        ["namaAktifitas" => "Seeder 3", "imagePath" => "xxx3.jp", "description" => "Deskripsi seeder 3"],
        ["namaAktifitas" => "Seeder 4", "imagePath" => "xxx4.jp", "description" => "Deskripsi seeder 4"],
        ["namaAktifitas" => "Seeder 5", "imagePath" => "xxx5.jp", "description" => "Deskripsi seeder 5"],
        ["namaAktifitas" => "Seeder 6", "imagePath" => "xxx6.jp", "description" => "Deskripsi seeder 6"],
        ["namaAktifitas" => "Seeder 7", "imagePath" => "xxx7.jp", "description" => "Deskripsi seeder 7"],
        ["namaAktifitas" => "Seeder 8", "imagePath" => "xxx8.jp", "description" => "Deskripsi seeder 8"],
        ["namaAktifitas" => "Seeder 9", "imagePath" => "xxx9.jp", "description" => "Deskripsi seeder 9"],
        ["namaAktifitas" => "Seeder 10", "imagePath" => "xxx10.jp", "description" => "Deskripsi seeder 10"],
        ["namaAktifitas" => "Seeder 11", "imagePath" => "xxx11.jp", "description" => "Deskripsi seeder 11"],
        ["namaAktifitas" => "Seeder 12", "imagePath" => "xxx12.jp", "description" => "Deskripsi seeder 12"],
        ["namaAktifitas" => "Seeder 13", "imagePath" => "xxx13.jp", "description" => "Deskripsi seeder 13"],
        ["namaAktifitas" => "Seeder 14", "imagePath" => "xxx14.jp", "description" => "Deskripsi seeder 14"],
        ["namaAktifitas" => "Seeder 15", "imagePath" => "xxx15.jp", "description" => "Deskripsi seeder 15"],
        ["namaAktifitas" => "Seeder 16", "imagePath" => "xxx16.jp", "description" => "Deskripsi seeder 16"],
        ["namaAktifitas" => "Seeder 17", "imagePath" => "xxx17.jp", "description" => "Deskripsi seeder 17"],
        ["namaAktifitas" => "Seeder 18", "imagePath" => "xxx18.jp", "description" => "Deskripsi seeder 18"],
        ["namaAktifitas" => "Seeder 19", "imagePath" => "xxx19.jp", "description" => "Deskripsi seeder 19"],    
        ["namaAktifitas" => "Seeder 20", "imagePath" => "xxx20.jp", "description" => "Deskripsi seeder 20"]
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        foreach ($this->_about as $about){
            $data[] = [
                'namaAktifitas' => $about['namaAktifitas'],
                'imagePath' => $about['imagePath'],
                'description' => $about['description']
            ];
        }
        DB::table('abouts')->insert($data);
    }
}
