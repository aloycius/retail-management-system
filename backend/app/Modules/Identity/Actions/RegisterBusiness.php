<?php

namespace App\Modules\Identity\Actions;

use App\Models\User;
use App\Modules\Identity\Models\Business;
use App\Modules\Identity\Models\Role;
use Illuminate\Support\Facades\DB;

class RegisterBusiness
{
    /**
     * Create a business together with its owner account.
     *
     * @param  array{business_name: string, name: string, email: string, password: string}  $data
     */
    public function handle(array $data): User
    {
        return DB::transaction(function () use ($data): User {
            $business = Business::create(['name' => $data['business_name']]);

            $owner = $business->users()->create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => $data['password'],
            ]);

            $owner->roles()->attach(Role::where('name', 'owner')->firstOrFail());

            return $owner;
        });
    }
}
