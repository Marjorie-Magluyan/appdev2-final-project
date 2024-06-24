<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Candidate;

class CandidateSeeder extends Seeder
{
    public function run()
    {
        $candidates = [
            [
                'UserID' => 3,  // Alice Johnson
                'position' => 'President',
                'manifesto' => 'I aim to improve our ICT resources and provide better support for all students.',
            ],
            [
                'UserID' => 1,  // John Doe
                'position' => 'Vice President',
                'manifesto' => 'I will work towards ensuring student voices are heard and considered.',
            ],
        ];

        foreach ($candidates as $candidate) {
            Candidate::create($candidate);
        }
    }
}
