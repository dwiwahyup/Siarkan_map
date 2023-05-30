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
    public function index()
    {
        $data = Kecelakaan::all();
        return view('dashboard.kecelakaan.index' ,['data'=>$data]);
    }

    public function create()
    {
        $jalan = Jalan::all();
        // dd($jalan);
        return view('dashboard.kecelakaan.create', ['data' => $jalan]);
    }

    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'tanggal'=> 'required',
            'jam'=> 'required',
            // 'nama_jalan'=> 'required',
            'km_simpang_gang'=> 'required',
            'dusun_desa'=> 'required',
            'kecamatan'=> 'required',
            'kabupaten'=> 'required',
            'kendaraan'=> 'required',
            'korban_md'=> 'required',
            'korban_lb'=> 'required',
            'korban_lr'=> 'required',
        ]);

        $nama_jalan = Jalan::where('id', $request->jalans_id)->first()->nama_jalan;

        $data = $request->all();
        $data['nama_jalan'] = $nama_jalan;
        $data['slug'] = SlugService::createSlug(Jalan::class, 'slug', $nama_jalan,);
        Kecelakaan::create($data);
        
        // dd ($data);
        if ($data) {
            return redirect()
                ->route('kecelakaan.index')
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

    public function edit($slug)
    {
        $data = DB::table('kecelakaans')->where('slug', $slug)->first();
        $jalan = Jalan::all();

        return view('dashboard.kecelakaan.edit', ['data' => $data], ['dataa' => $jalan]);
    }

        public function update(Request $request, Kecelakaan $kecelakaan)
    {
        // dd($request);
        $this->validate($request, [
            'tanggal'=> 'required',
            'jam'=> 'required',
            'nama_jalan'=> 'required',
            'km_simpang_gang'=> 'required',
            'dusun_desa'=> 'required',
            'kecamatan'=> 'required',
            'kabupaten'=> 'required',
            'kendaraan'=> 'required',
            'korban_md'=> 'required',
            'korban_lb'=> 'required',
            'korban_lr'=> 'required',
        ]);


        $data = $request->all();
        $data['slug'] = SlugService::createSlug(Kecelakaan::class, 'slug', $request->nama_jalan);
        $kecelakaan->update($data);
        
        // dd ($data);

        if ($data) {
            return redirect()
                ->route('kecelakaan.index')
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
    public function destroy(Kecelakaan $kecelakaan)
    {
        $kecelakaan->delete();
        if ($kecelakaan) {
            return redirect()
                ->route('kecelakaan.index')
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
