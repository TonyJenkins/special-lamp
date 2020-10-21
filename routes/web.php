<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/awe', function () {

    $names = array ('Tom', 'Dick', 'Bill');

    return view ('awe', ['names' => $names]);

});

//Route::view ('/awe', 'awe', ['names' => ['Tom', 'Dick', 'Harry']]);
