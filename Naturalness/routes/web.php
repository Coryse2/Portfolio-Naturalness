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


$router->get('/', function () use ($router) {
    return $router->app->version();
});
*/
//homepage road
$router->get('/', [
  'as' => 'home',
  'uses' => 'MainController@home',
]);

//recipes list road
$router->get('/recipes', [
  'as' => 'recipes',
  'uses' => 'RecipeController@show',
]);

//show 1 recipe road
$router->get('/recipe/{id}', [
  'as' => 'recipe_showRecipe',
  'uses' => 'RecipeController@showById',
]);

//categories list road
$router->get('/categories', [
  'as' => 'categories',
  'uses' => 'CategoryController@show',
]);

//show 1 category road
$router->get('/category/{id}', [
  'as' => 'category_showCategory',
  'uses' => 'CategoryController@showById',
]);

//Route vers la  liste des composants
// $router->get('/components',[
//   'as'=>'components',
//   'uses'=>'ComponentController@show',
// ]);

//search results road
$router->get('/search', [
  'as' => 'search',
  'uses' => 'MainController@search',
]);

//material list road
$router->get('/material', [
  'as' => 'material',
  'uses' => 'MainController@material',
]);

//About
$router->get('/about', [
  'as' => 'about',
  'uses' => 'MainController@about'
]);

//SIGNUP LOGIN LOGOUT ROADS
// Signup
$router->get('/signup', [
  'as' => 'signup',
  'uses' => 'UserController@signup',
]);

//Signup Post
$router->post('/signup', [
  'as' => 'signup',
  'uses' => 'UserController@signupPostAction'
]);

// Connect in GET
$router->get('/signin', [
  'as' => 'signin',
  'uses' => 'UserController@signinAction'
]);
// Connect in POST
$router->post('/signin', [
  'as' => 'signin',
  'uses' => 'UserController@signinPostAction'
]);

//account of the user
$router->get('/account', [
  'uses'  => 'UserController@accountAction',
  'as'    => 'account'
]);

//LOGOUT
$router->get('/logout', [
  'as' => 'logout',
  'uses' => 'UserController@disconnect'
]);

//end SIGNUP LOGIN LOGOUT ROADS

//Générer un pdf
$router->get('/pdf/recipe/{id}', [
  'as' => 'recipepdf',
  'uses' => 'RecipeController@recipePdf'
]);


//CONTACT FORM
//get road
$router->get('/contact', [
  'as' => 'contact_contact',
  'uses' => 'MainController@contact'
]);

/**post road
$router->post('contact', [
  'as' => 'contact_form',
  'uses' => 'ContactController@store'
]);
**/
