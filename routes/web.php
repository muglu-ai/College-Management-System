<?php

use App\Http\Controllers\ProfileController;
use http\Client\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::controller(StudentController::class)->group(function(){
    Route::get('/','index')->name('Course.index');
    Route::get('/students','getStudentsAndMarks')->name('Course.students');
});

Route::get('student-form', function () {
    return view('student-form');
})->name('student-form');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', function (Request $request) {
    $request->validate([
        'PRN' => 'required|numeric',
        'Password' => 'required|string',
    ]);
    $credentials = $request->only('PRN', 'Password');

    if (Auth::attempt($credentials)) {
        return redirect()->route('profile.edit');
    }

    return back()->withErrors(['error' => 'Invalid credentials']);
});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
});







