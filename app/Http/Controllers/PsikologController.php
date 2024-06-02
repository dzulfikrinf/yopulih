<?php

namespace App\Http\Controllers;

use App\Models\Psikolog;
use Illuminate\Http\Request;

class PsikologController extends Controller
{
    public function index()
    {
        $psikologs = Psikolog::with('user')->get();
        return response()->json($psikologs);
    }

    public function show($id)
    {
        $psikolog = Psikolog::find($id);
        if (!$psikolog) {
            return response()->json(['message' => 'Psikolog not found'], 404);
        }
        return response()->json($psikolog);
    }
}
