<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PracticeController extends Controller
{
	// public function contact()
	// {

	// 	return view('contact');
	// }


	public function create()
	{
	    
	    // return"hello";
	    return view('create');
	 }

	public function store(Request $request)
	{

		//return $request->get('title');
		// return $request->all();
		$title = $request->title;
		// echo "title----".$title;
		// echo "<pre>";
		// print_r($request->all());
		// die();
		// $insertArr = [
		// 	"title" 	=> $title,
		// 	"content" 	=> 'dummy',
		// 	"created_at"=> date('Y-m-d H:i:s')
		// ];
		// Post::create($insertArr);
		// Post::create($insertArr);

		die('here');
	
        $post = new Post;

        $post->title = $request->title;
        $post->content = 'dummy';

        $post->save();
    
       return redirect('/create');
	}

          public function show()
          {

          $posts=Post::all();
          return view('show')->with(['posts' => $posts]);
          }
   
         
         public function datashow($id)
          {
           
          $posts=Post::findOrFail($id);
         return view('datashow')->with(['posts' => $posts]);
          }

           public function edit($id)
          {
           
          $posts=Post::findOrFail($id);
         return view('edit')->with(['posts' => $posts]);
          }

         public function update(Request $request,$id)
	
          {
           
          return"its working";
          }
     }