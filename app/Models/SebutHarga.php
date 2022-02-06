<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SebutHarga extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $with = ['pelanggan', 'sebut_harga_item'];

    public function pelanggan() {
      return $this->hasOne(User::class, 'id', 'User');
    }

    public function sebut_harga_item() {
      return $this->hasMany(SebutHargaItem::class, 'SebutHargaId', 'id');
    }

}
