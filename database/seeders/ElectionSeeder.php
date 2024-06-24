<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Election;

class ElectionSeeder extends Seeder
{
    public function run()
    {
        $elections = [
            [
                'start_date' => '2023-06-01',
                'end_date' => '2023-06-07',
                'status' => 'Finished',
            ],
            [
                'start_date' => '2024-06-01',
                'end_date' => '2024-06-07',
                'status' => 'Upcoming',
            ],
        ];

        foreach ($elections as $election) {
            Election::create($election);
        }
    }
}
