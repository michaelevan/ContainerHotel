<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkin extends Model
{
    use HasFactory;
    protected $table = "hcheckin";
    protected $primaryKey = "kodecin";
    public $timestamps = false;

    protected $fillable =[
        'kodecust',
        'tglcin',
        'tipekamar',
        'jamcin',
        'nokamar',
        'tglcout',
        'subtotal',
        'status',
    ];

    protected $guarded = [

    ];
}
