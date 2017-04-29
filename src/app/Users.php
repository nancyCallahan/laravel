<?php namespace App;

use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Users extends BaseModel implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    protected $table = 'users';
    protected $class = \App\Users::class;
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'id',
        'password',
        'remember_token',
    ];

    public static $rules = [
        'name' => 'sometimes|required',
        'email' => 'sometimes|required',
        'password' => 'sometimes|required|min:8'
    ];

    public function setPasswordAttribute($password) {
        $this->attributes['password'] = Hash::make($password);
    }
}
