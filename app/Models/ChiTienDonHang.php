<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTienDonHang extends Model
{
    use HasFactory;
    protected $table = 'chi_tiet_don_hang';

    protected $fillable =[
        'don_hang_id',
        'san_pham_id',
        'don_gia',
        'so_luong',
        'thanh_tien',
    ];

    public function donHang(){
        return $this->belongsTo(DonHang::class);
    }

    public function Product(){
        return $this->belongsTo(Product::class);
    }
    public function sanpham()
    {
        return $this->belongsTo(Product::class, 'san_pham_id');
    }
}
