<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
    app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

    // Create permissions
    Permission::create(['name' => 'manage-users']);
    Permission::create(['name' => 'manage-jobs']);
    Permission::create(['name' => 'approve-companies']);
    Permission::create(['name' => 'create-jobs']);
    Permission::create(['name' => 'edit-jobs']);
    Permission::create(['name' => 'delete-jobs']);
    Permission::create(['name' => 'apply-jobs']);
    Permission::create(['name' => 'subscribe-jobs']);

    // Create roles and assign permissions
    $admin = Role::create(['name' => 'admin']);
    $admin->givePermissionTo(['manage-users', 'manage-jobs', 'approve-companies']);

    $company = Role::create(['name' => 'company']);
    $company->givePermissionTo(['create-jobs', 'edit-jobs', 'delete-jobs']);

    $candidate = Role::create(['name' => 'candidate']);
    $candidate->givePermissionTo(['apply-jobs', 'subscribe-jobs']);
    }
}
