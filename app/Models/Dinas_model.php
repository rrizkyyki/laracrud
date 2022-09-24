<?php

namespace App\Models;
// use App\Http\Controllers\DinasController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dinas_model extends Model
{
    use HasFactory;
    public $table = 'dinasluar';
    public $timestamps = false;
    protected $primarykey = 'id';
    protected $fillable = [
        'nip',
        'nama',
        'kota_asal',
        'st_asal',
        'ket_asal',
        'kota_tujuan',
        'st_pulang',
        'ket_pulang'
    ];
}
