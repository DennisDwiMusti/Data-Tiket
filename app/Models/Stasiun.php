<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stasiun extends Model
{
    protected $table = 'stasiuns';
    protected $fillable = ['name'];

    public function tikets()
    {
        return $this->hasMany(Tiket::class);
    }
}
