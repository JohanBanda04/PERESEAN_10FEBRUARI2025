<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class UserModel extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "tbl_user";
    protected $primaryKey = "id_user";

    protected $guarded = [
        'id_user',

    ];

//    protected $fillable = [
//
//        'nama_satker',
//        'email_satker',
//        'password',
//        'no_hp',
//        'roles',
//
//    ];


//    protected $hidden = [
//        'password',
//        'remember_token',
//    ];
//
//
    protected $casts = [
        //'email_verified_at' => 'datetime',
        'tgl_update' => 'datetime',
    ];
}
