<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;

    protected $table = 'tiket';
    protected $fillable = ['name', 'harga', 'stasiun_id', 'tanggal'];


    public function stasiun()
    {
        return $this->belongsTo(Stasiun::class);
    }
}
