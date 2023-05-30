<?php

namespace App\Http\Controllers;

use App\Models\ArusLantas;
use App\Models\Jalan;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArusLantasController extends Controller
{
    public function index($slug)
    {
        $jalan = Jalan::where('slug', $slug)->first();
        // dd($jalan);

        $data = ArusLantas::with('jalan')->where('id', $jalan->id)->get();
        // dd($data);
        return view('dashboard.arus_lantas.index', ['data' => $data]);
    }

    public function create($slug)
    {
        $jalan = Jalan::with('arusLantas')->where('slug', $slug)->first();
        // return $jalan;
        // $jalan = Jalan::all();

        return view('dashboard.arus_lantas.create', ['jalan' => $jalan]);
    }

    public function store(Request $request, Jalan $jalan)
    {
        // dd($jalan);
        $this->validate($request, [
            // 'nama_jalan'=> 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'arah_1' => 'required',
            'arah_2' => 'required',
            'total_arah_1' => 'required',
            'total_arah_2' => 'required',
            'total_2_arah' => 'required',
        ]);

        // $nama_jalan = Jalan::where('id', $request->jalans_id)->first()->nama_jalan;

        $data = $request->all();
        $data['nama_jalan'] = $jalan->nama_jalan;
        $data['jalans_id'] = $jalan->id;
        $data['slug'] = SlugService::createSlug(Jalan::class, 'slug', $jalan->nama_jalan,);
        ArusLantas::create($data);

        // dd($data);
        if ($data) {
            return redirect()
                ->route('jalan.aruslantas.index', ['jalan' => $jalan->slug])
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

    public function edit($jalan, $aruslanta)
    {
        // dd($aruslanta);
        $jalan = Jalan::where('slug', $jalan)->first();
        $aruslanta = ArusLantas::where('slug', $aruslanta)->first();

        // $data = DB::table('arus_lantas')->where('slug', $slug)->first();
        // $jalan = Jalan::all();

        return view('dashboard.arus_lantas.edit', ['jalan' => $jalan, 'aruslantas' => $aruslanta]);

        // return view('dashboard.arus_lantas.edit', ['data' => $data], ['dataa' => $jalan]);
    }

    public function update(Request $request, Jalan $jalan, ArusLantas $aruslanta)
    {
        // dd($aruslanta);
        $this->validate($request, [
            'nama_jalan' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'arah_1' => 'required',
            'arah_2' => 'required',
            'total_arah_1' => 'required',
            'total_arah_2' => 'required',
            'total_2_arah' => 'required',
        ]);


        $data = $request->all();
        $aruslanta->update($data);

        // dd ($request);
        if ($data) {
            return redirect()
                ->route('jalan.aruslantas.index', ['jalan' => $jalan->slug])
                ->with([
                    'success' => 'Data Berhasil Di Update'
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

    public function destroy(Jalan $jalan, ArusLantas $aruslanta)
    {
        // dd($aruslanta);
        $aruslanta->delete();
        if ($aruslanta) {
            return redirect()
                ->back()
                ->with([
                    'success' => 'Data Berhasil Dihapus'
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
