<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $reviews = [
        [
            'no' => 1,
            'film' => 'The Good Bad Mother',
            'user' => 'Bae Se Young',
            'rating' => 8.5,
            'review' => 'Kang Ho secara tiba-tiba kembali ke dirinya ketika berusia tujuh tahun. Lantaran hal ini membuat Kang Ho memutuskan pulang ke kampung halaman dan tinggal dengan sang ibu.',
            'tanggal' => '2023-04-26',
        ],
        [
            'no' => 2,
            'film' => 'Live On',
            'user' => 'Bang Yoo Jung',
            'rating' => 8.5,
            'review' => 'Baek Ho Rang adalah seorang siswa sekolah menengah. Ia memiliki wajah yang cantik dan menjadi salah satu siswa populer di media sosial dan di sekolahnya.',
            'tanggal' => '2020-11-17',
        ],
        [
            'no' => 3,
            'film' => 'Tale Of The Nine Tailed',
            'user' => 'Han Woo Ri',
            'rating' => 9.2,
            'review' => 'menggambarkan perjuangan putus asa sang gumiho untuk kembali pulang ke hari di mana semua orang terkasihnya berada.',
            'tanggal' => '2020-10-07',
        ],
        [
            'no' => 4,
            'film' => 'Tale Of The Nine Tailed 1938',
            'user' => 'Han Woo Ri',
            'rating' => 9.5,
            'review' => 'Perjalanan kembali ke tahun 1938 membuat Lee Yeon bertemu dengan adik laki-lakinya bernama Lee Rang',
            'tanggal' => '2023-05-06',
        ],
        [
            'no' => 5,
            'film' => 'True Beauty',
            'user' => 'Yaongyi',
            'rating' => '8.8',
            'review' => 'Lim Ju Kyung siswa SMA yang tidak percaya diri dengan wajahnya. Di sekolah lamanya, dia menjadi korban bully. Pernah mendapat perlakuan tidak baik lantaran penampilannya, membuat Ju Kyung akhirnya memutuskan menyembunyikan wajah asli dengan makeup.',
            'tanggal' => '2020-12-09',
        ],
    ];

    public function getAllReviews()
    {
        return $this->reviews;
    }
}
