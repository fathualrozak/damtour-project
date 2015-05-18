<?php namespace App\Http\Controllers\Program;

use App\Currency;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Package;
use App\Program;

use App\ProgramCategory;
use App\Service;
use Request;

class ProgramController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $programs = Program::all();

		return view('program.index', compact('programs'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $services = Service::all();
        $categories = ProgramCategory::all();
        $packages = Package::all();
        $currencies = Currency::all();

        return view('program.create', compact('services', 'categories', 'packages', 'currencies'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Request::all();
        Program::create($input);

        return redirect('program');
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
		//
	}

	/**
	 * Update the specified resource in storage.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
