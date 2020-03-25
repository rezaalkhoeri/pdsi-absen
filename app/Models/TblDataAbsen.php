<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TblDataAbsen
 * 
 * @property int $ID_ABSENSI
 * @property string $NamaLengkap
 * @property string $StatusPekerja
 * @property string $Nopek
 * @property string $Direktorat
 * @property string $Fungsi
 * @property string $Departemen
 * @property string $MitraKerja
 * @property string $NomorHP
 * @property string $Lokasi
 * @property string $MetodeKerja
 * @property string $ListPekerjaan
 * @property string $Kondisi
 * @property string $KeteranganKondisi
 * @property string $Kendala
 * @property Carbon $TanggalAbsen
 *
 * @package App\Models
 */
class TblDataAbsen extends Model
{
	protected $table = 'tbl_data_absen';
	protected $primaryKey = 'ID_ABSENSI';
	public $timestamps = false;

	protected $dates = [
		'TanggalAbsen'
	];

	protected $fillable = [
		'NamaLengkap',
		'StatusPekerja',
		'Nopek',
		'Direktorat',
		'Fungsi',
		'Departemen',
		'MitraKerja',
		'NomorHP',
		'Lokasi',
		'MetodeKerja',
		'ListPekerjaan',
		'Kondisi',
		'KeteranganKondisi',
		'Kendala',
		'TanggalAbsen'
	];
}
