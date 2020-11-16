<?php
use App\User;
use App\address;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', function () 
   {
    return view('welcome');
   });

 Auth::routes();
 Route::get('/list', 'Profile@index')->name('home');

 Route::get('/myform', 'HomeController@myform')->name('myform');

 Route::post('/myform', 'HomeController@myFormSubmit')->name('myform');

 Route::get('/custom', 'HomeController@Custom')->name('Custom');

 Route::get('/home', 'HomeController@index')->name('home');


 Route::get('/contact', 'PracticeController@contact');


 Route::get('/contact/{$id}', 'PracticeController@contact');

   //Read the data from database//
 Route::get('/read',function()

    {

       $results=DB::Select('Select * From posts where id =?',[3]);
       return $results;

     });

  //Update the data
 Route::get('/read',function() 
     {

        $updated=DB::Update('update posts set title="wordpress" where id =?',[4]);
        return $updated;
      });


 Route::get('/delete',function()
    {

        $deleted=DB::delete('delete from posts where id =?',[5]);

         return $deleted;
    });


///////////////////////one to one //////////////////
    Route::get('/insert',function()
       {

       $user= User::findOrFail(1);
       $address = new address(['name'=>'abc 123av NY NY 1123']);
       $user->address()->save($address);
      });


   /*
|--------------------------------------------------------------------------
| CRUD Functions
|----------------------------------------------------------------------
*/

 Route::get('/create', 'PracticeController@create');
 Route::post('/create', 'PracticeController@store')->name('create');

 Route::get('/show','PracticeController@show');
 Route::get('/datashow/{id}','PracticeController@datashow');
 Route::get('/datashow/{id}','PracticeController@datashow')->name('datashow');

Route::get('/datashow/{id}/edit','PracticeController@edit')->name('edit')->name('edit');
Route::get('/update','PracticeController@update')->name('update');



Route::get('/', function () 
   {
    
    $data=[
      'title'=>'hii',
      'content'=>'welcome you'
    ];  
    Mail::send(mail ,function(message)
    {
    $message->to('shailja@vibhuti.biz',shailja)->subject('hello');





    });


    });