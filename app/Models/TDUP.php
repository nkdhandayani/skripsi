<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TDUP extends Model
{
    use HasFactory;

    protected $table = "tdup";

    public $fillable = [
    	'id_bpw',
        'no_tdup',
        'tanggal',
        'ms_berlaku',
        'file_tdup',
        'sts_verifikasi',
        'keterangan',
        'tgl_verifikasi',
        'status',
    ];
}
