<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        // Membuat data user pertama dengan informasi tambahan
        User::create([
            'first_name' => 'Zachran',
            'last_name' => 'Razendra',
            'username' => 'zachranraze',
            'email' => 'zachranraze@recodex.id', // Optional jika Anda ingin tetap menyimpan email
            'password' => Hash::make('admin123'), // Ganti dengan password yang sesuai
            'phone_number' => '1234567890', // Contoh phone number
            'address' => '123 Main St', // Contoh alamat
            'country' => 'Indonesia', // Contoh negara
            'state' => 'Jawa Barat', // Contoh provinsi
            'city' => 'Bandung', // Contoh kota
            'zip_code' => '40123', // Contoh kode pos
            'office_phone' => '02123456789', // Contoh office phone
            'organization' => 'Recodex', // Contoh organisasi
            'profile_picture' => 'profile_pictures/zachran.jpg', // Simulasi penyimpanan gambar profile (pastikan gambar sudah ada di folder public)
        ]);

        // Menambahkan lebih banyak data user sesuai kebutuhan
        User::create([
            'first_name' => 'Aulia',
            'last_name' => 'Hanifa',
            'username' => 'aulia.hf',
            'email' => 'aulia@example.com', // Optional
            'password' => Hash::make('admin123'), // Ganti dengan password yang sesuai
            'phone_number' => '0987654321',
            'address' => '456 Another St',
            'country' => 'USA',
            'state' => 'California',
            'city' => 'Los Angeles',
            'zip_code' => '90001',
            'office_phone' => '12345678901',
            'organization' => 'Example Corp',
            'profile_picture' => 'profile_pictures/aulia.jpg', // Gambar profile untuk user kedua
        ]);

        // Anda dapat menambahkan lebih banyak data user sesuai kebutuhan, atau menggunakan factory
    }
}
