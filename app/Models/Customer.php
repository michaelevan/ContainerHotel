<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // use HasFactory;
    protected $table = "customer";
    protected $primaryKey = "kodecust";
    public $timestamps = false;

    protected $fillable =[
        'kodecust',
        'nama',
        'NIK',
        'asal',
        'telepon',
    ];

    protected $guarded = [

    ];
}
