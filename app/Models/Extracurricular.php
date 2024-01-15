<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extracurricular
{

    private static $extracurricular = [
        [
            'id' => 1,
            'nama' => 'Teater',
            'nama_pembina' => 'Silvers Rayleigh',
            'deskripsi' => 'Bergabung dengan kelompok teater untuk belajar seni pertunjukan dan mendalami kemampuan akting.',
            'kegiatan' => 'Berpartisipasi dalam latihan drama, mempersiapkan pertunjukan teater, berakting di berbagai peran, dan berkolaborasi dengan rekan-rekan seni.'
        ],
        [
            'id' => 2,
            'nama' => 'Pencak Silat',
            'nama_pembina' => 'Mihawk',
            'deskripsi' => 'Mengikuti ekstrakurikuler pencak silat untuk menguasai seni bela diri tradisional Indonesia.',
            'kegiatan' => 'Melakukan latihan fisik, mempelajari teknik-teknik bela diri, berpartisipasi dalam turnamen pencak silat, dan mengembangkan keterampilan pertahanan diri.'
        ],
        [
            'id' => 3,
            'nama' => 'Karate',
            'nama_pembina' => 'Bellemere',
            'deskripsi' => 'Bergabung dengan klub karate untuk memahami seni bela diri Jepang yang fokus pada disiplin dan konsentrasi.',
            'kegiatan' => 'Latihan teknik karate, meningkatkan kelincahan, berpartisipasi dalam turnamen, dan mengembangkan disiplin diri.'
        ],
        [
            'id' => 4,
            'nama' => 'Berenang',
            'nama_pembina' => 'Yasopp',
            'deskripsi' => 'Bergabung dengan tim berenang untuk meningkatkan kemampuan renang dan memahami teknik-teknik renang yang baik.',
            'kegiatan' => 'Berlatih berenang, mengikuti kompetisi renang, meningkatkan kekuatan fisik, dan mengembangkan keterampilan berenang.'
        ],
        [
            'id' => 5,
            'nama' => 'Sepak Bola',
            'nama_pembina' => 'Zeff',
            'deskripsi' => 'Menjadi anggota tim sepak bola untuk belajar olahraga sepak bola dan memahami pentingnya kerja sama dalam olahraga tim.',
            'kegiatan' => 'Berlatih bola kaki, bermain dalam pertandingan sepak bola, mengembangkan strategi tim, dan memperkuat kerjasama dengan rekan-rekan setim.'
        ],
        [
            'id' => 6,
            'nama' => 'Bulu Tangkis',
            'nama_pembina' => 'Dr. Hiluluk',
            'deskripsi' => 'Bergabung dalam klub bulu tangkis untuk menguasai olahraga raket yang melibatkan kelincahan dan reaksi cepat.',
            'kegiatan' => 'Berlatih bulu tangkis, berpartisipasi dalam turnamen, meningkatkan keterampilan teknis, dan memahami strategi permainan.'
        ],
        [
            'id' => 7,
            'nama' => 'Voli',
            'nama_pembina' => 'Oharan Arkeolog',
            'deskripsi' => 'Menjadi anggota tim voli untuk belajar olahraga voli, yang melibatkan pukulan bola tinggi dan kerja sama tim.',
            'kegiatan' => 'Berlatih voli, berpartisipasi dalam pertandingan, mengembangkan strategi permainan tim, dan meningkatkan keterampilan pukulan.'
        ],
        [
            'id' => 8,
            'nama' => 'Mental',
            'nama_pembina' => 'Tom',
            'deskripsi' => 'Bergabung dalam ekstrakurikuler yang fokus pada pembangunan mental dan kreativitas untuk merancang dan membangun kapal.',
            'kegiatan' => 'Belajar desain kapal, memahami prinsip-prinsip konstruksi kapal, dan berpartisipasi dalam proyek pembuatan kapal.'
        ],
        [
            'id' => 9,
            'nama' => 'Psikologi',
            'nama_pembina' => 'Ryuma',
            'deskripsi' => 'Menjadi anggota klub psikologi untuk belajar tentang psikologi manusia dan berkontribusi pada pemahaman tentang perilaku manusia.',
            'kegiatan' => 'Mempelajari berbagai konsep psikologi, mengikuti diskusi dan penelitian, dan memahami bagaimana psikologi memengaruhi masyarakat.'
        ],
        [
            'id' => 10,
            'nama' => 'Public Speaking',
            'nama_pembina' => 'Whitebeard',
            'deskripsi' => 'Bergabung dalam klub public speaking untuk mengembangkan keterampilan berbicara di depan umum dan memahami seni berkomunikasi.',
            'kegiatan' => 'Berlatih berbicara di depan publik, mempersiapkan pidato, berpartisipasi dalam kompetisi pidato, dan memperbaiki kemampuan komunikasi.'
        ]
    ];


   public static function all(){
        return collect(self::$extracurricular);
    }
}
