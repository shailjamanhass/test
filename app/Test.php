<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    Route::get('insert','StudInsertController@insertform');
Route::post('create','StudInsertController@insert');
}
