<?php

class GroupsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /groups
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$this->layout->content = View::make('groups.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /groups/create
	 *
	 * @return Response
	 */
	public function create() 
	{
		//
		$data = ['program' => DB::table('educative_programs')->lists('nombre', 'id')];
		$this->layout->content = View::make('groups.create',$data);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /groups
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$input=Input::all();
		Group::create($input);
		return Redirect::route('groups.index')->with('message','Se ha registrado un nuevo grupo');
	}

	/**
	 * Display the specified resource.
	 * GET /groups/{id}
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
	 * GET /groups/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /groups/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /groups/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}