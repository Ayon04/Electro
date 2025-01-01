<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // Correctly extend the base class
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory,Notifiable;
    

    protected $table = 'users';
    public $timestamps = false;
    protected $fillable = ['fullname', 'email', 'password'];

    /**
     * Mutator to hash the password before saving.
     *
     * @param string $value
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
}
