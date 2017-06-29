<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class UserController extends Controller
{

	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function index()
	{

		$users = \App\User::all();
		return view('user/index')->with('users', $users);
	}



	public function show($id){
        $user = User::find($id);
		return view('user/show')->with('user', $user);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	$user = User::find($id);
    	return view('user/edit')->with('user', $user);
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {
     	return view('user/create');
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$user = new User;

    	$user->name = $request->name;
    	$user->username = $request->username;
    	$user->email = $request->email;
    	$user->about = $request->about;
    	$user->password = $request->password;

    	$user->save();

    	return redirect()->action('UserController@index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    	$user = User::find($id);
    	$user->name = $request->name;
    	$user->username = $request->username;
    	$user->email = $request->email;
    	$user->about = $request->about;
    	$user->password = $request->password;
    	$user->save();

    	return redirect()->action('UserController@index');
    }
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function destroy($id)
   {    
       Post::where("user_id", $id)->delete();
       User::find($id)->delete();
        return redirect()->action('UserController@index');
   }

   
}
