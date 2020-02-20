<?php namespace irineomolina\Http\Controllers;

use irineomolina\Http\Requests;
use irineomolina\Http\Controllers\Controller;
use Illuminate\Support\Farcades\Session;

use Collective\Html\FormFacade;

use Illuminate\Http\Request;
use Redirect;

class UsuarioController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$users = \irineomolina\User::All();
		return view('usuario.index',compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('usuario.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		\irineomolina\User::create([
			'name'=> $request->input('name'),
			'email'=>$request->input('email'),
			'password'=>bcrypt($request->input('password')),
		]);
		Session::flash('message','Usuario registrado correctamente');
		return redirect('/usuario')->with('message',"store");
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = \irineomolina\User::find($id);
		return view('usuario.edit',['user' => $user]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update( $id,Request $request)

	{
		$user =	\irineomolina\User::find($id);
		$user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
		
		//$user->fill($request-> all());
		$user->save();
		
		return  Redirect::to('/usuario');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		\irineomolina\User::destroy($id);
		return  Redirect::to('/usuario');
	}

}
