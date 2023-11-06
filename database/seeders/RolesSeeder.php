<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create roles and assign created permissions
        $createRoles = [
            ['uuid' => Str::uuid(), 'name' => 'admin'],
            ['uuid' => Str::uuid(), 'name' => 'user'],
        ];

        $permissions = [
            ['create post', 'update post', 'delete post', 'block user', 'block post'],
            ['create post', 'update post', 'delete post'],
        ];

        foreach ($createRoles as $index => $roles) {
            $role = Role::create($roles);
            $role->givePermissionTo($permissions[$index]);
        }
    }
}
