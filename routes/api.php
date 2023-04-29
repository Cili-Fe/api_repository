<?php
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//use App\Providers\RouteServiceProvider;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::prefix('User')->
//     name('User')->
//     group(function(){
//         Route::get('/get',[UserController::class, 'index'])->name('index');
//         Route::post('/',[UserController::class, 'store'])->name('store');
//         Route::get('/{user}',[UserController::class, 'show'])->name('show');
//         Route::put('/{user}',[UserController::class, 'update'])->name('update');
//         Route::get('/{user}',[UserController::class, 'destroy'])->name('destroy');
//     });

    Route::controller(UserController::class)->group(function()
    {
        Route::post('index', 'index');
        
    });

//Route::apiResource('users',UserController::class);
//Route::apiResource('products',ProductController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
