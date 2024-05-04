<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    public $fillable = ['nama_produk','deskripsi','images','kategori_id','cara_beli','ketentuan'];
    public $timestamps = true;
}
