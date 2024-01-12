<?php

namespace App\Http\Controllers;

use App\Models\Client; // модель Client
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PanelController extends Controller
{
    public function showUserInfo($id)
    {
        $client = Client::find($id);

        if (!$client) {
            return response()->json(['error' => 'Клиент не найден'], 404);
        }

        $connections = DB::table('Подключения')
        ->where('Номер_договора', $id)
        ->get();

        return view('panel', ['user' => $client, 'connections' => $connections]);

    }
}