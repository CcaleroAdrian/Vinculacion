<?php

class ProgramFactsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /programfacts
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$this->layout->content = View::make('programFacts.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /programfacts/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$this->layout->content = View::make('programFacts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /programfacts
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
	 * GET /programfacts/{id}
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
	 * GET /programfacts/{id}/edit
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
	 * PUT /programfacts/{id}
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
	 * DELETE /programfacts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}