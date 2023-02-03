<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Hash;

class BeritaController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        foreach ($kategori as $key) {
            $kat = $key->id;
        }
        //    return $kat;
        $berita = Berita::paginate(6);
        return view('berita.berita', compact('berita', 'kat'));
    }
    public function create()
    {
        $kategori = Kategori::all();
        return view('berita.createBerita', compact('kategori'));
    }
    public function store(Request $request)
    {
        $file = $request->file('gambar');
        $nama_file = time() . "_" . $file->getClientOriginalName();

        $extend = $file->getClientOriginalExtension();

        $file->move('gambar', $nama_file);

        $berita = Berita::create([
            'gambar' => $nama_file,
            'judul' => $request->judul,
            'kategori_id' => $request->kategori_id,
            'deskripsi' => $request->deskripsi
        ]);
        return redirect()->route('berita.index');
        return redirect()->route('berita.index');
    }
    public function show($id)
    {
        $kategori = Kategori::all();
        foreach ($kategori as $key) {
            $kat = $key->id;
        }
        $berita = Berita::find($id);
        return view('berita.showBerita', compact('kategori', 'berita', 'kat'));
    }
    public function update(Request $request, $id)
    {
        $berita = Berita::find($id);

        $file = $request->file('gambar');
        $nama_file = time() . "_" . $file->getClientOriginalName();

        $file->move('gambar', $file->getClientOriginalName());

        $berita->update([
            'gambar' => $nama_file,
            'judul' => $request->judul,
            'kategori_id' => $request->kategori_id,
            'deskripsi' => $request->deskripsi
        ]);
        return redirect()->route('berita.index');
    }
    public function destroy($id)
    {
        $berita = Berita::find($id);
        $image_path = app_path("gambar/{$berita->gambar}");
        // if (File::exists($image_path)) {
        //     unlink($image_path);
        // }
        File::delete($image_path);
        $berita->delete();

        return redirect()->route('berita.index');
    }
}
