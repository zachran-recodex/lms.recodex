<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role; // Import Role model if using Spatie Permission

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ensure that the 'client' role exists
        $clientRole = Role::firstOrCreate(['name' => 'client']);

        $clients = [
            [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'username' => 'john_doe',
                'email' => 'john.doe@example.com',
                'password' => Hash::make('password123'),
                'phone_number' => '1234567890',
            ],
            [
                'first_name' => 'Jane',
                'last_name' => 'Smith',
                'username' => 'jane_smith',
                'email' => 'jane.smith@example.com',
                'password' => Hash::make('password456'),
                'phone_number' => '0987654321',
            ],
        ];

        foreach ($clients as $client) {
            $user = User::create($client);
            // Assign the "client" role to the user
            $user->assignRole($clientRole);
        }
    }
}
