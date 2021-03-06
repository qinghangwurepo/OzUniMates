<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Student extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;
    protected $table = 'students';
    protected $fillable = ['username','password','email','degree','avatar','avatar_small','description','activated','notification'];

    public function universities()
    {
        return $this->belongsToMany('App\University','student_university');
    }

    public function majors()
    {
        return $this->belongsToMany('App\Major','student_major');
    }
}
