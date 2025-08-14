<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriMenu extends Model
{
    use HasFactory;
    protected $table = 'kategori_menu';
    protected $primaryKey = 'id_kategorimenu';
    protected $fillable = ['nama_kategori', 'deskripsi'];
    public function menu()
    {
    return $this->hasMany(Menu::class, 'id_kategorimenu');
    }

}
