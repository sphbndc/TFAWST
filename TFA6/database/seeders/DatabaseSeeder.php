<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $customers = [
            ['full_name' => 'Mara Santos', 'email' => 'mara.santos@example.com', 'phone' => '0917 555 0142'],
            ['full_name' => 'Paolo Reyes', 'email' => 'paolo.reyes@example.com', 'phone' => '0918 555 0228'],
            ['full_name' => 'Angela Dela Cruz', 'email' => 'angela.delacruz@example.com', 'phone' => '0920 555 0316'],
            ['full_name' => 'Luis Villanueva', 'email' => 'luis.villanueva@example.com', 'phone' => '0919 555 0477'],
            ['full_name' => 'Bea Navarro', 'email' => 'bea.navarro@example.com', 'phone' => '0922 555 0589'],
        ];

        foreach ($customers as $customer) {
            Customer::firstOrCreate(
                ['email' => $customer['email']],
                ['full_name' => $customer['full_name'], 'phone' => $customer['phone'], 'created_at' => now()->toDateTimeString()]
            );
        }

        $users = [
            ['username' => 'amartinez', 'full_name' => 'Ari Martinez'],
            ['username' => 'jlim', 'full_name' => 'Jonah Lim'],
            ['username' => 'rgarcia', 'full_name' => 'Rina Garcia'],
            ['username' => 'tromero', 'full_name' => 'Theo Romero'],
            ['username' => 'ncastillo', 'full_name' => 'Nica Castillo'],
        ];

        foreach ($users as $user) {
            User::firstOrCreate(
                ['username' => $user['username']],
                ['full_name' => $user['full_name'], 'created_at' => now()->toDateTimeString()]
            );
        }
    }
}
