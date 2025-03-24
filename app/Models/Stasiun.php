<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stasiun extends Model
{
    use HasFactory;

    protected $table = 'stasiuns';
    protected $fillable = ['name'];

    public function tiket()
    {
        return $this->hasMany(tiket::class);
    }
}
