<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;

    protected $primaryKey = 'VoteID';
    protected $fillable = ['UserID', 'CandidateID'];

    public function user()
    {
        return $this->belongsTo(User::class, 'UserID', 'UserID');
    }

    public function candidate()
    {
        return $this->belongsTo(Candidate::class, 'CandidateID', 'CandidateID');
    }
}
