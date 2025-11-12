<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->seedSuperAdmin();
    }

    protected function seedSuperAdmin(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@ltflow.com'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('password123'),
                'is_admin' => true,
            ]
        );
    }
}
