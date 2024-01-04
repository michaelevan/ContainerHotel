<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    // use HasFactory;
    protected $table = "users";
    protected $primaryKey = "userid";
    public $timestamps = false;

    protected $fillable =[
        'userid',
        'email',
        'password',
        'nama',
        'role',
        'is_active',
    ];

    protected $guarded = [

    ];
}
