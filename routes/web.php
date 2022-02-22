<?php
use App\Http\Controllers\Auth\AuthenticatedSessionController as Auto;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaniniController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Controllotizzi;
//use App\Http\Controllers\LoggoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('auth.login');
});



Route::get('/dashboard', [PaniniController::class, 'index'],function () {
    
    return view('menu');
})->middleware(['auth'])->name('dashboard');
Route::get('/logout',[Auto::class,'destroy'])->name('logout');



require __DIR__.'/auth.php';
//--------------route user----------------//

Route::get('/paninis', function () { return view('menu'); })->name('menu');

Route::get('/paninis', [PaniniController::class, 'index'])->name('panini');

Route::view('/create-panino', 'newpanini')->name('newpanino');

Route::post('/create-panino', [PaniniController::class, 'create']);

Route::get('/menu', [PaniniController::class, 'index']);

Route::get('/update/{id}', [PaniniController::class,'edit']);

Route::post('/update/{id}', [PaniniController::class,'update']);

Route::get('/delete/{id}', [PaniniController::class,'destroy']);


//--------------route admin----------------//

Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('admin');

Route::get('admin/home', [Controllotizzi::class, 'index'])->name('users');

Route::view('admin/create-users', 'admin.newusers')->name('newusers');

Route::post('admin/create-users', [Controllotizzi::class, 'create']);

//Route::get('admin/menu', [Controllotizzi::class, 'index']);

Route::get('admin/update/{id}', [Controllotizzi::class,'edit']);

Route::post('admin/update/{id}', [Controllotizzi::class,'update']);

Route::get('admin/delete/{id}', [Controllotizzi::class,'destroy']);






/*Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function(){

};
Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function(){
    Route::namespace('Auth')->group(function(){
    //All the admin routes will be defined here...
    
    //Route::get('/dashboard',[HomeController::class,'index'])->name('home');
    Route::get('/dashboard',[HomeController::class,'index'])->name('home');
    Route::get('/login',[LoginController::class,'showLoginForm'])->name('login');
    Route::post('/login',[LoginController::class,'login']);
    Route::post('/logout',[LoginController::class,'logout'])->name('logout');

});
});*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
