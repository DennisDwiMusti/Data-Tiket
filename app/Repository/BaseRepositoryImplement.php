<?php

namespace App\Repository;
use App\Repository\BaseRepository;
use Illuminate\Database\Eloquent\Model;

class BaseRepositoryImplement implements BaseRepository
{
    protected $model;

    public function __construct(Model $model) {
        return $this->model = $model;
    }

    public function getAll()
    {
        return $this->model::all();
    }

    public function findById(int $id)
    {
        return $this->model::find($id);
    }
    public function store($data)
    {
        return $this->model::create($data);
    }

    public function update($data, $id)
    {
        $record = $this->model::findOrFail($id);
        $record->update($data);
        return $record;
    }

    public function destroy($id)
    {
        $record = $this->model::findOrFail($id);
        $record->delete();
        return true;
    }

}
