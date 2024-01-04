<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    // use HasFactory;
    protected $table = "menu";
    protected $primaryKey = "Kodemenu";
    public $timestamps = false;

    protected $fillable =[
        'Kodemenu',
        'Kodekategorimenu ',
        'Harga',
        'Namamenu',
    ];

    protected $guarded = [

    ];
}
