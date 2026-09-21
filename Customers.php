<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $data['customers'] = [
            ['name' => 'Juan Dela Cruz', 'email' => 'juan@email.com', 'phone' => '09123456789'],
            ['name' => 'Maria Santos', 'email' => 'maria@email.com', 'phone' => '09123456780'],
            ['name' => 'Pedro Reyes', 'email' => 'pedro@email.com', 'phone' => '09123456781'],
            ['name' => 'Ana Garcia', 'email' => 'ana@email.com', 'phone' => '09123456782'],
            ['name' => 'Carlo Ramos', 'email' => 'carlo@email.com', 'phone' => '09123456783']
        ];

        return view('customers', $data);
    }
}