<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('customers');
});

Route::get(
    'customers',
    [CustomerController::class, 'showAll']
);

Route::get(
    'customers/{customer}',
    [CustomerController::class, 'showCustomerData']
)->name('customer.data');




Route::prefix('try')->group(function () {
    Route::get(
        '/',
        function () {
            return 'Main test route';
        }
    );

    Route::get(
        '/action',
        function () {
            return 'Test action route';
        }
    );

    Route::get(
        '/action2',
        function () {
            return 'Test action2 route';
        }
    )->middleware('just.to.see');

    Route::get(
        '/{id}',
        function () {
            return 'Test route with ID';
        }
    )->where('id', '[0-9]+');

    Route::match(
        ['post', 'put', 'patch'],
        'test-route',
        [CustomerController::class, 'showCustomerData']
    );

    Route::put('test-route', [CustomerController::class, 'showCustomerData']);
    Route::post('test-route', [CustomerController::class, 'showCustomerData']);
    Route::patch('test-route', [CustomerController::class, 'showCustomerData']);
});
