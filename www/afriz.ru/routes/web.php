<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PanelController;

Route::get('/panel/user={id}', [PanelController::class, 'showUserInfo']);


// use App\Http\Controllers\DebugController;
// Route::get('/debug/database-test', [DebugController::class, 'DataBaseTest']);
// Route::get('/debug/server-hello/{status}', [DebugController::class, 'ServerHello'])->where('status', '\d+');




