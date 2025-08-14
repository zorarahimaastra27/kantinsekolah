<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransaksiPembeli extends Model
{
    protected $table = 'transaksi_pembeli';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function pembeli()
    {
        return $this->belongsTo(Pembeli::class, 'id_pembeli', 'id_pembeli');
    }

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class, 'id_transaksi', 'id_transaksi');
    }
}

