<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Create roles if they don't exist
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $companyRole = Role::firstOrCreate(['name' => 'company']);
        $candidateRole = Role::firstOrCreate(['name' => 'candidate']);

        // Create Admin User
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);
        $admin->assignRole($adminRole);

        // Create Company User
        $company = User::create([
            'name' => 'Company User',
            'email' => 'company@example.com',
            'password' => bcrypt('password'),
        ]);
        $company->assignRole($companyRole);

        // Create Candidate User
        $candidate = User::create([
            'name' => 'Candidate User',
            'email' => 'candidate@example.com',
            'password' => bcrypt('password'),
        ]);
        $candidate->assignRole($candidateRole);

        $this->command->info('Users created successfully!');
    }
}