<?php

namespace App\Repository\Stasiun;

interface StasiunRepository
{
    public function getAll();
    public function findById(int $id);
    public function store($data);
    public function update($data, $id);
    public function destroy($id);
}
