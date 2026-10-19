<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['username' => 'amartinez', 'full_name' => 'Ari Martinez', 'role' => 'Administrator'],
            ['username' => 'jlim', 'full_name' => 'Jonah Lim', 'role' => 'Cashier'],
            ['username' => 'rgarcia', 'full_name' => 'Rina Garcia', 'role' => 'Cashier'],
            ['username' => 'tromero', 'full_name' => 'Theo Romero', 'role' => 'Inventory Clerk'],
            ['username' => 'ncastillo', 'full_name' => 'Nica Castillo', 'role' => 'Manager'],
        ];

        return view('users', compact('users'));
    }
}
