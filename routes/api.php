<?php

    use App\Http\Controllers\DestinationCategoryController;
    use App\Http\Controllers\DestinationController;
    use App\Http\Controllers\MikrotikController;
    use App\Http\Controllers\UserController;
    use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | API Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register API routes for your application. These
    | routes are loaded by the RouteServiceProvider and all of them will
    | be assigned to the "api" middleware group. Make something great!
    |
    */
    Route ::post( 'login' , [ UserController::class , 'login' ] );
    Route ::post( 'signup' , [ UserController::class , 'signup' ] );
//    Route ::resource( 'categories' , DestinationCategoryController::class );
    Route ::get( 'destinations-search/{name}' , [ DestinationCategoryController::class , 'search' ] );
    Route ::get( 'destinations/{id}/' , [ DestinationCategoryController::class , 'index' ] );
    Route ::post( 'update-destinations/{id}' , [ DestinationController::class , 'update' ] );
    Route ::get( 'destinations' , [ DestinationController::class , 'index' ] );
    Route ::get( 'show-destinations/{id}' , [ DestinationController::class , 'show' ] );
    Route ::post( 'delete-destination' , [ DestinationController::class , 'destroy' ] );
    //    Route ::get( 'destinations-search/{name}' , [ DestinationCategoryController::class , 'search' ] );
    Route ::resource( 'destinations' , DestinationController::class );
    Route ::get( 'test' , [ DestinationController::class , 'test' ] );
    Route ::post( 'mikrotik' , [ MikrotikController::class , 'getData' ] );
