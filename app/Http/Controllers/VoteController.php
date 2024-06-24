<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function index()
    {
        return Vote::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'UserID' => 'required|exists:users,UserID',
            'CandidateID' => 'required|exists:candidates,CandidateID',
        ]);

        $vote = Vote::create([
            'UserID' => $request->UserID,
            'CandidateID' => $request->CandidateID,
            'timestamp' => now(),
        ]);

        return response()->json($vote, 201);
    }

    public function show($id)
    {
        return Vote::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'UserID' => 'required|exists:users,UserID',
            'CandidateID' => 'required|exists:candidates,CandidateID',
        ]);

        $vote = Vote::findOrFail($id);
        $vote->update($request->all());

        return response()->json($vote, 200);
    }

    public function destroy($id)
    {
        Vote::destroy($id);

        return response()->json(null, 204);
    }
}
