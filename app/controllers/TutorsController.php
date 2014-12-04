<?php

class TutorsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /tutors
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$this->layout->content = View::make('tutors.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /tutors/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$this->layout->content = View::make('tutors.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /tutors
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$input=Input::all();
		Tutor::create($input);
		return Redirect::route('tutors.index')->with('message','Se ha registrado un nuevo Tutor');
	}

	/**
	 * Display the specified resource.
	 * GET /tutors/{id}
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
	 * GET /tutors/{id}/edit
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
	 * PUT /tutors/{id}
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
	 * DELETE /tutors/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}