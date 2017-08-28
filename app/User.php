<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Role;

class User extends Authenticatable
{
    use Notifiable;
    protected $fillable = ['name', 'email', 'password',];
    protected $hidden = ['password', 'remember_token',];

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_users');
    }

    /** * Checks if User has access to $permissions. */
    public function hasAccess(array $permissions): bool
    {
        // check if the permission is available in any role
        foreach ($this->roles as $role) {
            if ($role->hasAccess($permissions)) {
                return true;
            }
        }
        return false;
    }

    /** * Checks if the user belongs to role. */
    public function inRole(string $roleSlug)
    {
        return $this->roles()->where('slug', $roleSlug)->count() == 1;
    }

    public function setRole(string $roleSlug): bool
    {
        $retval  = false;
        //$this->roles()->attach($roleId);
        foreach(Role::all() as $role){
            if($role['slug']==$roleSlug){
                $this->roles()->attach($role['id']);
                $retval = true;
                break;
            }
        }
        return $retval;

    }


}
