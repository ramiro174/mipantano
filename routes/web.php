<?php
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
    
    use App\User;
    
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/usuarios', function () {
        
        $us=User::all();
        foreach ($us as $u){
            
            $u->update(['api_token'=>Str::random(60)]);
        }
        return $us;
        
    });

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

