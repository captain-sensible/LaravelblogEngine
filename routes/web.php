<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/landingPage', function () {
    return view('landPage');
});


Route::get('/placeholder', function () {
    return view('placeholder',['title'=>'admin templtes']);
});

Route::get('PHPMailer',[\App\Http\Controllers\ContactController::class,'index']);

/*admin stuff */
Route::get('/deleteBlogList',[\App\Http\Controllers\Admin::class,'deleteBlog']);
Route::post('/deleteBlogDo',[\App\Http\Controllers\Admin::class,'deleteBlogDo']);




Route::get('/resetPw',[\App\Http\Controllers\Admin::class,'resetPwForm']);

Route::post('/resetPw', [\App\Http\Controllers\Admin::class, 'resetPwDO']);



Route::get('/editBlog/{slug}',[\App\Http\Controllers\Admin::class,'editBlog']);


Route::get('/editBlogList',[\App\Http\Controllers\Admin::class,'editBlogList']);

Route::post('/editBlogDo', [\App\Http\Controllers\Admin::class, 'editBlogDo']);


Route::get('/blogForm',[\App\Http\Controllers\Admin::class,'blogForm']);

Route::post('/newBlog', [\App\Http\Controllers\Admin::class, 'createBlog']);


Route::get('/galleryForm',[\App\Http\Controllers\Admin::class,'galleryForm']);

Route::post('/addGallery',[\App\Http\Controllers\Admin::class,'addGallery']);

Route::get('/deleteGalleryList',[\App\Http\Controllers\Admin::class,'deleteGallery']);

Route::post('/deleteGalleryDo',[\App\Http\Controllers\Admin::class,'deleteGalleryDo']);


Route::get('/listBlogs',[\App\Http\Controllers\BlogController::class,'listBlogs']);

Route::get('/listGallery',[\App\Http\Controllers\BlogController::class,'listGallery']);


Route::get('/blogArticle/{slug}',[\App\Http\Controllers\BlogController::class,'blogArticle']);

//Route::get('/{page?}',[\App\Http\Controllers\Pages::class,'checkPage']);



/*  i will want so that forms are dispalyed and once processed a placeholder page disppalyed and message of success in panel or placeholder */

Route::get('/getSession', [\App\Http\Controllers\Admin::class, 'getSession']);


Route::get('/editBlogForm',[\App\Http\Controllers\Admin::class, 'editBlog'])->middleware('\App\Http\Middleware\CheckRole');  



Route::get('/admin',[\App\Http\Controllers\Admin::class, 'admin'])->middleware('\App\Http\Middleware\CheckRole');  


Route::get('/blackcat', [\App\Http\Controllers\Admin::class, 'blackcat']);
Route::post('/login', [\App\Http\Controllers\Admin::class, 'login']);

Route::get('/logout', [\App\Http\Controllers\Admin::class, 'logout'])->name('andy');;



//next route maybe admin and put in middleware to see if role is set or not  


Route::get('/checkSession', [\App\Http\Controllers\Pages::class, 'checkSession']);


Route::get('/flushSession', [\App\Http\Controllers\Pages::class, 'flushSession']);


 //Route::get('/test', 'Andy@index');
Route::get('/try', [\App\Http\Controllers\BlogController::class, 'index']);


Route::get('/test', [\App\Http\Controllers\Andy::class, 'index']);


Route::get('/test/{num}', function (Request $request, string $num) {
return 'Some text , the place is :  '.$num;
});



Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'showForm']);
Route::post('/contact', [\App\Http\Controllers\ContactController::class, 'submitForm'])->middleware('\App\Http\Middleware\CheckSpam');  



Route::get('/test/{place?}', function (string $place = null) {
return $place;
});

Route::get('/test2', function () {
    return view('test',['title'=>'test']);
});


Route::get('/spam', [\App\Http\Controllers\ContactController::class, 'spam']);


/*
Route::get('/spam', function () {
    return view('spam',['title'=>'test']);
});

*/

Route::get('/nopage',function () {
return view('nopage',['title'=>'test']);	
});









Route::get('/{page?}',[\App\Http\Controllers\Pages::class,'checkPage']);

	
	

Route::fallback(function () {
echo "no such page";
});
















//above woeks
