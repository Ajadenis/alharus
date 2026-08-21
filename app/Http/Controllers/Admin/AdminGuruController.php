<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminGuruController extends Controller
{
    // INDEX
    public function index(Request $request)
    {
        $query = Guru::query();

        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $query->where('nama', 'LIKE', "%{$search}%")
                  ->orWhere('jabatan', 'LIKE', "%{$search}%")
                  ->orWhere('mata_pelajaran', 'LIKE', "%{$search}%");
        }

        if ($request->has('status') && !empty($request->status) && $request->status != 'semua') {
            $query->where('is_active', $request->status == 'aktif');
        }

        $guru = $query->latest()->paginate(10);

        return view('admin.guru.index', compact('guru'));
    }

    // CREATE
    public function create()
    {
        return view('admin.guru.create');
    }

    // STORE
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|array|min:1',
            'mata_pelajaran' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $data = $request->all();
        $data['is_active'] = $request->has('is_active');

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '_' . Str::slug($request->nama) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/guru'), $filename);
            $data['foto'] = $filename;
        }

        Guru::create($data);

        return redirect()->route('admin.guru.index')
                         ->with('success', 'Guru berhasil ditambahkan!');
    }

    // EDIT
    public function edit($id)
    {
        $guru = Guru::findOrFail($id);
        return view('admin.guru.edit', compact('guru'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $guru = Guru::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|array|min:1',
            'mata_pelajaran' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $data = $request->all();
        $data['is_active'] = $request->has('is_active');

        if ($request->hasFile('foto')) {
            if ($guru->foto && file_exists(public_path('images/guru/' . $guru->foto))) {
                unlink(public_path('images/guru/' . $guru->foto));
            }

            $file = $request->file('foto');
            $filename = time() . '_' . Str::slug($request->nama) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/guru'), $filename);
            $data['foto'] = $filename;
        }

        $guru->update($data);

        return redirect()->route('admin.guru.index')
                         ->with('success', 'Guru berhasil diperbarui!');
    }

    // DESTROY
    public function destroy($id)
    {
        $guru = Guru::findOrFail($id);

        if ($guru->foto && file_exists(public_path('images/guru/' . $guru->foto))) {
            unlink(public_path('images/guru/' . $guru->foto));
        }

        $guru->delete();

        return redirect()->route('admin.guru.index')
                         ->with('success', 'Guru berhasil dihapus!');
    }

    // TOGGLE STATUS
    public function toggleStatus($id)
    {
        $guru = Guru::findOrFail($id);
        $guru->is_active = !$guru->is_active;
        $guru->save();

        $status = $guru->is_active ? 'diaktifkan' : 'dinonaktifkan';
        return redirect()->route('admin.guru.index')
                         ->with('success', "Guru berhasil {$status}!");
    }
}