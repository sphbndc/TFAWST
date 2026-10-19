<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            ['full_name' => 'Mara Santos', 'email' => 'mara.santos@example.com', 'phone' => '0917 555 0142'],
            ['full_name' => 'Paolo Reyes', 'email' => 'paolo.reyes@example.com', 'phone' => '0918 555 0228'],
            ['full_name' => 'Angela Dela Cruz', 'email' => 'angela.delacruz@example.com', 'phone' => '0920 555 0316'],
            ['full_name' => 'Luis Villanueva', 'email' => 'luis.villanueva@example.com', 'phone' => '0919 555 0477'],
            ['full_name' => 'Bea Navarro', 'email' => 'bea.navarro@example.com', 'phone' => '0922 555 0589'],
        ];

        return view('customers', compact('customers'));
    }
}
