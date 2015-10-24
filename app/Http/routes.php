<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

class Member extends Illuminate\Database\Eloquent\Model {

}

$app->get('/', function () use ($app) {
    return $app->welcome();
});

$app->get('/members', 'MemberController@index');

$app->get('/list', function(){




	return Member::all();

});
