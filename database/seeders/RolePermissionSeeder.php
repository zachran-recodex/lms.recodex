<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Daftar permission yang akan dibuat
        $permissions = [
            'manage modules',
            'manage articles',
            'see modules',
            'see articles',
        ];

        // Membuat permission jika belum ada
        foreach ($permissions as $permission) {
            Permission::firstOrCreate([
                'name' => $permission,
            ]);
        }

        // Membuat role 'admin'
        $adminRole = Role::firstOrCreate([
            'name' => 'admin',
        ]);

        // Membuat role 'client'
        $clientRole = Role::firstOrCreate([
            'name' => 'client',
        ]);

        // Membuat role 'mentor'
        $mentorRole = Role::firstOrCreate([
            'name' => 'mentor',
        ]);

        // Daftar permission untuk role 'client'
        $clientPermissions = [
            'see modules',
            'see articles',
        ];

        // Mengatur permission untuk role 'client'
        $clientRole->syncPermissions($clientPermissions);

        // Daftar permission untuk role 'mentor'
        $mentorPermissions = [
            'manage modules',
        ];

        // Mengatur permission untuk role 'mentor'
        $mentorRole->syncPermissions($mentorPermissions);

        // Membuat user Admin jika belum ada
        $admin = User::firstOrCreate(
            ['username' => 'admin'],
            [
                'first_name' => 'Admin',
                'last_name' => 'User',
                'email' => 'admin@example.com',
                'password' => bcrypt('admin123'),
                'phone_number' => '123456789',
                'address' => 'Admin Street',
                'country' => 'Indonesia',
                'state' => 'Jakarta',
                'city' => 'Jakarta',
                'zip_code' => '12345',
                'office_phone' => '021123456',
                'organization' => 'AdminCorp',
                'profile_picture' => 'admin.jpg',
            ]
        );

        // Assign role 'admin' ke Admin
        $admin->assignRole($adminRole);

        // Membuat user untuk role 'client' jika belum ada
        $client = User::firstOrCreate(
            ['username' => 'client'],
            [
                'first_name' => 'Client',
                'last_name' => 'User',
                'email' => 'client@example.com',
                'password' => bcrypt('client123'),
                'phone_number' => '987654321',
                'address' => 'Client Street',
                'country' => 'Indonesia',
                'state' => 'Bandung',
                'city' => 'Bandung',
                'zip_code' => '54321',
                'office_phone' => '022987654',
                'organization' => 'ClientCorp',
                'profile_picture' => 'client.jpg',
            ]
        );

        // Assign role 'client' ke Client User
        $client->assignRole($clientRole);

        // Membuat user untuk role 'mentor' jika belum ada
        $mentor = User::firstOrCreate(
            ['username' => 'mentor'],
            [
                'first_name' => 'Mentor',
                'last_name' => 'User',
                'email' => 'mentor@example.com',
                'password' => bcrypt('mentor123'),
                'phone_number' => '555555555',
                'address' => 'Mentor Street',
                'country' => 'Indonesia',
                'state' => 'Surabaya',
                'city' => 'Surabaya',
                'zip_code' => '67890',
                'office_phone' => '031555555',
                'organization' => 'MentorOrg',
                'profile_picture' => 'mentor.jpg',
            ]
        );

        // Assign role 'mentor' ke Mentor User
        $mentor->assignRole($mentorRole);
    }
}
