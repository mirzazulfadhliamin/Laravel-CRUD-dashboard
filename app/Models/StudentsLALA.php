<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students
{
    private static $student =[
        [
            "id" => 1,
            "nis" => 1234,
            "nama" => "Mirza Zulfadhli Amin",
            "kelas" => "11 PPLG 1",
            "alamat" => "kudus"
        ],
        [
            "id" => 2,
            "nis" => 1235,
            "nama" => "monkey D.luffy ",
            "kelas" => "11 E",
            "alamat" => "kudus"
        ],
        [
            "id" => 3,
            "nis" => 1236,
            "nama" => "Aaron ikwan saputra",
            "kelas" => "11 PPLG 1",
            "alamat" => "kudus"
        ],
        [
            "id" => 4,
            "nis" => 1237,
            "nama" => "nabil asobib",
            "kelas" => "11 PPLG 1",
            "alamat" => "kudus"
        ],
        [
            "id" => 5,
            "nis" => 1238,
            "nama" => "disya eka",
            "kelas" => "11 PPLG 1",
            "alamat" => "kudus"
        ],
        [
            "id"=> 6,
            "nis"=> 1239,
            "nama"=> "Monkey D. luffy",
            "kelas"=> "11 E",
            "alamat"=> "East Blue, desa monyet"
      ],

            [
              "id"=> 6,
              "nis"=> 1239,
              "nama"=> "Roronoa Zoro",
              "kelas"=> "11 E",
              "alamat"=> "East Blue, Shimotsuki Village"
        ],
            [
              "id"=> 7,
              "nis"=> 1240,
              "nama"=> "Nami",
              "kelas"=> "11 E",
              "alamat"=> "East Blue, Cocoyasi Village"
        ],
            [
              "id"=> 8,
              "nis"=> 1241,
              "nama"=> "Usopp",
              "kelas"=> "11 E",
              "alamat"=> "East Blue, Syrup Village"
        ],
            [
              "id"=> 9,
              "nis"=> 1242,
              "nama"=> "Sanji",
              "kelas"=> "11 E",
              "alamat"=> "North Blue, East Blue, Baratie"
        ],
            [
              "id"=> 10,
              "nis"=> 1243,
              "nama"=> "Tony Tony Chopper",
              "kelas"=> "11 E",
              "alamat"=> "South Blue, Drum Island"
        ],
            [
              "id"=> 11,
              "nis"=> 1244,
              "nama"=> "Nico Robin",
              "kelas"=> "11 E",
              "alamat"=> "West Blue, Ohara"
        ],
            [
              "id"=> 12,
              "nis"=> 1245,
              "nama"=> "Franky",
              "kelas"=> "11 E",
              "alamat"=> "South Blue, Water 7"
        ],
            [
              "id"=> 13,
              "nis"=> 1246,
              "nama"=> "Brook",
              "kelas"=> "11 E",
              "alamat"=> "West Blue, Rumbar Pirates"
            ],
            [
              "id"=> 14,
              "nis"=> 1247,
              "nama"=> "Jinbe",
              "kelas"=> "11 E",
              "alamat"=> "East Blue, Fish-Man Island"
            ],

        ];

        public static function all(){
            return collect(self::$student);
        }
}
