<?php

use Illuminate\Support\Facades\Route;

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

    $data = [

        'user'=>[

            'myself'=>[
                'nome' => 'Francesco',
                'cognome' => 'Cataletto',
                'anni' => 24
            ],

            'anotheruser'=>[
                'nome' => 'Giulio',
                'cognome' => 'Cesare',
                'anni' => 700
            ],

            'thirduser'=>[
                'nome' => 'Pino',
                'cognome' => 'Abete',
                'anni' => 1700
            ]
            
        ]
    ];


    return view('home', $data);
});
