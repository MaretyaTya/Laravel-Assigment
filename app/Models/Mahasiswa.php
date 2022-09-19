<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kelas;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'Mahasiswa'; //Eloquent membuat model mahasiswa menyimpan record di table mahasiswa
    protected $primarykey = 'nim'; //Memamnggil isi DB dengan primary key

    protected $fillable = [
        'nim',
        'nama',
        'foto',
        'kelas',
        'jurusan',
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
