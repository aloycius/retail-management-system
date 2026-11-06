<?php

namespace App\Modules\Identity\Models;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'tax_id', 'status'];
}
