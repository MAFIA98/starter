<?php


Route::get('/welcome', function () {
    return view('welcome');
});


//1-requerd parameter
Route::get('/Test1/{id}',function ($id){return 'welcome'.$id;})->name('Test1');
//2-optional parameter
Route::get('/Test2/{id?}',function (){return 'welcome';})->name('Test2');

/****************************************************************************************************/
Route::group(['namespace' => 'Front','prefix'=>'users', 'middleware' => 'auth'],function (){

    //all route only access controller in folder name Front

    Route::get('/','Usercontroller@showUsereName');

});
/********************************************************************************************************/
Route::group(['prefix'=>'second','namespace'=>'admin'],function (){
    Route::get('/','SecondController@showString')->middleware('auth');
    Route::get('1','SecondController@showString1');
    Route::get('2','SecondController@showString2');
    Route::get('3','SecondController@showString3');
    Route::get('4','SecondController@showString4');
});
Route::get('login',function (){

    return 'Must Be login into Admin Panel';
})->name('login');
//Route::get('second','admin\SecondController@showString');
/***********************************************************************************************************/

Route::resource('News','NewsController');
/*
route::get('News','NewsController@index');
route::post('News/create','NewsController@store');
route::get('News/{id}/edit','NewsController@edit');
route::post('News/{id}','NewsController@update');
route::delete('News/{id}','NewsController@delete');
*/
/*************************************************************************************************************/
Route::get('index','front\UserController@getIndex')->name('index');
/*************************************************************************************************************/
/*Route::get('/',function ()
{
    return view('welcome',with(['Name'=>'Mosab','Age'=>'22']));
});*/
/*************************************************************************************************************/
Route::get('/landing',function ()
{
    return view('landing');
});
/**************************************************************************************************************/
Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
/**************************************************************************************************************/
Route::get('redirect/{service}','SocialController@redirect');

Route::get('callback/{service}','SocialController@callback');
/**************************************************************************************************************/
Route::get('fillable','CrudController@getOffers');

Route::group(['prefix'=>LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]],function ()
{
    Route::group(['prefix'=>'offers'],function() {
       // Route::get('store','CrudController@store');
        Route::get('create','CrudController@create');
        Route::post('store','CrudController@store')->name('offer.store');

    });


});

