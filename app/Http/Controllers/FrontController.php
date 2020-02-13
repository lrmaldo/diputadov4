<?php namespace irineomolina\Http\Controllers;

use irineomolina\Http\Requests;
use irineomolina\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FrontController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
	 return view('index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function contacto()
	{
		return view('contacto');
	}

	
}
