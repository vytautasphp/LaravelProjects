<?php
//use App\Radar
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
    return view('welcome');
});

Route::get('about', function () {
//kazkikie veiksmai skaityti is db
$name = 'jonas';
$number = 'abc';
$speed = '150';

// $params  = [
//     'name' => $name,
//     'number' => $number,
//     'speed' => $speed
// ];
//$params = compact('name', 'number', 'speed');

    return view('about', compact('name', 'number', 'speed')); //['name' => 'jonas','number' => 'ABC555','speed' => '150km/h']);

});


    // Route::get('radars', function () {
    //     $radars = \App\Radar::all();
    //     return view('radars.index', compact('radars'));
    //     });
    Route::get('radars','RadarsController@index');

    Route::get('radars/create', 'RadarsController@create');
    Route::post('radars', 'RadarsController@store');

    Route::get('radars/{radar}','RadarsController@show');

    Route::get('radars/{radar}/edit', 'RadarsController@edit');
    Route::put('radars/{radar}', 'RadarsController@update');

    Route::get('radars/{radar}/delete', 'RadarsController@delete');
    Route::delete('radars/{radar}', 'RadarsController@destroy');


    Route::get('drivers','DriversController@index');

    Route::get('drivers/create', 'DriversController@create');
    Route::post('drivers', 'DriversController@store');

    Route::get('drivers/{driver}','DriversController@show');

    Route::get('drivers/{driver}/edit', 'DriversController@edit');
    Route::put('drivers/{driver}', 'DriversController@update');
    
    Route::get('drivers/{driver}/delete', 'DriversController@delete');
    Route::delete('drivers/{driver}', 'DriversController@destroy');
/////////////////
    

    
    
    // Route::get('radar/{id}', function ($id) {
    //     $radar = App\Radar::find($id);
    //     return view('radars.show', compact('radar')); //radars/index
    //     });

    // Route::get('drivers', function () {
    //    // $drivers = DB::table('drivers')->get();
    //     $drivers = \App\Driver::all();
    //     return view('drivers.index', compact('drivers'));
    //     });
       
    // Route::get('driver/{id}', function ($id) {
    //     $driver = App\Driver::find($id);
    //     return view('drivers.show', compact('driver'));
    //     });

  
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});
    Route::get('/language/{language}', 'LanguageController@language')->name('language');


