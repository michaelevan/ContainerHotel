<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    // use HasFactory;
    protected $table = "fasilitas";
    protected $primaryKey = "Kodefasilitas";
    public $timestamps = false;

    protected $fillable =[
        'Kodefasilitas',
        'Namafasilitas',
        'jumlah',
        'harga',
    ];

    protected $guarded = [

    ];
}
