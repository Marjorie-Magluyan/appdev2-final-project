<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Election extends Model
{
    use HasFactory;

    protected $primaryKey = 'ElectionID';
    protected $fillable = ['start_date', 'end_date', 'status'];

    public function candidates()
    {
        return $this->hasMany(Candidate::class, 'ElectionID', 'ElectionID');
    }

    public function votes()
    {
        return $this->hasMany(Vote::class, 'ElectionID', 'ElectionID');
    }
}
