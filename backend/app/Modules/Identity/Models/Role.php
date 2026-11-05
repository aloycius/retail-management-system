<?php

namespace App\Modules\Identity\Models;

use Illuminate\Database\Eloquent\Model;
use App\Modules\Identity\Models\Role;
Role::create(['name' => 'owner']);
Role::all();
Role::create(['name' => 'owner']);

class Role extends Model
{
    //defining the Role model
    protected $fillable = [ 'name'];
}


