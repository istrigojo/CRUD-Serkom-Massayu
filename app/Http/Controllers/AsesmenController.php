<?php

namespace App\Http\Controllers;

use App\Models\Asesmen;
use App\Models\Skema;
use Illuminate\Http\Request;

class AsesmenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $asesmen = Asesmen::orderBy('id', 'asc')->get();
        return view('asesmen.index', compact('asesmen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $skema = Skema::all(); // Get all data from Skema
        return view('asesmen.create', compact('skema'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'namalengkap' => 'required',
            'nomorinduk' => 'required',
            'id_skema' => 'required',
            'hasil' => 'required'
        ]);
        // Generate nomor peserta secara otomatis
        // Dapat tanggal dengan format (YearMonthDay)
        $date = date('Ymd');

        // Mendapatkan created at data dibuat dan +1 sebagai urutan data 
        $count = Asesmen::whereDate('created_at', now()->toDateString())->count() + 1;

        // Membuat nomor peserta dari count, lalu ditambahkan 4 digit nomor urut dengan angka '0' yang akan mengisi disebelah kirinya
        $nomorPeserta = $date . str_pad($count, 4, '0', STR_PAD_LEFT);

        // Sertakan nomorpeserta ke validated data
        $validatedData['nomorpeserta'] = $nomorPeserta;
        
        Asesmen::create($validatedData);
        return redirect()->route('asesmen.index')->with('success', 'Data Berhasil Tersimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $asesmen = Asesmen::findOrFail($id);
        $skema = Skema::all();
        return view('asesmen.show', compact('asesmen'));
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $asesmen = Asesmen::findOrFail($id);
        $skema = Skema::all();
        return view('asesmen.edit', compact('asesmen','skema'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'namalengkap' => 'required',
            'nomorinduk' => 'required',
            'id_skema' => 'required',
            'hasil' => 'required'
        ]);
        $asesmen = Asesmen::findOrFail($id);
        $asesmen->update($validatedData);
        return redirect()->route('asesmen.index')->with('success', 'Data Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $asesmen = Asesmen::findOrFail($id);
        $asesmen->delete();
        return redirect()->route('asesmen.index')->with('success', 'Data Berhasil Terhapus');
    }
}
