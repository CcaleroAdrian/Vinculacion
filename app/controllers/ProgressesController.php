<?php

class ProgressesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /progresses
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$this->layout->content = View::make('progresses.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /progresses/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$this->layout->content = View::make('progresses.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /progresses
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$input=Input::all();
		Group::create($input);
		return Redirect::route('progresses.index')->with('message','Se ha registrado un nuevo avance');
	}

	/**
	 * Display the specified resource.
	 * GET /progresses/{id}
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
	 * GET /progresses/{id}/edit
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
	 * PUT /progresses/{id}
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
	 * DELETE /progresses/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}