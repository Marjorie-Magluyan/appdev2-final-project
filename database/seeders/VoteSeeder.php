<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vote;

class VoteSeeder extends Seeder
{
    public function run()
    {
        $votes = [
            [
                'UserID' => 2,  // Jane Smith
                'CandidateID' => 1,  // Alice Johnson for President
                'timestamp' => now(),
            ],
            [
                'UserID' => 4,  // Bob Brown
                'CandidateID' => 2,  // John Doe for Vice President
                'timestamp' => now(),
            ],
        ];

        foreach ($votes as $vote) {
            Vote::create($vote);
        }
    }
}
