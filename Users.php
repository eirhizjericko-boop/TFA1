<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data['users'] = [
            ['username' => 'admin', 'name' => 'John Admin', 'role' => 'Administrator'],
            ['username' => 'cashier1', 'name' => 'Maria Santos', 'role' => 'Cashier'],
            ['username' => 'staff1', 'name' => 'Pedro Reyes', 'role' => 'Staff'],
            ['username' => 'manager', 'name' => 'Ana Garcia', 'role' => 'Manager'],
            ['username' => 'staff2', 'name' => 'Carlo Ramos', 'role' => 'Staff']
        ];

        return view('users', $data);
    }
}