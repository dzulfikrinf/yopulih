<?php

namespace App\Http\Controllers;

use App\Models\ClientList;
use Illuminate\Http\Request;

class ClientListController extends Controller
{
    public function index()
    {
        $clients = ClientList::with('user')->with('psikolog')->get();
        return response()->json($clients);
    }

    public function show($id)
    {
        $client = ClientList::find($id);
        if (!$client) {
            return response()->json(['message' => 'Client not found'], 404);
        }
        return response()->json($client);
    }
}
