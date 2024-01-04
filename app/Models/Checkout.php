<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;
    protected $table = "checkout";
    protected $primaryKey = "kodecheckout";
    public $timestamps = false;

    protected $fillable =[
        'Kodecin',
        'Tglcheckout',
        'grandtotal',
    ];

    protected $guarded = [

    ];
}
