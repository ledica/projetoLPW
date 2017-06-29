<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class EntryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
       /* foreach ($posts as $post) {
           echo '<br/>'.$post->title;
        }*/
        return view('entry/index')->with('posts', $posts);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('entry/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if(!$request->is_private){
            $request->is_private=0; 
        }
        $post = new Post;
        $post->title = $request->title;
        $post->is_private = $request->is_private;
        $post->content = $request->content;
        $post->tag = $request->tag;
        $post->user_id = $request->user_id;
        $post->save();

        return redirect()->action('EntryController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $post = Post::find($id);
       return view('entry/show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
       return view('entry/edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
   {

        if(!$request->is_private){
            $request->is_private=0; 
        }
       $post = Post::find($id);
       $post->title = $request->title;
       $post->is_private = $request->is_private;
       $post->content = $request->content;
       $post->tag = $request->tag;

       $post->save();

       return redirect()->action('EntryController@index');
   }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::find($id)->delete();
        return redirect()->action('EntryController@index');
    }

    
}
