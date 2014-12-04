<?php

class EducativeProgramsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /educativeprograms
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$this->layout->content = View::make('EducativePrograms.index',compact('educative'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /educativeprograms/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$this->layout->content = View::make('EducativePrograms.create'); //compac se utiliza para agregar un objeto a la vista.
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /educativeprograms
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$input=Input::all();
		EducativeProgram::create($input);
		return Redirect::route('EducativePrograms.index')->with('message','Se ha registrado una Nueva Carrera');
	}

	/**
	 * Display the specified resource.
	 * GET /educativeprograms/{id}
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
	 * GET /educativeprograms/{id}/edit
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
	 * PUT /educativeprograms/{id}
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
	 * DELETE /educativeprograms/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}