<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Super Admin',
            'email' => 'admin@admin.com',
            'password' => app()->environment('local')
                ? 'password'
                : env('ADMIN_PASSWORD', \Illuminate\Support\Str::random(16)),
        ];

        // update or create
        $user = \App\Models\User::updateOrCreate(
            ['email' => $data['email']],
            $data
        );

        $user->assignRole('super admin');
    }
}
