<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('accueil');
});

Route::get('/inscription', 'App\Http\Controllers\InscriptionController@formulaire');

Route::post('/inscription', 'App\Http\Controllers\InscriptionController@traitement');

Route::get('/connexion', 'App\Http\Controllers\ConnexionController@formulaire');

Route::post('/connexion', 'App\Http\Controllers\ConnexionController@traitement');

//Route renvoyant la vue /utilisateurs en affichant la liste des membres renvoyée par la fonction liste() du controller UtilisateursController.
Route::get('/utilisateurs', 'App\Http\Controllers\UtilisateursController@liste');



Route::group([
    'middleware' => 'App\Http\Middleware\Auth',
    ], function() {
    Route::get('/mon-compte', 'App\Http\Controllers\CompteController@accueil');
    Route::post('/modification', 'App\Http\Controllers\CompteController@modification');

    //Ne fonctionne pas : 
    // Route::post('/messages', 'App\Http\Controllers\MessagesController@nouveau');

    Route::get('/events', 'App\Http\Controllers\EventsController@index')->name('events.index');
    Route::post('/events', 'App\Http\Controllers\EventsController@nouveau')->name('events.store');
    Route::get('/events/{id}/edit', 'App\Http\Controllers\EventsController@edit')->name('events.edit');
    Route::put('/events/{id}', 'App\Http\Controllers\EventsController@update')->name('events.update');
    Route::delete('/events/{id}', 'App\Http\Controllers\EventsController@destroy')->name('events.destroy');
});

Route::get('/deconnexion', 'App\Http\Controllers\CompteController@deconnexion');


//Route placée à la fin pour qu'elle soit prise en dernier recours si aucune des routes précédentes n'est utilisée.
Route::get('/{email}', 'App\Http\Controllers\UtilisateursController@voir');