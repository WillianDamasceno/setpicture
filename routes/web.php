<?php

use App\Http\Controllers\ProfileController;
use App\Http\Requests\ResizeRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use Intervention\Image\Facades\Image;


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
    return view('home');
})->name("home");

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

Route::post("/resize", function (ResizeRequest $request) {
    $width = $request['width'];
    $height = $request['height'];

    $uploadedFile = $request['file'];
    $encodeType = $uploadedFile->getClientMimeType();
    $img = Image::make($uploadedFile);

    $img->resize($width, $height, function ($constraint) {
        $constraint->aspectRatio();
        $constraint->upsize();
    });

    $base64Image = (string) $img->encode($encodeType)->encode('data-url');

    return redirect(route("home"))->with('base64Image', $base64Image);
})->name("resize");

require __DIR__ . '/auth.php';
