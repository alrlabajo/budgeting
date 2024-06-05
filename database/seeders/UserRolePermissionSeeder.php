<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Permissions
        Permission::create(['name' => 'view role']);
        Permission::create(['name' => 'create role']);
        Permission::create(['name' => 'update role']);
        Permission::create(['name' => 'delete role']);

        Permission::create(['name' => 'view permission']);
        Permission::create(['name' => 'create permission']);
        Permission::create(['name' => 'update permission']);
        Permission::create(['name' => 'delete permission']);

        Permission::create(['name' => 'view user']);
        Permission::create(['name' => 'create user']);
        Permission::create(['name' => 'update user']);
        Permission::create(['name' => 'delete user']);

        Permission::create(['name' => 'view forms']);
        Permission::create(['name' => 'create forms']);
        Permission::create(['name' => 'update forms']);
        Permission::create(['name' => 'delete forms']);


        // Create Roles
        $superAdminRole = Role::create(['name' => 'super-admin']); //as super-admin
        // $adminRole = Role::create(['name' => 'admin']);
        $clientRole = Role::create(['name' => 'staff']);
        // $userRole = Role::create(['name' => 'user']);

        // Lets give all permission to super-admin role.
        $allPermissionNames = Permission::pluck('name')->toArray();

        $superAdminRole->givePermissionTo($allPermissionNames);

        // Let's give few permissions to admin role.
        // $adminRole->givePermissionTo(['create role', 'view role', 'update role']);
        // $adminRole->givePermissionTo(['create permission', 'view permission']);
        // $adminRole->givePermissionTo(['create user', 'view user', 'update user']);
        // $adminRole->givePermissionTo(['create product', 'view product', 'update product']);


        // Let's Create User and assign Role to it.

        $superAdminUser = User::firstOrCreate([
                    'user_id' => '202101340', // Example user_id
                ], [
                    'name' => 'Budgeting Officer',
                    'user_id' => '202101340',
                    'email' => 'budgeting_office@gmail.com',
                    'password' => Hash::make ('password'),
                ]);

        $superAdminUser->assignRole($superAdminRole);


        // $adminUser = User::firstOrCreate([
        //                     'email' => 'admin@gmail.com'
        //                 ], [
        //                     'name' => 'Admin',
        //                     'email' => 'admin@gmail.com',
        //                     'password' => Hash::make ('12345678'),
        //                 ]);

        // $adminUser->assignRole($adminRole);


        $clientUser = User::firstOrCreate([
                            'user_id'=> '202101341', // Example user_id

                        ], [
                            'name' => 'Staff',
                            'user_id'=> '202101341',
                            'email' => 'staff@gmail.com',
                            'password' => Hash::make('12345678'),
                        ]);

        $clientUser->assignRole($clientRole);
    }
}
