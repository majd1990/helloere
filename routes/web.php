<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers;
use app\public;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
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
    $obg=['Name'=>"majd emran",'Id'=>5,'Gender'=>'male'];

    return view('welcome');
});
Route::get('/show-id/{id}', function ($id) {
    return "welcome route".$id;
})->name("a");
Route::get('/show-string/{id?}', function () {
    return "welcome rout0e string";
})->name("b");
Route::namespace('App\Http\Controllers\Front')->group(function()
{
    Route::get('namspaceadmin','adminController@showAdmin');
});
Route::group(['prefix'=>'users'],function(){
    Route::get('myname',function()
    {
        return 'majd';
    });
});
Route::get('check',function()
{
    return 'with middleware';
})->middleware('auth');
Route::get('login',function()
{
    return 'must be logged in';
})->name('login');
Route::namespace('App\Http\Controllers\Front')->group(function()
{
    Route::get('checkme','FirstController@showmyname')->middleware('auth');
    Route::get('checkme1','FirstController@showmyname1');
    Route::get('checkme2','FirstController@showmyname2');
   

});
Route::namespace('App\Http\Controllers')->group(function()
{
    Route::resource('news','NewsFeedController');
    Route::get('trycontrol/{data}/{ag}','FirstController2@getindex');
    Route::get('landing','LandingController@getLanding');
    Auth::routes(['verify'=>true]);
    Route::get('/redirect/{service}','SocialController@redirect');
    Route::get('/callback/{service}','SocialController@callback');

});
Route::namespace('App\Http\Controllers')->group(function()
{

    Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

});
Route::get('portofolio',function()
{
    return view('portofliosec');
}
);

//Route::get('/forgot-password', function () {
  //return view('auth.passwords.reset');
//})->middleware('guest')->name('password.request');
/*Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);
 
    $status = Password::sendResetLink(
        $request->only('email')
    );
 
    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');*/
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

use App\Mail\TestEmail;
use Illuminate\Support\Facades\Mail;

Route::get('send-email', function(){
    $mailData = [
        "name" => "Test NAME",
        "dob" => "12/12/1990"
    ];

    Mail::to("majdemran1990@gmail.com")->send(new TestEmail($mailData));

    dd("Mail Sent Successfully!");
});
