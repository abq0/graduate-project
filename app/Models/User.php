<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    use HasFactory;
    protected $table = 'users';

    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'isAdmin',
        'password',
        'mobileNumber',
        'office_id',
        'city',
    ];

}
