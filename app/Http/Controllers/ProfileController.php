<?php

namespace App\Http\Controllers;

use App\Models\tim;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Yoeunes\Toastr\Facades\Toastr;

class ProfileController extends Controller
{
    function show()
    {
        $data = DB::table('v_tim_lomba')->where('id_user', Auth::user()->id_user)->get();
        $user = DB::table('v_datapeserta')->where('id_user', Auth::user()->id_user)->first();
        return view('components.Profile.view_profile', compact('data', 'user'));
    }

    public function edit($id)
    {
        $id = Crypt::decrypt($id);
        $user = User::find($id);
        $data = DB::table('v_tim_lomba')
            ->join('v_datapeserta', 'v_tim_lomba.id_user', '=', 'v_datapeserta.id_user')
            ->where('v_tim_lomba.id_user', $id)
            ->get();
        return view('components.Profile.view_profile', compact('user', 'data'));
    }

    public function update(Request $request, $id)
    {
        $id = Crypt::decrypt($id);
        $user = User::find($id);
        $request->validate([
            'nama_peserta' => 'required|string|max:255',
            'email_peserta' => 'required|email|max:255',
            'NoHp_peserta' => 'required|max:13',
            'nama_tim' => 'required|string|max:255',
            'guru_pembimbing' => 'required|string|max:255',
            'asal_sekolah' => 'required|string|max:255'
        ]);

        $user->update([
            'name' => $request->nama_peserta,
            'email' => $request->email_peserta,
            
        ]);

        DB::table('v_tim_lomba')
        ->where('id_user', $id)
        ->update([
            
            'NoHp' => $request->NoHp_peserta,
            'nama_tim' => $request->nama_tim,
            'guru_pembimbing' => $request->guru_pembimbing,
            'asal_sekolah' => $request->asal_sekolah
        ]);
        Toastr::success('Data Berhasil Di Ubah', 'Berhasil');
        return redirect()->route('profile.edit',Crypt::encrypt($id));
    }
}
