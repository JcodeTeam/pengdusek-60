<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use App\Models\InputAspirasi;
use App\Models\Kategori;
use App\Models\Siswa;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

class InputAspirasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function dashboard()
    {
        $riwayat = InputAspirasi::where('nisn', auth()->user()->siswa->nisn)->latest()->paginate(5);
        $categories = Kategori::all();
        return view('siswa.dashboard', compact('riwayat', 'categories'));
    }

    public function index()
    {
        //
        $riwayat = InputAspirasi::where('nisn', auth()->user()->siswa->nisn)
            ->latest()->paginate(5);
        $categories = Kategori::all();
        return view('siswa.index', compact('riwayat', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate(
            [
                'judul' => 'required|string|max:100',
                'kategori_id' => 'required|exists:kategoris,id',
                'foto' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:10000',
                'lokasi' => 'required|string',
                'ket' => 'required|string',
            ],
            [
                'judul.required' => 'Judul wajib diisi.',
                'judul.max' => 'Judul maksimal 100 karakter.',
                'kategori_id.required' => 'Kategori wajib dipilih.',
                'foto.image' => 'File yang diunggah harus berupa gambar.',
                'foto.mimes' => 'Format foto harus berupa jpeg, png, jpg, atau svg.',
                'foto.max' => 'Ukuran foto maksimal 10MB.',
                'lokasi.required' => 'Lokasi wajib diisi.',
                'ket.required' => 'Keterangan wajib diisi',
            ]
        );

        try {

            $siswa = Siswa::where('user_id', auth()->user()->id)->first();

            $imageName = null;
            if ($request->hasFile('foto')) {
                $image = $request->file('foto');
                $imageName = $image->hashName();
                $image->storeAs('public/aspirasi_fotos', $imageName);
            }

            InputAspirasi::create([
                'nisn' => $siswa->nisn,
                'judul' => $request->judul,
                'kategori_id' => $request->kategori_id,
                'foto' => $imageName,
                'lokasi' => $request->lokasi,
                'ket' => $request->ket,
            ]);

            return redirect()->route('siswa.dashboard')->with('success', 'Aspirasi berhasil diunggah.');
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan' . $e->getMessage())->withInput();
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(InputAspirasi $input_aspirasi)
    {
        //
        $feedback = Aspirasi::where('input_aspirasi_id', $input_aspirasi->id)->latest()->get();
        $aspirasi = InputAspirasi::findOrFail($input_aspirasi->id);

        return view('siswa.show', compact('feedback', 'aspirasi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InputAspirasi $inputAspirasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InputAspirasi $inputAspirasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InputAspirasi $inputAspirasi)
    {
        //
    }
}
