<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'penulis',
        'penerbit',
        'tahun_terbit',
        'nama_kategori',
        'isbn',
        'jumlah_eksemplar',
        'jumlah_tersedia',
        'deskripsi',
        'foto',
    ];

    public function kategoris()
    {
        return $this->belongsTo(kategoris::class, 'kategori_id', 'kategori_id');
    }
}
