<?php namespace App\Http\Controllers;

use App\City;
use App\District;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Jamaah;
use App\Network;
use App\Relationship;
use Illuminate\Http\Request;

class NetworkController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
        if($request->ajax()) {
            $networks = Network::all();

            $networks = $networks->map(function ($network) {
                $name = !is_null($network->book) ? $network->fullName : "System";
                $network->name = $name;

                return $network;
            });

            if ($request->input('list')) {
                return $networks;
            } else {
                return $networks->toTree();
            }

        } else {
            $networks = Network::all();

            $properties = getProperties();
            $districts = District::all()->lists('name', 'id');
            $cities = City::all()->lists('name', 'id');
            $relationships = Relationship::all()->lists('name', 'id');

            return view('network.index', compact('networks', 'properties', 'districts', 'cities', 'relationships'));
        }
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
