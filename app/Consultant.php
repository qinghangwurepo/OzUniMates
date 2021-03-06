<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Consultant extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;
    protected $table = 'consultants';
    protected $fillable = ['username','password','email','degree','university','major','specilization','thanks','avatar','avatar_small','ispro','description','activated','notification'];

    public function tags() {
    	return $this->belongsToMany('App\Tag');
    }
}
