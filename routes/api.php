<?php
    
    use App\Http\Controllers\Auth\LoginController;
    use App\Http\Respuesta;
    use App\User;
    use Illuminate\Http\Request;
    
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
    Route::middleware('auth:api')->get('/user', function (Request $request) {
        return $request->user();
    });
    Route::post('/login', function (Request $request) {
        $lg = new LoginController();
        $Res=new Respuesta($lg->loginapi($request),200);
        return  $Res->enJson();
    });

