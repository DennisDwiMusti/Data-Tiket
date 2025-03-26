<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Stasiun;
use Illuminate\Http\Request;
use App\Repository\Stasiun\StasiunRepository;

class StasiunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index( )
    {
        //
        $stasiuns = Stasiun::all();
        return view('stasiun.index', compact('stasiuns'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('stasiun.create');
    }

    protected $stasiunRepository
;

    public function __construct(StasiunRepository $repository)
    {
        $this->stasiunRepository = $repository;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $this->stasiunRepository->store($request->all());
        return redirect()->route('stasiun.index')->with('success', 'Data stasiun berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $stasiun = Stasiun::findOrFail($id);
        return view('stasiun.edit', compact('stasiun'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $this->stasiunRepository->update($request->all(), $id);
        return redirect()->route('stasiun.index')->with('success', 'Data stasiun berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $stasiun = Stasiun::find($id);

        if (!$stasiun) {
            return redirect()->route('stasiun.index')->with('deleted', 'Data stasiun tidak ditemukan');
        }

        $this->stasiunRepository->destroy($id);
        return redirect()->route('stasiun.index')->with('deleted', 'Data stasiun berhasil dihapus');
    }
}
