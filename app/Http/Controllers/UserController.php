<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view('dashboard.user.index', ['data' => $data]);
    }

    public function edit($id)
    {
        $data = User::find($id);
        return view('dashboard.user.edit', ['data' => $data]);
    }
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => 'required',
            //'email' => 'required',
            'role' => 'required',
        ]);

        //insert to table
        $data = $request->all();
        $user->update($data);
        // dd($data);

        if ($data) {
            return redirect()
                ->route('user.index')
                ->with([
                    'success' => 'Data User Berhasil Terupdate',
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
        $data = User::find($id);
        $data->delete();

        if ($data) {
            return redirect()
                ->route('user.index')
                ->with([
                    'success' => 'Data User Berhasil Terhapus',
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
