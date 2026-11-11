<?php

namespace Database\Seeders;

use App\Models\User;
use App\Modules\Identity\Models\Business;
use App\Modules\Identity\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);

        $shop = Business::create(['name' => 'Demo Bookshop']);

        $owner = User::factory()->for($shop)->create([
            'name' => 'Demo Owner',
            'email' => 'owner@example.com',
        ]);

        $owner->roles()->attach(Role::where('name', 'owner')->first());
    }
}
