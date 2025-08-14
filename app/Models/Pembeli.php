<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;

    protected $table = 'pembeli';
    protected $primaryKey = 'id_pembeli';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = ['nama_pembeli','tanggal_transaksi'];

    /**
     * Relasi ke Transaksi (jika digunakan).
     */
   public function transaksi()
{
    return $this->hasMany(Transaksi::class, 'id_pembeli');
}

}
