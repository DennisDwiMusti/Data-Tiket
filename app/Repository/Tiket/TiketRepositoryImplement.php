<?php

namespace App\Repository\Tiket;

use App\Models\Tiket;
use App\Repository\Tiket\TiketRepository;

class TiketRepositoryImplement implements TiketRepository
{

    public function getAll()
    {
        return Tiket::all();
    }

    public function findById(int $id)
    {
        return Tiket::find($id);
    }
    public function store($data)
    {
        return Tiket::create($data);
    }

    public function update($data, $id)
    {
        $tiket = Tiket::findorFail($id);
        $tiket->update($data);
    }

    public function destroy($id)
    {
        $tiket = Tiket::findorFail($id);
        $tiket->delete();
    }
}
