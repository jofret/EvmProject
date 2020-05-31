<?php

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

//*****************Aquí Web Enlaces**********************//

Route::get('/', function(){
	return view('SimpleRoutes.inicio');
});

Route::get('/nuestra-historia', function(){
	return view('SimpleRoutes.nuestrahistoria');
});

Route::get('/fundadora', function(){
	return view('SimpleRoutes.fundadora');
});

Route::get('/sumer-20', function(){
	return view('SimpleRoutes.sumer-20');
});

Route::get('/fall-winter', function(){
	return view('SimpleRoutes.fall-winter');
});

Route::get('/tiendas', function(){
	return view('SimpleRoutes.tiendas');
});

Route::get('/video', function(){
	return view('SimpleRoutes.video');
});

Route::get('/recovery', function(){
	return view('SimpleRoutes.recovery');
});

Route::get('/in-deep', function(){
	return view('SimpleRoutes.in-deep');
});

Route::get('/who-are-you', function(){
	return view('SimpleRoutes.who-are-you');
});



Auth::routes();

//*******Web

Route::get('catalogo', 'Web\PageController@catalogo')->name('catalogo');



//para categorias
Route::get('categorias/{slug}',		        'Web\PageController@category')->name('category');

//para tags
Route::get('componentes/{slug}', 			'Web\PageController@tag')->name('tag');

//para post
Route::get('catalogo/{slug}', 			'Web\PageController@post')->name('post');




//*******Administración
Route::get('admin', 'Web\PageController@admin')->name('admin');

Route::resource('tags',				'Admin\TagController');
Route::resource('precategories',	'Admin\PrecategoryController');
Route::resource('categories',		'Admin\CategoryController');
Route::resource('posts',			'Admin\PostController');
Route::resource('electrics',		'Admin\EletricoController');



