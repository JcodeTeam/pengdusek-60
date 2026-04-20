<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Aspirasi;
use App\Models\InputAspirasi;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class AspirasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {
        $totalAspirasi = InputAspirasi::count();
        $totalMenunggu  = InputAspirasi::where('status', 'menunggu')->count();
        $totalProses    = InputAspirasi::where('status', 'proses')->count();
        $totalSelesai   = InputAspirasi::where('status', 'selesai')->count();

        return view('admin.dashboard', compact('totalAspirasi', 'totalMenunggu', 'totalProses', 'totalSelesai'));
    }

    public function index(Request $request)
    {
        $query = InputAspirasi::with(['siswa.user', 'kategori'])->orderByRaw("FIELD(status, 'menunggu', 'proses', 'selesai')");

        if ($request->filled('student_name')) {
            $query->whereHas('siswa.user', function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->student_name . '%');
            });
        }

        if ($request->filled('start_date') && $request->has('end_date')) {
            $query->whereBetween('created_at', [$request->start_date, $request->end_date]);
        }

        if ($request->filled('kategori_id')) {
            $query->where('kategori_id', $request->kategori_id);
        }

        $aspirasi = $query->paginate(5)->withQueryString();
        $categories = Kategori::all();

        return view('admin.aspirasi.index', compact('aspirasi', 'categories'));
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
                'deskripsi' => 'required',
                'foto' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:10000',
            ],
            [
                'deskripsi.required' => 'Feedback wajib diisi',
                'foto.image' => 'File yang diunggah harus berupa gambar.',
                'foto.mimes' => 'Format foto harus berupa jpeg, png, jpg, atau svg.',
                'foto.max' => 'Ukuran foto maksimal 10MB.',
            ]
        );

        try {

            $admin = Admin::where('user_id', auth()->user()->id)->first();

            $imageName = null;
            if ($request->hasFile('foto')) {
                $image = $request->file('foto');
                $imageName = $image->hashName();
                $image->storeAs('public/progres_aspirasi/', $imageName);
            }

            Aspirasi::create([
                'input_aspirasi_id' => $request->input_aspirasi_id,
                'nip' => $admin->nip,
                'status' => $request->status,
                'deskripsi' => $request->deskripsi,
                'foto' => $imageName,
            ]);

            InputAspirasi::where('id', $request->input_aspirasi_id)->update([
                'status' => $request->status,
            ]);

            return redirect()->route('aspirasi.index')->with('success', 'Feedback berhasil dikirim');

        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan' . $e->getMessage())->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(InputAspirasi $aspirasi)
    {
        //
        $feedback = Aspirasi::where('input_aspirasi_id', $aspirasi->id)->latest()->get();
        $aspirasi = InputAspirasi::find($aspirasi->id);
        return view('admin.aspirasi.show', compact('aspirasi', 'feedback'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Aspirasi $aspirasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Aspirasi $aspirasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aspirasi $aspirasi)
    {
        //
    }
}
