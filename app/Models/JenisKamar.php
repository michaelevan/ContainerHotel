<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisKamar extends Model
{
    // use HasFactory;
    protected $table = "jeniskamar";
    protected $primaryKey = "Kodejenis";
    public $timestamps = false;

    protected $fillable =[
        'Kodejenis',
        'Namajenis',
        'harga',
    ];

    protected $guarded = [

    ];
}
