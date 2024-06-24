<?php

namespace App\Http\Controllers;

use App\Models\Election;
use Illuminate\Http\Request;

class ElectionController extends Controller
{
    public function index()
    {
        return Election::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'status' => 'required|string',
        ]);

        $election = Election::create($request->all());

        return response()->json($election, 201);
    }

    public function show($id)
    {
        return Election::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'status' => 'required|string',
        ]);

        $election = Election::findOrFail($id);
        $election->update($request->all());

        return response()->json($election, 200);
    }

    public function destroy($id)
    {
        Election::destroy($id);

        return response()->json(null, 204);
    }
}
