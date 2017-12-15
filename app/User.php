<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Mail\Notifications\ResetPasswordNotification;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

    public function articles()
    {
        return $this->hasMany('App\Models\Article');
    }

    public function isATeamManager()
    {
        return false;
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    /*public function getRouteKeyName()
    {
        return 'email';
    }*/
}
