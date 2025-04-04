<?php

namespace App\Repository\Tiket;

use App\Models\Tiket;
use App\Repository\Tiket\TiketRepository;

class TiketRepositoryImplement implements TiketRepository
{

    public function getAll()
    {
        Tiket::all();
    }

    public function findById(int $id)
    {
        Tiket::find($id);
    }
    public function store($data)
    {
        Tiket::create($data);
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
