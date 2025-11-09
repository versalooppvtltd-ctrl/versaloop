<?php
use App\Http\Controllers\RoutingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RoutingController::class, 'root'])->name('root');
Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
Route::get('{any}', [RoutingController::class, 'firstLevel'])->name('any')->where('any', '.*');


// Using closure
Route::get('/contact', function () {
    return view('contact'); // assumes you have contact.blade.php
})->name('contact');

// OR using a controller (recommended for more complex logic)
Route::get('/contact', [ContactController::class, 'show'])->name('contact');