<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\NotificationController;

Route::prefix('notifications')->group(function () {
    Route::get('/', [NotificationController::class, 'index']);
    Route::post('/mark-read', [NotificationController::class, 'markRead']);
});
