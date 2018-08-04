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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/','HomePageController@index');//

Auth::routes();

Route::get('/home', 'HomePageController@index')->name('home');

Route::get('/showfaculty', 'viewFacultyController@index')->name('vfac');
Route::get('/showGallery', 'viewGalleryController@index')->name('vpic');

Route::get('/DownloadPaper5', 'viewFilesController@showClass5')->name('PaperClass5');
Route::get('/DownloadPaper6', 'viewFilesController@showClass6')->name('PaperClass6');
Route::get('/DownloadPaper7', 'viewFilesController@showClass7')->name('PaperClass7');
Route::get('/DownloadPaper8', 'viewFilesController@showClass8')->name('PaperClass8');
Route::get('/DownloadPaper9', 'viewFilesController@showClass9')->name('PaperClass9');
Route::get('/DownloadPaper10', 'viewFilesController@showClass10')->name('PaperClass10');
Route::get('/DownloadPaper11', 'viewFilesController@showClass11')->name('PaperClass11');
Route::get('/DownloadPaper12', 'viewFilesController@showClass12')->name('PaperClass12');


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

//Route::get('/faculty', 'FacultyCRUDController@index')->name('faculty');
//Route::get('/AddFaculty', 'FacultyCRUDController@create')->name('faccreate');
Route::get('/faculty', ['middleware' => 'auth', 'uses' => 'FacultyCRUDController@index'])->name('faculty');
Route::get('/AddFaculty', ['middleware' => 'auth', 'uses' => 'FacultyCRUDController@create'])->name('faccreate');


//Route::get('/Files', 'UserFilesController@index')->name('fileind');
//Route::get('/AddFiles', 'UserFilesController@create')->name('fileins');
Route::get('/Files', ['middleware' => 'auth', 'uses' => 'UserFilesController@index'])->name('fileind');
Route::get('/AddFiles', ['middleware' => 'auth', 'uses' => 'UserFilesController@create'])->name('fileins');


//Route::get('/Pictures', 'PictureCRUDController@index')->name('picind');
//Route::get('/AddPictures', 'PictureCRUDController@create')->name('picins');
Route::get('/Pictures', ['middleware' => 'auth', 'uses' => 'PictureCRUDController@index'])->name('picind');
Route::get('/AddPictures', ['middleware' => 'auth', 'uses' => 'PictureCRUDController@create'])->name('picins');

//Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin', ['middleware' => 'auth', 'uses' => 'AdminController@index'])->name('admin');

Route::get('/AddAdmin', ['middleware' => 'auth', 'uses' => function () {
    return view('auth.register' );
} ])->name('reg');

Route::resource('facultyCRUD','FacultyCRUDController');

Route::resource('pictureCRUD','PictureCRUDController');

Route::resource('userfileCRUD','UserFilesController');

