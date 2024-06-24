<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $primaryKey = 'UserID';
    protected $fillable = ['username', 'password', 'UserType', 'name', 'email'];

    protected $hidden = ['password'];

    public function candidates()
    {
        return $this->hasMany(Candidate::class, 'UserID', 'UserID');
    }

    public function votes()
    {
        return $this->hasMany(Vote::class, 'UserID', 'UserID');
    }
}
