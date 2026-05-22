<?php

use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\SubscriptionController;
use Illuminate\Support\Facades\Route;

Route::name("api.")->group(function () {
    Route::apiResource("customer", CustomerController::class);

    Route::patch("customer/{customer}/activate", [
        CustomerController::class,
        "activate",
    ]);

    Route::patch("customer/{customer}/deactivate", [
        CustomerController::class,
        "deactivate",
    ]);

    Route::apiResource("service", ServiceController::class);

    Route::patch("service/{service}/activate", [
        ServiceController::class,
        "activate",
    ]);

    Route::patch("service/{service}/deactivate", [
        ServiceController::class,
        "deactivate",
    ]);

    Route::apiResource("subscription", SubscriptionController::class)->only([
        "index",
        "store",
    ]);

    Route::patch("subscription/{subscription}/activate", [
        SubscriptionController::class,
        "activate",
    ]);

    Route::patch("subscription/{subscription}/deactivate", [
        SubscriptionController::class,
        "deactivate",
    ]);

    Route::patch("subscription/{subscription}/trial", [
        SubscriptionController::class,
        "trial",
    ]);

    Route::patch("subscription/{subscription}/isolir", [
        SubscriptionController::class,
        "isolir",
    ]);

    Route::patch("subscription/{subscription}/dismantle", [
        SubscriptionController::class,
        "dismantle",
    ]);
});
