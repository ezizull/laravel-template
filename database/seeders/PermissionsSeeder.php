<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        $createPermissions = [
            ['uuid' => Str::uuid(), 'name' => 'block user'],
            ['uuid' => Str::uuid(), 'name' => 'block post'],
            ['uuid' => Str::uuid(), 'name' => 'create post'],
            ['uuid' => Str::uuid(), 'name' => 'update post'],
            ['uuid' => Str::uuid(), 'name' => 'delete post'],
        ];

        foreach ($createPermissions as $permissions) {
            Permission::create($permissions);
        }
    }
}
