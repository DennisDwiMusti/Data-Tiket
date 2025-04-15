<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tiket;
use App\Models\Stasiun;
use Illuminate\Http\Request;
use App\Repository\Tiket\TiketRepository;

class TiketController extends Controller
{

    protected $tiketRepository;

    public function __construct(TiketRepository $repository)
    {
        $this->tiketRepository = $repository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tikets = Tiket::with('stasiun')->get();
        return view('tiket.index', compact('tikets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $stasiuns = Stasiun::all();
        return view('tiket.create', compact('stasiuns'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $this->tiketRepository->store($request->all());
        return redirect()->route('tiket.index')->with('success', 'Data tiket berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tiket $tiket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tiket = Tiket::findOrFail($id);
        $stasiuns = Stasiun::all();
        return view('tiket.edit', compact('tiket', 'stasiuns'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->tiketRepository->update($request->all(), $id);
        return redirect()->route('tiket.index')->with('success', 'Data tiket berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tiket = Tiket::find($id);

        if (!$tiket) {
            return redirect()->route('tiket.index')->with('deleted', 'Data tiket tidak ditemukan');
        }

        $this->tiketRepository->destroy($id);
        return redirect()->route('tiket.index')->with('deleted', 'Data tiket berhasil dihapus');
    }

}
