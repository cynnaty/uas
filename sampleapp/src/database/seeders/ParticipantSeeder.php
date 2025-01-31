<?php

namespace Database\Seeders;

use App\Models\Participant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParticipantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menambahkan 3 data contoh
        Participant::create([
            'name' => 'John Doe',
            'age' => 25,
            'birthdate' => '1998-05-15',
            'main_skill' => 'Web Development',
            'course_history' => 'HTML, CSS, JavaScript',
            'attendance' => 90,
            'evaluation_score' => 85.5,
            'certification_status' => true,
        ]);

        Participant::create([
            'name' => 'Jane Smith',
            'age' => 30,
            'birthdate' => '1993-08-22',
            'main_skill' => 'Data Science',
            'course_history' => 'Python, SQL, Machine Learning',
            'attendance' => 95,
            'evaluation_score' => 92.0,
            'certification_status' => false,
        ]);

        Participant::create([
            'name' => 'Alice Johnson',
            'age' => 28,
            'birthdate' => '1995-03-10',
            'main_skill' => 'Cybersecurity',
            'course_history' => 'Network Security, Ethical Hacking',
            'attendance' => 85,
            'evaluation_score' => 88.0,
            'certification_status' => true,
        ]);
    }
}