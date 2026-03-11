<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::firstOrCreate(
        //     ['email' => 'admin@mail.com'],
        //     [
        //         'name' => 'Admin',
        //         'password' => Hash::make('password'),
        //         'status' => 'active',
        //         'phone' => '+6281234567890',
        //         'address' => 'Jl. Raya No. 123, Jakarta',
        //         'email_verified_at' => now(),
        //     ]
        // );

        // Reset cached roles & permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // =========================
        // Create Roles
        // =========================
        Role::firstOrCreate([
            'name' => 'super-admin',
            'guard_name' => 'web'
        ]);

        Role::firstOrCreate([
            'name' => 'user',
            'guard_name' => 'web'
        ]);

        // =========================
        // Create Super Admin User
        // =========================
        $user = User::firstOrCreate(
            ['email' => 'superadmin@mail.com'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('password'),
                'status' => 'active',
                'phone' => '+6281234567890',
                'address' => 'Jl. Raya No. 123, Jakarta',
                'email_verified_at' => now(),
            ]
        );

        // =========================
        // Assign Role (safe)
        // =========================
        $user->syncRoles(['super-admin']);
    }
}
