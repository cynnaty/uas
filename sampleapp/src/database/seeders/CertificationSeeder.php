<?php

namespace Database\Seeders;

use App\Models\Certification;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CertificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menambahkan 3 data contoh
        Certification::create([
            'participant_id' => 1,
            'certification_name' => 'Web Development Certification',
            'issue_date' => '2023-10-10',
            'expiry_date' => '2025-10-10',
            'status' => 'approved',
        ]);

        Certification::create([
            'participant_id' => 2,
            'certification_name' => 'Data Science Certification',
            'issue_date' => '2023-10-12',
            'expiry_date' => '2025-10-12',
            'status' => 'pending',
        ]);

        Certification::create([
            'participant_id' => 3,
            'certification_name' => 'Cybersecurity Certification',
            'issue_date' => '2023-10-14',
            'expiry_date' => '2025-10-14',
            'status' => 'approved',
        ]);
    }
}