<?php
use App\Claim;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'ViewsController@homepage');

Route::post('/status', 'ViewsController@homepage');

Route::post('/submit' , 'ViewsController@store');

Route::get('/response/{id}/{number}' , function($id , $number){
    $details = Claim::where('id' , $id)->first();
    return view('response' , compact(['details' , 'number']));
});

Route::get('/thanks' , function(){
    return view('thankyou');
});
