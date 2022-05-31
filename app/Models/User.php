<?php

namespace App\Models;

use App\Http\Middleware\Authenticate as MiddlewareAuthenticate;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as AuthUsers;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends AuthUsers
{
    use HasFactory;

    protected $table='tb_users';
    protected $primaryKey='id';
}
