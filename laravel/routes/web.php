<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Validation\ValidationException;

Route::post('/password/update', function (Request $request) {
    $request->validate([
        'email' => ['required', 'email', 'exists:users,email'],
        'password' => ['required', 'confirmed', 'min:8'],
    ]);

    $user = User::where('email', $request->email)->first();

    if (!$user) {
        throw ValidationException::withMessages([
            'email' => ['E-mail não encontrado no reino.'],
        ]);
    }

    $user->password = Hash::make($request->password);
    $user->save();

    return redirect()->route('login')->with('status', 'Senha redefinida com sucesso! Entre no castelo.');
})->name('password.update');

