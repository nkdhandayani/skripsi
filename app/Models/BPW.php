<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class BPW extends Authenticatable
{
    use HasFactory;

    protected $table = "bpw";
    protected $primaryKey = "id_bpw";

    public $fillable = [
    	'id_user',
    	'nm_bpw',
        'username',
        'password',
        'email',
        'alamat',
        'kabupaten',
        'no_telp',
        'no_fax',
        'nm_pic',
        'nm_pimpinan',
        'jns_bpw',
        'sts_kantor',
        'nib',
        'foto_bpw',
        'status',
    ];

    protected $hidden = [
        'password',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tdup()
    {
        return $this->hasMany(TDUP::class);
    }

    public function izin()
    {
        return $this->hasMany(Izin::class);
    }

    public function lku()
    {
        return $this->hasMany(LKU::class);
    }
}
