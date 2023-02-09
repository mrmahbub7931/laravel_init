<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate([
            'role_id'   => Role::where('slug','super-admin')->first()->id,
            'name'      => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('secret12')
        ]);

        User::updateOrCreate([
            'role_id'   => Role::where('slug','user')->first()->id,
            'name'      => 'User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('secret12')
        ]);
    }
}
