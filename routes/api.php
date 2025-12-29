<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccelAIController;

Route::post('/accel-ai/chat', [AccelAIController::class, 'chat']);
