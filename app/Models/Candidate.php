<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $primaryKey = 'CandidateID';
    protected $fillable = ['UserID', 'position', 'manifesto'];

    public function user()
    {
        return $this->belongsTo(User::class, 'UserID', 'UserID');
    }

    public function votes()
    {
        return $this->hasMany(Vote::class, 'CandidateID', 'CandidateID');
    }
}
