<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    private $_project = [
        ["namaProject" => "Seeder 1", "imagePath" => "xxx1.jp", "description" => "Deskripsi seeder 1"],
        ["namaProject" => "Seeder 2", "imagePath" => "xxx2.jp", "description" => "Deskripsi seeder 2"],
        ["namaProject" => "Seeder 3", "imagePath" => "xxx3.jp", "description" => "Deskripsi seeder 3"],
        ["namaProject" => "Seeder 4", "imagePath" => "xxx4.jp", "description" => "Deskripsi seeder 4"],
        ["namaProject" => "Seeder 5", "imagePath" => "xxx5.jp", "description" => "Deskripsi seeder 5"],
        ["namaProject" => "Seeder 6", "imagePath" => "xxx6.jp", "description" => "Deskripsi seeder 6"],
        ["namaProject" => "Seeder 7", "imagePath" => "xxx7.jp", "description" => "Deskripsi seeder 7"],
        ["namaProject" => "Seeder 8", "imagePath" => "xxx8.jp", "description" => "Deskripsi seeder 8"],
        ["namaProject" => "Seeder 9", "imagePath" => "xxx9.jp", "description" => "Deskripsi seeder 9"],
        ["namaProject" => "Seeder 10", "imagePath" => "xxx10.jp", "description" => "Deskripsi seeder 10"],
        ["namaProject" => "Seeder 11", "imagePath" => "xxx11.jp", "description" => "Deskripsi seeder 11"],
        ["namaProject" => "Seeder 12", "imagePath" => "xxx12.jp", "description" => "Deskripsi seeder 12"],
        ["namaProject" => "Seeder 13", "imagePath" => "xxx13.jp", "description" => "Deskripsi seeder 13"],
        ["namaProject" => "Seeder 14", "imagePath" => "xxx14.jp", "description" => "Deskripsi seeder 14"],
        ["namaProject" => "Seeder 15", "imagePath" => "xxx15.jp", "description" => "Deskripsi seeder 15"],
        ["namaProject" => "Seeder 16", "imagePath" => "xxx16.jp", "description" => "Deskripsi seeder 16"],
        ["namaProject" => "Seeder 17", "imagePath" => "xxx17.jp", "description" => "Deskripsi seeder 17"],
        ["namaProject" => "Seeder 18", "imagePath" => "xxx18.jp", "description" => "Deskripsi seeder 18"],
        ["namaProject" => "Seeder 19", "imagePath" => "xxx19.jp", "description" => "Deskripsi seeder 19"],
        ["namaProject" => "Seeder 20", "imagePath" => "xxx20.jp", "description" => "Deskripsi seeder 20"]
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        foreach ($this->_project as $project){
            $data[] = [
                'namaProject' => $project['namaProject'],
                'imagePath' => $project['imagePath'],
                'description' => $project['description']
            ];
        }
        DB::table('projects')->insert($data);
    }
}
