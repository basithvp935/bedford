<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;

use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Models\Doctor;

class User extends Authenticatable
{
  use Notifiable;

  protected $fillable = ['name', 'email', 'password', 'picture', 'role_id'];

  protected $hidden = ['password', 'remember_token'];

  public function role()
  {
    return $this->belongsTo(Role::class);
  }


  public function profilePicture()
  {
    if ($this->picture) {
      return "/storage/{$this->picture}";
    }

    return 'http://i.pravatar.cc/200';
  }

  public function isAdmin()
  {
    return $this->role_id == 1;
  }

  public function isDoctor()
  {
    return $this->role_id == 2;
  }

  public function isHR()
  {
    return $this->role_id == 3;
  }

  public function doctor()
  {
    return $this->hasOne(Doctor::class);
  }

  public function isTA()
  {
    return $this->role_id == 4;
  }

  public function isABA()
  {
    return $this->role_id == 5;
  }

  public function isCA()
  {
    return $this->role_id == 6;
  }

  public function isLA()
  {
    return $this->role_id == 7;
  }
}
