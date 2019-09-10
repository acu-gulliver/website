<?php

use Corcel\Model\Post;
use Corcel\Model\Taxonomy;
use Illuminate\Http\Request;

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

/**

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/categories',function(){
   return response()->json(Taxonomy::where('taxonomy', 'category')->get(),200);
});

Route::get('/posts',function(){
    return response()->json(Post::published()->paginate(10),200);
});

Route::get('/prima',function(){
    print_r(Post::taxonomy('category', "primapagina")->orderBy('ID','DESC')->paginate(1));
});



Route::get('/gallery','HomeController@getMedia');


*/
