<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function index()
    {
        return Candidate::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'UserID' => 'required|exists:users,UserID',
            'position' => 'required|string',
            'manifesto' => 'required|string',
        ]);

        $candidate = Candidate::create($request->all());

        return response()->json($candidate, 201);
    }

    public function show($id)
    {
        return Candidate::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'UserID' => 'required|exists:users,UserID',
            'position' => 'required|string',
            'manifesto' => 'required|string',
        ]);

        $candidate = Candidate::findOrFail($id);
        $candidate->update($request->all());

        return response()->json($candidate, 200);
    }

    public function destroy($id)
    {
        Candidate::destroy($id);

        return response()->json(['message' => 'Candidates deleted successfully'], 204);
    }
}
