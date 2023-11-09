// routes/web.php

use App\Http\Controllers\ParkingController;

Route::get('/parking', [ParkingController::class, 'index'])->name('parking.index');
Route::get('/parking/create', [ParkingController::class, 'create'])->name('parking.create');
Route::post('/parking', [ParkingController::class, 'store'])->name('parking.store');
// Add other routes as needed
