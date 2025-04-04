<?php

namespace App\Repository\Stasiun;

use App\Models\Stasiun;
use App\Repository\Stasiun\StasiunRepository;

class StasiunRepositoryImplement implements StasiunRepository
{
    public function getAll()
    {
        Stasiun::all();
    }

    public function findById(int $id)
    {
        Stasiun::find($id);
    }

    public function store($data)
    {
        Stasiun::create($data);
    }
    public function update($data, $id)
    {
        $stasiun = Stasiun::findOrFail($id);
        $stasiun->update($data);
    }
    public function destroy($id)
    {
        $stasiun = Stasiun::findorFail($id);
        $stasiun->delete();
    }
}
