<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TblDataAbsen;
use Illuminate\Support\Facades\Session;
use DB;

class SubmitController extends Controller
{
    //
    public function home(Request $request)
    {
        return view('absen.form-absen');
    }

    public function submit(Request $request)
    {
        $nama                   = $request->get('namaLengkap');
        $statusPekerja          = $request->get('statusPekerja');
        $nomorPekerja           = $request->get('nomorPekerja');
        $direktorat             = $request->get('direktorat');
        $fungsi                 = $request->get('fungsi');
        $departemen             = $request->get('departemen');
        $perusahaanMK           = $request->get('perusahaanMitra');
        $nomorHP                = $request->get('nomorHP');
        $lokasi                 = $request->get('lokasi');
        $otherLokasi            = $request->get('otherLokasi');
        $metodeKerja            = $request->get('metodeKerja');
        $otherMetodeKerja       = $request->get('otherMetodeKerja');
        $listPekerjaan          = $request->get('listPekerjaan');
        $otherListPekerjaan     = $request->get('otherListPekerjaan');
        $kondisi                = $request->get('kondisi');
        $noteKondisi            = $request->get('noteKondisi');
        $kendala                = $request->get('kendala');

        $dataLokasi;
        if ($lokasi !== 'Other') {
            $dataLokasi = $lokasi;
        } else {
            $dataLokasi = $otherLokasi;
        }
        
        $dataMetodeKerja;
        if ($metodeKerja !== 'Other') {
            $dataMetodeKerja = $metodeKerja;
        } else {
            $dataMetodeKerja = $otherMetodeKerja;
        }

        $dataListKerja;
        if ($otherListPekerjaan !== null) {
            $dataListKerja = implode(", ", $listPekerjaan).', '.$otherListPekerjaan;
        } else {
            $dataListKerja = implode(", ", $listPekerjaan);
        }
                
        $data = array(
            'NamaLengkap' => $nama,
            'StatusPekerja' => $statusPekerja,
            'NoPek' => $nomorPekerja,
            'Direktorat' => $direktorat,
            'Fungsi' => $fungsi,
            'Departemen' => $departemen,
            'MitraKerja' => $perusahaanMK,
            'NomorHP' => $nomorHP,
            'Lokasi' => $dataLokasi,
            'MetodeKerja' => $dataMetodeKerja,
            'ListPekerjaan' => $dataListKerja,
            'Kondisi' => $kondisi,
            'KeteranganKondisi' => $noteKondisi,
            'Kendala' => $kendala
        );

        DB::table('tbl_data_absen')->insert($data);

        Session::flash('message', 'Berhasil absen!');
        Session::flash('type', 'success');
        return redirect(route('form-absen'));
    }
}
