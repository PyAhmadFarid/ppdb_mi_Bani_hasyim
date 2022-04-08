<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function show_dashboard(Request $request)
    {
        $tahun_awal = Siswa::orderBy('created_at', 'ASC')->first()->created_at->year;

        $tahun = $request->tahun ?? $tahun_awal;


        $data_pertahun = array_fill(0, 12, 0);
        $pendding = 0;
        $lulus = 0;
        $tidaklulus = 0;
        // dd($data_pertahun);
        // $siswa = Siswa::all()->count();
        $siswa = Siswa::whereYear('created_at', '=', $tahun)->get();
        // dd((string)$siswa[1]->status == null);
        foreach ($siswa as $sw) {
            $data_pertahun[$sw->created_at->month - 1] += 1;
            // dd($sw->status);
            if ((string)$sw->status == "0") {
                $lulus += 1;
            } elseif ((string)$sw->status == "1") {
                $tidaklulus += 1;
            } else  {
                $pendding += 1;
            }
        }

        // $data_pertahun = array_values($data_pertahun);

        // dd($data_pertahun,$pendding,$lulus,$tidaklulus);
        // dd($siswa->get());

        return view('admin.dashboard', compact('tahun_awal', 'data_pertahun', 'pendding', 'lulus', 'tidaklulus'));
    }

    public function show_siswa(Request $request)
    {
        $siswa = Siswa::where('nama_lengkap', 'like', '%' . $request->nama . '%');

        if ($request->tahun) {
            $siswa = $siswa->whereYear('created_at', $request->tahun);
        }
        if ($request->jenis_pendaftaran) {
            $siswa = $siswa->where('jenis_pendaftaran', '=', $request->jenis_pendaftaran);
        }

        if ($request->jalur_pendaftaran) {
            $siswa = $siswa->where('jalur_pendaftaran', '=', $request->jalur_pendaftaran);
        }


        $siswa = $siswa->paginate(10);


        return view('admin.siswa', compact('siswa'));
    }

    public function show_detail_siswa($id)
    {

        $siswa = Siswa::find($id);

        return view('admin.detail_siswa', compact('siswa'));
    }

    public function set_siswa_status(Request $request, $id)
    {
        $siswa = Siswa::find($id);
        $siswa->status = $request->status;
        $siswa->save();

        return redirect()->route('siswa');
    }

    public function apply(Request $request)
    {
        $sw = $request->validate([
            'siswa' => 'required'
        ]);

        // dd($sw[1]);
        foreach ($sw['siswa'] as $idx => $s) {
            $siswa = Siswa::find($idx);
            $siswa->status = $request->status;
            $siswa->save();
        }

        return redirect()->back();
    }
}
