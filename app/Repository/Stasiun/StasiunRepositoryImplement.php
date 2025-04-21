<?php

namespace App\Repository\Stasiun;

use App\Models\Stasiun;
use App\Repository\BaseRepositoryImplement;
use App\Repository\Stasiun\StasiunRepository;

class StasiunRepositoryImplement extends BaseRepositoryImplement implements StasiunRepository
{
    public function __construct(Stasiun $model)
    {
        parent::__construct($model);
    }

    // public function getAll()
    // {
    //     return Stasiun::all();
    // }

    // public function findById(int $id)
    // {
    //     return Stasiun::find($id);
    // }

    // public function store($data)
    // {
    //     return Stasiun::create($data);
    // }
    // public function update($data, $id)
    // {
    //     $stasiun = Stasiun::findOrFail($id);
    //     $stasiun->update($data);
    // }
    // public function destroy($id)
    // {
    //     $stasiun = Stasiun::findorFail($id);
    //     $stasiun->delete();
    // }
}
