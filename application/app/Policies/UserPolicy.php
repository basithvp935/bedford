<?php

namespace App\Policies;

use App\Models\User;

use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
  use HandlesAuthorization;

  public function viewAny(User $user)
  {
    return $user->isAdmin();
  }

  public function create(User $user)
  {
    return $user->isAdmin();
  }

  public function update(User $user, User $model)
  {
    return $user->isAdmin();
  }

  public function delete(User $user, User $model)
  {
    return $user->isAdmin() && $user->id != $model->id;
  }

  public function manageUsers(User $user)
  {
    return $user->isAdmin();
  }

  public function manageItems(User $user)
  {
    return $user->isAdmin() || $user->isCreator();
  }

  public function manageDoctor(User $user)
  {
    return $user->isDoctor();
  }

  public function manageHR(User $user)
  {
    return $user->isHr() || $user->isAdmin();
  }

  public function manageTA(User $user)
  {
    return $user->isTA() || $user->isAdmin();
  }

  public function manageABA(User $user)
  {
    return $user->isABA() || $user->isAdmin();
  }

  public function manageCA(User $user)
  {
    return $user->isCA() || $user->isAdmin();
  }

  public function manageLA(User $user)
  {
    return $user->isLA() || $user->isAdmin();
  }

  public function manageAppointment(User $user)
  {
    return $user->isTA() || $user->isABA()|| $user->isAdmin();
  }
}
