<<<<<<< HEAD
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
=======
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $genres = [
        [
            'no' => 1,
            'nama_genre' => 'Horor',
            'deskripsi' => 'Seram',
        ],
        [
            'no' => 2,
            'nama_genre' => 'Comedy',
            'deskripsi' => 'Lucu',
        ],
        [
            'no' => 3,
            'nama_genre' => 'Romance',
            'deskripsi' => 'Percintaan',
        ],
        [
            'no' => 4,
            'nama_genre' => 'Action',
            'deskripsi' => 'Seru',
        ],
        [
            'no' => 5,
            'nama_genre' => 'Thriller',
            'deskripsi' => 'Seru Abis',
        ],
    ];

    public function getAllGenres()
    {
        return $this->genres;
    }
}
>>>>>>> 067da160660c050a1aa792517b308d330699271e
