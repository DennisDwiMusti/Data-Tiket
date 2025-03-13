<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;

    protected $table = 'tikets';
    protected $fillable = ['Stasiun', 'Tujuan', 'harga', 'tanggal'];

    public function stasiun()
    {
        return $this->belongsTo(Stasiun::class);
    }

}
