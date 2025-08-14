<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StokMakananDanMinuman extends Model
{
    use HasFactory;

    protected $table = 'stok_makanan_dan_minuman';
    protected $primaryKey = 'id_makanan_dan_minuman';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = ['nama_makanan_dan_minuman','kategori','jumlah','satuan',];


}
        

