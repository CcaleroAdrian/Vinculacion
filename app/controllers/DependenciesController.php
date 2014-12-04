<?php

class DependenciesController extends \BaseController { 

	/**
	 * Display a listing of the resource.
	 * GET /dependencies
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$this->layout->content = View::make('dependencies.index',compact('dependencies'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /dependencies/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$this->layout->content = View::make('dependencies.create', compact('dependencies')); //compac se utiliza para agregar un objeto a la vista.
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /dependencies
	 *
	 * @return Response
	 */
	public function store() 
	{
		//
		$input=Input::all();
		$input['dependencies_id']=1;
		dependency::create($input);
		return Redirect::route('dependencies.index')->with('message','Se ha registrado una nueva dependencia');
	}
	

	/**
	 * Display the specified resource.
	 * GET /dependencies/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$this->layout->content = View::make('dependencies.show', compact('dependencies')); //compac se utiliza para agregar un objeto a la vista.
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /dependencies/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$this->layout->content = View::make('dependencies.edit', compact('dependencies')); //compac se utiliza para agregar un objeto a la vista.
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /dependencies/{id}
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
	 * DELETE /dependencies/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}