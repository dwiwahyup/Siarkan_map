<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rules;


class RulesController extends Controller
{
    public function index()
    {
        //return dashbord
        $rules = Rules::all();
        // dd($rules);
        return view('dashboard.rules.index', ['rules' => $rules]);
    }

    public function create()
    {
        return view('dashboard.rules.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'jam' => 'required',
            'kepadatan' => 'required',
            'intensitas' => 'required',
            'kondisi_korban' => 'required',
            'tingkat_kerawanan' => 'required',
        ]);

        //insert to table
        $data = $request->all();
        Rules::create($data);
        // dd($data);

        if ($data) {
            return redirect()
                ->route('rules.index')
                ->with([
                    'success' => 'Data Rules Berhasil Ditambahkan',
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem has occured, please try again',
                ]);
        }
    }

    public function edit($id)
    {
        $rules = Rules::findOrFail($id);
        return view('dashboard.rules.edit', ['rules' => $rules]);
    }

    public function update(Request $request, Rules $rule)
    {
        $this->validate($request, [
            'jam' => 'required',
            'kepadatan' => 'required',
            'intensitas' => 'required',
            'kondisi_korban' => 'required',
            'tingkat_kerawanan' => 'required',
        ]);

        //insert to table 
        $data = $request->all();
        // dd($data);
        $rule->update($data);
        // dd($rule);

        if ($rule) {
            return redirect()
                ->route('rules.index')
                ->with([
                    'success' => 'Data Rules Berhasil Diubah',
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem has occured, please try again',
                ]);
        }
    }

    public function destroy($id)
    {
        $rules = Rules::findOrFail($id);
        $rules->delete();

        if ($rules) {
            return redirect()
                ->route('rules.index')
                ->with([
                    'success' => 'Data Rules Berhasil Dihapus',
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem has occured, please try again',
                ]);
        }
    }
}
