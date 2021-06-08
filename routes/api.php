<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployerController; 

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

/*
    For EmployeController

Route::get('/employes', [EmployerController::class,'index']);

Route::get('/employes', [EmployerController::class,'create']);

Route::post('/employes', [EmployerController::class,'store']);

Route::get('/employes/(idEmploye)', [EmployerController::class,'show']);

Route::get('/employes/(idEmploye)', [EmployerController::class,'edit']);

Route::put('/employes/(idEmploye)', [EmployerController::class,'update']);

Route::delete('/employes/(idEmploye)', [EmployerController::class,'destroy']);
*/





/*
    For SalaireController

Route::get('/salaires', [SalaireController::class,'index']);

Route::get('/salaires', [SalaireController::class,'create']);

Route::post('/salaires', [SalaireController::class,'store']);

Route::get('/salaires/(idSalaire)', [SalaireController::class,'show']);

Route::get('/salaires/(idSalaire)', [SalaireController::class,'edit']);

Route::put('/salaires/(idSalaire)', [SalaireController::class,'update']);

Route::delete('/salaires/(idSalaire)', [SalaireController::class,'destroy']);
*/




/*
    For PrimeController

Route::get('/primes', [PrimeController::class,'index']);

Route::get('/primes', [PrimeController::class,'create']);

Route::post('/primes', [PrimeController::class,'store']);

Route::get('/primes/(idPrime)', [PrimeController::class,'show']);

Route::get('/primes/(idPrime)', [PrimeController::class,'edit']);

Route::put('/primes/(idPrime)', [PrimeController::class,'update']);

Route::delete('/primes/(idPrime)', [PrimeController::class,'destroy']);
*/





/*
    For RetenueController

Route::get('/retenues', [RetenuesController::class,'index']);

Route::get('/retenues', [RetenuesController::class,'create']);

Route::post('/retenues', [RetenueController::class,'store']);

Route::get('/retenues/(idRetenue)', [RetenueController::class,'show']);

Route::get('/retenues/(idRetenue)', [RetenueController::class,'edit']);

Route::put('/retenues/(idRetenue)', [RetenueController::class,'update']);

Route::delete('/retenues/(idRetenue)', [RetenueController::class,'destroy']);
*/






/*
    For GradeController

Route::get('/grades', [GradeController::class,'index']);

Route::get('/grades', [GradeController::class,'create']);

Route::post('/grades', [GradeController::class,'store']);

Route::get('/grades/(idGrade)', [GradeController::class,'show']);

Route::get('/grades/(idGrade)', [GradeController::class,'edit']);

Route::put('/grades/(idGrade)', [GradeController::class,'update']);

Route::delete('/grades/(idGrade)', [GradeController::class,'destroy']);
*/







/*
    For GroupeController

Route::get('/groupes', [GroupeController::class,'index']);

Route::get('/groupes', [GroupeController::class,'create']);

Route::post('/groupes', [GroupeController::class,'store']);

Route::get('/groupes/(idGroupe)', [GroupeController::class,'show']);

Route::get('/groupes/(idGroupe)', [GroupeController::class,'edit']);

Route::put('/groupes/(idGroupe)', [GroupeController::class,'update']);

Route::delete('/groupes/(idGroupe)', [GroupeController::class,'destroy']);
*/






/*
    For BanqueController

Route::get('/banques', [BanqueController::class,'index']);

Route::get('/banques', [BanqueController::class,'create']);

Route::post('/banques', [BanqueController::class,'store']);

Route::get('/banques/(idBanque)', [BanqueController::class,'show']);

Route::get('/banques/(idBanque)', [BanqueController::class,'edit']);

Route::put('/banques/(idBanque)', [BanqueController::class,'update']);

Route::delete('/banques/(idBanque)', [BanqueController::class,'destroy']);
*/






/*
    For ServiceController

Route::get('/services', [ServiceController::class,'index']);

Route::get('/services', [ServiceController::class,'create']);

Route::post('/services', [ServiceController::class,'store']);

Route::get('/services/(idService)', [ServiceController::class,'show']);

Route::get('/services/(idService)', [ServiceController::class,'edit']);

Route::put('/services/(idService)', [ServiceController::class,'update']);

Route::delete('/services/(idService)', [ServiceController::class,'destroy']);
*/








/*
    For MenuController

Route::get('/menus', [MenuController::class,'index']);

Route::get('/menus', [MenuController::class,'create']);

Route::post('/menus', [MenuController::class,'store']);

Route::get('/menus/(idMenu)', [MenuController::class,'show']);

Route::get('/menus/(idMenu)', [MenuController::class,'edit']);

Route::put('/menus/(idMenu)', [MenuController::class,'update']);

Route::delete('/menus/(idMenu)', [MenuController::class,'destroy']);
*/






/*
    For ReglementsalaireController

Route::get('/reglementsalaires', [ReglementsalaireController::class,'index']);

Route::get('/reglementsalaires', [ReglementsalaireController::class,'create']);

Route::post('/reglementsalaires', [ReglementsalaireController::class,'store']);

Route::get('/reglementsalaires/(idReglementsalaire)', [ReglementsalaireController::class,'show']);

Route::get('/reglementsalaires/(idReglementsalaire)', [ReglementsalaireController::class,'edit']);

Route::put('/reglementsalaires/(idReglementsalaire)', [ReglementsalaireController::class,'update']);

Route::delete('/reglementsalaires/(idReglementsalaire)', [ReglementsalaireController::class,'destroy']);
*/