<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }



    public function Custom()
    {

        echo "CUSTOM";
        die('hello');
    }


    public function myform()
    {
        return view('myform');
    }




    public function returnResponse()
    {
        return view('returnResponse');
    }




    public function myFormSubmit(Request $request)
    {
        $title   = $request->title;
        $content = $request->content;
        // $message = $request->message;

          $addDataArr = [
         "title"=> $title,
         "content"=>$content,
         // "message"=>$message
                 ];
    try{
          DB::table("posts")->insert($addDataArr);
          echo "Record inserted successfully.<br/>";
        }

    catch(\Exception $e){
         // echo $e->getMessage();
         return back()->with('error',$e->getMessage());
        }        
        }


         // public function insert(Request $request) 
         //     {
         //         $title   = $request->title;
         //         $content = $request->content;
         //         DB::insert('insert into  (title,content) values(?)',[$title],[$content]);
         //         echo "Record inserted successfully.<br/>";
         //      }

    


 
    
}