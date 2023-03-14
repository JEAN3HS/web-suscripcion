<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('/contact', 'contact')->name('contact');

Route::resource('blog', PostController::class, [
    'names' => 'posts',
    'parameters' => ['blog' => 'post']
]);

Route::view('/acerca', 'acerca')->name('acerca');
Route::view('/citas', 'citas')->name('citas');
Route::view('/plans', 'plans')->name('plans');

Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
->name('logout');

Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::view('/register', 'auth.register')->name('register');

Route::post('/register', [RegisteredUserController::class, 'store']);

// Route::view('/planes', 'plans')->name('planes');

Route::middleware(['auth:sanctum', 'verified'])->get('/subscribe', function(){
     return view('plan.subscribe',[
        'intent' => auth()->user()->createSetupIntent(),
     ]);
})->name('plan.subscribe');

Route::middleware(['auth:sanctum', 'verified'])->post('/subscribe', function(Request $request){
    // dd($request->all());
    auth()->user()->newSubscription(
        'cashier', $request->plan)->create($request->paymentMethod);

     return redirect('/plans');
})->name('plan.subscribe.post');




// Route::middleware("auth")->group(function () {
//     Route::get('plans', [PlanController::class, 'index'])->name('plans');
//     Route::get('plans/{plan}', [PlanController::class, 'show'])->name("plans.show");
//     Route::post('subscription', [PlanController::class, 'subscription'])->name("subscription.create");
// });
 
