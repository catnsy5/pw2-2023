<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'film' => 'The Good Bad Mother',
            'user' => 'Bae Se Young',
            'rating' => 8.5,
            'review' => 'Kang Ho secara tiba-tiba kembali ke dirinya ketika berusia tujuh tahun. Lantaran hal ini membuat Kang Ho memutuskan pulang ke kampung halaman dan tinggal dengan sang ibu.',
            'tanggal' => '2023-04-26',
        ]);

        Review::create([
            'film' => 'Live On',
            'user' => 'Bang Yoo Jung',
            'rating' => 8.5,
            'review' => 'Baek Ho Rang adalah seorang siswa sekolah menengah. Ia memiliki wajah yang cantik dan menjadi salah satu siswa populer di media sosial dan di sekolahnya.',
            'tanggal' => '2020-11-17',
        ]);

        Review::create([
            'film' => 'Tale Of The Nine Tailed',
            'user' => 'Han Woo Ri',
            'rating' => 9.2,
            'review' => 'menggambarkan perjuangan putus asa sang gumiho untuk kembali pulang ke hari di mana semua orang terkasihnya berada.',
            'tanggal' => '2020-10-07',
        ]);

        Review::create([
            'film' => 'Tale Of The Nine Tailed 1938',
            'user' => 'Han Woo Ri',
            'rating' => 9.5,
            'review' => 'Perjalanan kembali ke tahun 1938 membuat Lee Yeon bertemu dengan adik laki-lakinya bernama Lee Rang',
            'tanggal' => '2023-05-06',
        ]);

        Review::create([
            'film' => 'True Beauty',
            'user' => 'Yaongyi',
            'rating' => 8.8,
            'review' => 'Lim Ju Kyung siswa SMA yang tidak percaya diri dengan wajahnya. Di sekolah lamanya, dia menjadi korban bully. Pernah mendapat perlakuan tidak baik lantaran penampilannya, membuat Ju Kyung akhirnya memutuskan menyembunyikan wajah asli dengan makeup.',
            'tanggal' => '2020-12-09',
        ]);
    }
}
