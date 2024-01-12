<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DebugController extends Controller
{
    public function DataBaseTest()
    {
        try {
            // Попытка подключения к базе данных
            DB::connection()->getPdo();

            // Если подключение успешно, возвращаем сообщение об успешном подключении
            return response()->json(['message' => 'Database connection successful'], 200);
        } catch (\Exception $e) {
            // Если произошла ошибка при подключении, возвращаем сообщение с ошибкой
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function ServerHello($status)
    {
        return response()->json(['message' => 'Database connection successful'], 200);
    }
}