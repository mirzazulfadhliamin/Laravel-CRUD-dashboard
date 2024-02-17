<?php

namespace Database\Factories;
use App\Models\kelas;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $kelas = Kelas::pluck('id')->all();

        $namaAnimeLatin = [
            'Ichigo Kurosaki', 'Sakura Haruno', 'Naruto Uzumaki', 'Goku Son', 'Lelouch Lamperouge',
            'Edward Elric', 'Light Yagami', 'Asuka Langley Soryu', 'Monkey D. Luffy', 'Saitama',
            'Eren Yeager', 'Levi Ackerman', 'Mikasa Ackerman', 'Gon Freecss', 'Killua Zoldyck',
            'Inuyasha', 'Kagome Higurashi', 'Rurouni Kenshin', 'Kenshiro', 'Vegeta',
            'Guts', 'Kaneki Ken', 'Spike Spiegel', 'Motoko Kusanagi', 'Rei Ayanami',
            'Shinji Ikari', 'Zero Kiryu', 'Kaname Kuran', 'Luffy D. Monkey', 'Nami',
            'Sanji Vinsmoke', 'Zoro Roronoa', 'Usopp', 'Franky', 'Tony Tony Chopper',
            'Brook', 'Nico Robin', 'Kaneki Ken', 'Alucard', 'Armin Arlert',
            'Erza Scarlet', 'Gray Fullbuster', 'Lucy Heartfilia', 'Natsu Dragneel', 'Jellal Fernandes',
            'Itachi Uchiha', 'Kakashi Hatake', 'Minato Namikaze', 'Hashirama Senju', 'Tobirama Senju',
            'Hinata Hyuga', 'Neji Hyuga', 'Rock Lee', 'Tenten', 'Gaara',
            'Jiraiya', 'Orochimaru', 'Shikamaru Nara', 'Choji Akimichi', 'Temari',
            'Kisame Hoshigaki', 'Deidara', 'Sasori', 'Hidan', 'Kakuzu',
            'Konan', 'Pain', 'Madara Uchiha', 'Obito Uchiha', 'Kurapika',
            'Hisoka', 'Gon Freecss', 'Kite', 'Meruem', 'Komugi',
            'Gohan', 'Trunks', 'Bulma', 'Vegeta', 'Android 17',
            'Android 18', 'Krillin', 'Piccolo', 'Cell', 'Frieza',
            'Majin Buu', 'Yusuke Urameshi', 'Hiei', 'Kurama', 'Kuwabara',
            'Yuji Itadori', 'Megumi Fushiguro', 'Satoru Gojo', // Jujutsu Kaisen
    'Izuku Midoriya', 'Katsuki Bakugo', 'Shoto Todoroki', // Boku no Hero Academia
    'All Might', 'Ochaco Uraraka', 'Tsuyu Asui', // Boku no Hero Academia
    'Eren Yeager', 'Mikasa Ackerman', 'Armin Arlert', // Attack on Titan
    'Tanjiro Kamado', 'Nezuko Kamado', 'Zenitsu Agatsuma', // Demon Slayer
    'Emma', 'Norman', 'Ray', // The Promised Neverland
    'Naruto Uzumaki', 'Sasuke Uchiha', 'Sakura Haruno', // Naruto
    'Gon Freecss', 'Killua Zoldyck', 'Kurapika', // Hunter x Hunter
    'Lelouch Lamperouge', 'C.C.', 'Suzaku Kururugi', // Code Geass
    'Edward Elric', 'Alphonse Elric', 'Roy Mustang', // Fullmetal Alchemist
    'Guts', 'Griffith', 'Casca', // Berserk
    'Hinata Shoyo', 'Kageyama Tobio', 'Tsukishima Kei', // Haikyuu!!
    'Saitama', 'Genos', 'Mumen Rider', // One Punch Man
    'Himura Kenshin', 'Kamiya Kaoru', 'Sagara Sanosuke', // Rurouni Kenshin
    'Light Yagami', 'L', 'Misa Amane', // Death Note
    'Motoko Kusanagi', 'Batou', 'Togusa', // Ghost in the Shell
    'Spike Spiegel', 'Faye Valentine', 'Jet Black', // Cowboy Bebop
    'Monkey D. Luffy', 'Nami', 'Roronoa Zoro',
    'Meliodas', 'Elizabeth Liones', 'Diane', // The Seven Deadly Sins
    'Ban', 'King', 'Gowther', // The Seven Deadly Sins
    'Merlin', 'Escanor', 'Hawk', // The Seven Deadly Sins
    'Natsu Dragneel', 'Lucy Heartfilia', 'Gray Fullbuster', // Fairy Tail
    'Erza Scarlet', 'Happy', 'Gajeel Redfox', // Fairy Tail
    'Edward Elric', 'Alphonse Elric', 'Roy Mustang', // Fullmetal Alchemist
    'Lelouch Lamperouge', 'C.C.', 'Suzaku Kururugi', // Code Geass
    'Saitama', 'Genos', 'Mumen Rider', // One Punch Man
    'Hinata Shoyo', 'Kageyama Tobio', 'Tsukishima Kei', // Haikyuu!!
    'Tanjiro Kamado', 'Nezuko Kamado', 'Zenitsu Agatsuma', // Demon Slayer
    'Eren Yeager', 'Mikasa Ackerman', 'Armin Arlert', // Attack on Titan
    'Gon Freecss', 'Killua Zoldyck', 'Kurapika', // Hunter x Hunter
    'Light Yagami', 'L', 'Misa Amane', // Death Note
    'Motoko Kusanagi', 'Batou', 'Togusa', // Ghost in the Shell
    'Spike Spiegel', 'Faye Valentine', 'Jet Black', // Cowboy Bebop
    'Monkey D. Luffy', 'Nami', 'Roronoa Zoro', // One Piece
    'Astolfo', 'Saber', 'Rin Tohsaka', // Fate/Stay Night
    'Kirito', 'Asuna', 'Sinon', // Sword Art Online
    'Soma Yukihira', 'Erina Nakiri', 'Megumi Tadokoro', // Food Wars!
    'Koyomi Araragi', 'Senjougahara Hitagi', 'Shinobu Oshino', // Monogatari Series
    'Kakashi Hatake', 'Naruto Uzumaki', 'Sasuke Uchiha', // Naruto
    'Inuyasha', 'Kagome Higurashi', 'Miroku'
        ];
        return [
            'nama' =>  $this->faker->randomElement($namaAnimeLatin),
            'nis' => $this->faker->unique()->numerify('########'),
            'kelas_id' => $this->faker->randomElement($kelas),
            'alamat' => $this->faker->address,
            'tgl_lahir' => $this->faker->date,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
