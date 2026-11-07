<?php

namespace App\Modules\Identity\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Business extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'tax_id', 'status'];

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
