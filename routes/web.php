<?php
use App\Model\User;
use \Illuminate\Support\MessageBag;
use Illuminate\Http\Request;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', function(){

    return view('home.index');
})->name('home');

Route::get('/home/test', function(){
    return view('home.test');
})->name('home.test');


Route::resource('auth','Admin\AuthController');



Route::get('/test', function (){
    $msg = [
        'mail'=>"mall 的消息",
        'notice'=>"notice 的消息"
    ];
    $mesage = new MessageBag($msg);
    return view('test.index',['user'=>DB::table('users')->paginate(1)])->withErrors($mesage);
});


Route::post('/file', function (Request $request){
    dd($request->file('profile_picture'));
})->name('fileTest');