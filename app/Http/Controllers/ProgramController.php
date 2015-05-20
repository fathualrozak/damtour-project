<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Currency;
use App\Package;
use App\Program;
use App\Service;
use App\ProgramCategory;


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
        $services = Service::all()->lists('name', 'id');
        $categories = ProgramCategory::all()->lists('name', 'id');
        $packages = Package::all()->lists('name', 'id');
        $currencies = Currency::all()->lists('name', 'id');

        return view('program.create', compact('services', 'categories', 'packages', 'currencies'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
        Program::create($request->all());

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
        $program = Program::find($id);

        $services = Service::all()->lists('name', 'id');
        $categories = ProgramCategory::all()->lists('name', 'id');
        $packages = Package::all()->lists('name', 'id');
        $currencies = Currency::all()->lists('name', 'id');

        return view('program.edit', compact('program', 'services', 'categories', 'packages', 'currencies'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$program = Program::find($id);
        $program->fill($request->input())->save();

        return redirect('program');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$program = Program::find($id);
        $program->delete();

        return redirect('program');
	}

}
