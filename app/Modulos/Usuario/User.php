<?php

namespace App\Modulos\Usuario;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;
    use EntrustUserTrait {
		EntrustUserTrait::restore insteadof SoftDeletes;
	}

    protected $fillable = ['name', 'email', 'password'];
    protected $hidden = ['password', 'remember_token'];
    protected $dates = ['deleted_at'];
}
