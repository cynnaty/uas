<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Membuat user admin
        $user = \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
        ]);

        // Memberikan role 'super_admin' kepada user admin
        $user->assignRole('super_admin');

        // Menjalankan seeder untuk Participant, TrainingSchedule, dan Certification
        $this->call([
            ParticipantSeeder::class,
            TrainingScheduleSeeder::class,
            CertificationSeeder::class,
        ]);
    }
}