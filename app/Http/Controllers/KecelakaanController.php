<?php

namespace App\Http\Controllers;

use App\Models\Jalan;
use App\Models\Kecelakaan;
use Illuminate\Support\Facades\DB;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class KecelakaanController extends Controller
{
    public function index($slug)
    {
        $jalan = Jalan::where('slug', $slug)->first();
        //  dd($jalan);

        $data = Kecelakaan::with('jalan')->where('jalans_id', $jalan->id)->get();
        // dd($data);

        return view('dashboard.kecelakaan.index', ['data' => $data]);
    }

    public function create($slug)
    {
        $jalan = Jalan::with('kecelakaan')->where('slug', $slug)->first();
        // dd($jalan);
        return view('dashboard.kecelakaan.create', ['data' => $jalan]);
    }

    public function store(Request $request, Jalan $jalan)
    {
        // dd($request);
        $this->validate($request, [
            'tanggal' => 'required',
            'jam' => 'required',
            // 'nama_jalan'=> 'required',
            'km_simpang_gang' => 'required',
            'dusun_desa' => 'required',
            'kecamatan' => 'required',
            'kabupaten' => 'required',
            'kendaraan' => 'required',
            'korban_md' => 'required',
            'korban_lb' => 'required',
            'korban_lr' => 'required',
        ]);


        $data = $request->all();
        $data['nama_jalan'] = $jalan->nama_jalan;
        $data['jalans_id'] = $jalan->id;
        $data['slug'] = SlugService::createSlug(Jalan::class, 'slug', $jalan->nama_jalan,);
        // dd($data);
        Kecelakaan::create($data);

        // dd ($data);
        if ($data) {
            return redirect()
                ->route('jalan.kecelakaan.index', ['jalan' => $jalan->slug])
                ->with([
                    'success' => 'Data Jalan Berhasil Ditambahkan'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occurred, please try again'
                ]);
        }
    }

    public function edit($jalan, $kecelakaan)
    {
        $jalan = Jalan::where('slug', $jalan)->first();
        $kecelakaan = Kecelakaan::where('slug', $kecelakaan)->first();

        // dd($kecelakaan);
        return view('dashboard.kecelakaan.edit', ['jalan' => $jalan, 'kecelakaan' => $kecelakaan]);
    }

    public function update(Request $request,Jalan $jalan, Kecelakaan $kecelakaan)
    {
        // dd($request);
        $this->validate($request, [
            'tanggal' => 'required',
            'jam' => 'required',
            'nama_jalan' => 'required',
            'km_simpang_gang' => 'required',
            'dusun_desa' => 'required',
            'kecamatan' => 'required',
            'kabupaten' => 'required',
            'kendaraan' => 'required',
            'korban_md' => 'required',
            'korban_lb' => 'required',
            'korban_lr' => 'required',
        ]);

        $data = $request->all();
        // dd($data);
        $data['slug'] = SlugService::createSlug(Jalan::class, 'slug', $jalan->nama_jalan,);
        $kecelakaan->update($data);

        if ($data) {
            return redirect()
                ->route('jalan.kecelakaan.index', ['jalan' => $jalan->slug])
                ->with([
                    'success' => 'Data Jalan Berhasil Ditambahkan'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occurred, please try again'
                ]);
        }
    }
    
    public function destroy(Jalan $jalan, Kecelakaan $kecelakaan)
    {
        // $kecelakaan = Kecelakaan::find($id);
        // dd($kecelakaan);
        $kecelakaan->delete();
        if ($kecelakaan) {
            return redirect()
                ->route('jalan.kecelakaan.index', ['jalan' =>$jalan->slug])
                ->with([
                    'success' => 'Data Jalan Berhasil Dihapus'
                ]);
        } else {
            return redirect()
                ->route('post.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}
