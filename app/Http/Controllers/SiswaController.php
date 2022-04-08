<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SiswaController extends Controller
{
    public function show_register()
    {
        // return redirect()->route('login')->with('msg','aaaaa');
        return view('register_siswa');
    }

    public function register(Request $request)
    {
        // dd($request->all());
        $cre = $request->validate([
            'email' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
            'jenis_pendaftaran' => 'required',
            'jalur_pendaftaran' => 'required',
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'nik' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'alamat_jalan' => 'required',
            'kabupaten' => 'required',
            'nomor_hp' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'pernyataan' => 'required',
            'kewarganegaraan' => 'required'
        ]);

        $user = User::create([
            'name' => $request['nama_lengkap'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'is_admin' => '0',
        ]);

        $siswa = Siswa::create($request->all());
        $siswa->id_user = $user->id;


        if ($request->foto) {
            $filename = time() . '.' . $request->foto->getClientOriginalExtension();
            $request->foto->move(public_path('fotos'), $filename);
            $siswa->foto = $filename;
        }


        $siswa->save();
        



        // dd($cre);

        return redirect()->route('login')->with('msg','aaaaa');
    }



    public function show_data_diri(){

        $siswa = Siswa::where('id_user','=',auth()->user()->id)->first();


        return view('siswa.detail',compact('siswa'));
        // dd($siswa);
    }

    public function save(Request $request){
        // dd($request->all());
        $cre = $request->validate([
            'jenis_pendaftaran' => 'required',
            'jalur_pendaftaran' => 'required',
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'nik' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'alamat_jalan' => 'required',
            'kabupaten' => 'required',
            'nomor_hp' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'kewarganegaraan' => 'required'
        ]);
        $siswa = Siswa::where('id_user','=',auth()->user()->id)->first();
        $siswa->fill($request->all());

        if ($request->foto) {
            $filename = time() . '.' . $request->foto->getClientOriginalExtension();
            $request->foto->move(public_path('fotos'), $filename);
            $siswa->foto = $filename;
        }

        $siswa->save();

        return redirect()->route('siswa');

        // dd($request->all());
    }

    public function export(){

        $siswa = Siswa::where('id_user','=',auth()->user()->id)->first();
        // if($siswa->stat)
        return view('siswa.Pdf',compact('siswa'));
    }
}
