<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Portal::create([
            'code' => 'HRMS',
            'title' => 'HRMS',
            'description' => 'Human Resource Web Portals',
            'directory' => 'home',
        ]);
        \App\Models\Portal::create([
            'code' => 'ATMS',
            'title' => 'ATMS Web Portal',
            'description' => 'Attendance and Timelogs Management System',
            'directory' => 'atms',
        ]);
        \App\Models\Portal::create([
            'code' => 'HRIS',
            'title' => 'HRIS Web Portal',
            'description' => 'Human Resource Information System',
            'directory' => 'hris',
        ]);
        \App\Models\Portal::create([
            'code' => 'PAYROLL',
            'title' => 'Payroll Web Portal',
            'description' => 'Payroll System',
            'directory' => 'payroll',
        ]);


        \App\Models\User::create([
            'name' => 'Lemuel Herra',
            'email' => 'lemuelherra@gmail.com',
            'username' => 'lem',
            'password' => Hash::make('asdf1234'),
        ]);
    }
}
