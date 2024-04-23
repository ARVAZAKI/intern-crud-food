<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public const CATEGORY_MAKANAN = 'makanan';
    public const CATEGORY_MINUMAN = 'minuman';

    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'nama_produk',
        'deskripsi_produk',
        'harga_produk',
        'foto_produk'
    ];
    public static function getCategory()
    {
        return [
            self::CATEGORY_MAKANAN,
            self::  CATEGORY_MINUMAN,
        ];
    }
}
