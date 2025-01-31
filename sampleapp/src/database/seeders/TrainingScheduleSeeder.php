<?php

namespace Database\Seeders;

use App\Models\TrainingSchedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainingScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menambahkan 3 data contoh
        TrainingSchedule::create([
            'title' => 'Web Development Workshop',
            'description' => 'Learn HTML, CSS, and JavaScript basics.',
            'date' => '2023-10-15',
            'time' => '10:00:00',
            'location' => 'Online',
            'participant_limit' => 50,
        ]);

        TrainingSchedule::create([
            'title' => 'Data Science Seminar',
            'description' => 'Introduction to Python and Machine Learning.',
            'date' => '2023-10-20',
            'time' => '14:00:00',
            'location' => 'TechEdu Office',
            'participant_limit' => 30,
        ]);

        TrainingSchedule::create([
            'title' => 'Cybersecurity Bootcamp',
            'description' => 'Hands-on training in ethical hacking and network security.',
            'date' => '2023-10-25',
            'time' => '09:00:00',
            'location' => 'Online',
            'participant_limit' => 40,
        ]);
    }
}