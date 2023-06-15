<?php

namespace App\Http\Controllers;

use App\Models\Jalan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Cviebrock\EloquentSluggable\Services\SlugService;

class JalanController extends Controller
{
    public function index()
    {
        $data = Jalan::all();
        // dd($data);
        return view('dashboard.jalan.index', ['data' => $data]);
    }

    public function create()
    {
        return view('dashboard.jalan.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_jalan' => 'required',
            'status_jalan' => 'required',
        ]);

        //insert to table
        $data = $request->all();
        $data['slug'] = Slugservice::createslug(Jalan::class, 'slug', $request->nama_jalan);
        Jalan::create($data);

        // dd ($data);
        if ($data) {
            return redirect()
                ->route('jalan.index')
                ->with([
                    'success' => 'Data Jalan Berhasil Ditambahkan',
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occurred, please try again',
                ]);
        }
    }

    public function edit($slug)
    {
        $data = DB::table('jalans')
            ->where('slug', $slug)
            ->first();

        return view('dashboard.jalan.edit', ['data' => $data]);
        // return view('dashboard.jalan.edit');
    }

    public function update(Request $request, Jalan $jalan)
    {
        $this->validate($request, [
            'nama_jalan' => 'required',
            'status_jalan' => 'required',
        ]);

        //insert to table
        $data = $request->all();
        $data['slug'] = Slugservice::createslug(Jalan::class, 'slug', $request->nama_jalan);
        $jalan->update($data);
        // dd($jalan);

        // dd ($data);
        if ($data) {
            return redirect()
                ->route('jalan.index')
                ->with([
                    'success' => 'Data Jalan Berhasil Terupdate',
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem has occured, please try again',
                ]);
        }
        // return redirect('/jalan')->with('data Berhasil Di Update');
    }

    public function destroy(Jalan $jalan)
    {
        $jalan->delete();
        if ($jalan) {
            return redirect()
                ->route('jalan.index')
                ->with([
                    'success' => 'Data Jalan Berhasil Dihapus',
                ]);
        } else {
            return redirect()
                ->route('post.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again',
                ]);
        }
        // return redirect('/jalan');
    }
}
