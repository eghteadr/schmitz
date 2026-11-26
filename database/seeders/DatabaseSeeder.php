<?php

namespace Database\Seeders;

use App\Models\CompanySetting;
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
        User::updateOrCreate(
            ['email' => 'admin@schmitzglobal.com'],
            [
                'name' => 'SCHMITZ Admin',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ]
        );

        if (! CompanySetting::query()->exists()) {
            CompanySetting::create(CompanySetting::defaults());
        }
    }
}
