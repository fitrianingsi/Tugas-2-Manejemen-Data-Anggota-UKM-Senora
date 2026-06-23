<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Divisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anggotas = Anggota::all();

        return view('anggotas.index', compact('anggotas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $divisis = Divisi::all();

        return view('anggotas.create', compact('divisis'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'divisi_id' => 'required',
            'nama' => 'required',
            'nim' => 'required|unique:anggotas',
            'jabatan' => 'required',
            'angkatan' => 'required',
            'status_keanggotaan' => 'required'
        ]);

        try {

            DB::beginTransaction();

            Anggota::create([
                'divisi_id' => $request->divisi_id,
                'nama' => $request->nama,
                'nim' => $request->nim,
                'jabatan' => $request->jabatan,
                'angkatan' => $request->angkatan,
                'status_keanggotaan' => $request->status_keanggotaan
            ]);

            DB::commit();

            return redirect()
                ->route('anggotas.index')
                ->with('success', 'Data anggota berhasil ditambahkan');
        } catch (\Exception $e) {

            DB::rollBack();

            return back()
                ->withInput()
                ->with('error', 'Gagal menambahkan data');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Anggota $anggota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Anggota $anggota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Anggota $anggota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anggota $anggota)
    {
        //
    }
}
