<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    // use HasFactory;
    protected $table = "voucher";
    protected $primaryKey = "kode";
    public $timestamps = false;

    protected $fillable =[
        'kode',
        'nama',
        'potongan',
        'tglAwal',
        'tglAkhir',
        'status',
    ];

    protected $guarded = [

    ];
}
