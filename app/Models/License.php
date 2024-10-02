<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    use HasFactory;
    protected $table = 'licenses';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'created_by',
        'assignee',
        'status',
        'file_path',
        'email',
        'nama_lengkap',
        'nomor_identitas',
        'upload_identitas',
        'alamat_rumah',
        'nomor_telepon',
        'perkerjaan',
        'nama_perusahaan',
        'alamat_perusahaan',
        'curah_hujan',
        'profile_sungai',
        'topografi',
        'studi_kajian',
        'alokasi_air',
        'lainnya',
        'rincian_informasi',
        'penelitian_ta_tesis',
        'studi_kajian_proyek',
        'lainnya2',
        'upload_data',
        'deadline',
    ];
}
