<?php

namespace App\Http\Controllers;

use App\Models\StressTest;
use Illuminate\Http\Request;

class StressTestController extends Controller
{
    public function index()
    {
        $stressTests = StressTest::with('user')->with('question')->get();
        return response()->json($stressTests);
    }

    public function show($id)
    {
        $stressTest = StressTest::find($id);
        if (!$stressTest) {
            return response()->json(['message' => 'Stress Test not found'], 404);
        }
        return response()->json($stressTest);
    }
}
