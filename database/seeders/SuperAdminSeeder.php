<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {// Ensure roles exist
        $roles = ['super_admin', 'student'];

        foreach ($roles as $roleName) {
            Role::firstOrCreate(['name' => $roleName]);
        }

        // Create or retrieve the super admin user
        $user = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Super Admin',
                'password' => bcrypt('password'),
                'role' => 'super_admin'
            ]
        );

        // Assign 'super_admin' role if not already assigned
        if (!$user->hasRole('super_admin')) {
            $user->assignRole('super_admin');

            $role = Role::firstOrCreate(['name' => 'super_admin']);

            $permissions = Permission::pluck('id','id')->all();
        
            $role->syncPermissions($permissions);
        }

    }
}
