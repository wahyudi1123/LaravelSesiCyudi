<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relation extends Model
{
    use HasFactory;
    protected $table ='relations';
    protected $fillable = [
        'mahasiswa_npm 2201170059',
        'dosen_nidn 1017058002',
        'matakuliah_kode',
        'status',
    ];
}
