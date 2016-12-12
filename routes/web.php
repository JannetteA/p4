<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| This file defines all the routes that are handled by thue application.
| We are telling Laravel the URIs it should respond to using a Closure or controller method.
*/

Route::get('/items', 'ItemController@index')->name('items.index')->middleware('auth');
Route::get('/items/create', 'ItemController@create')->name('items.create')->middleware('auth');
Route::post('/items', 'ItemController@store')->name('items.store');
Route::get('/items/{item}', 'ItemController@show')->name('items.show');
Route::get('/items/{id}/edit', 'ItemController@edit')->name('items.edit');
Route::put('/items/{id}', 'ItemController@update')->name('items.update');
Route::get('/items/{id}/delete', 'ItemController@delete')->name('items.destroy');
Route::delete('/items/{item}', 'ItemController@destroy')->name('items.destroy');

/*
|--------------------------------------------------------------------------
| Database Connection Test Route
|--------------------------------------------------------------------------
| This route is only used to test connection to the database
*/

Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(config('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    /*
    The following line will output your MySQL credentials.
    Uncomment it only if you're having a hard time connecting to the database and you
    need to confirm your credentials.
    When you're done debugging, comment it back out so you don't accidentally leave it
    running on your live server, making your credentials public.
    */
    //print_r(config('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    }
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});


/*
|--------------------------------------------------------------------------
| welcome Route
|--------------------------------------------------------------------------
| This route is used to redirect to the welcome page
*/
Route::get('/', 'PageController@welcome');

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
| This entry generates a lot of routes for authentication
*/
Auth::routes();

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
| This overwrites the previous line and it will take precedence
*/
Route::get('/logout','Auth\LoginController@logout')->name('logout');



