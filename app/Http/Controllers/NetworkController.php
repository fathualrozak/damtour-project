<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Jamaah;
use App\Network;
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
            $q = $request->get('q');
            $jamaahs = Jamaah::where('firstname', 'LIKE', '%'.$q.'%')->get();

            $new = $jamaahs->map(function($jamaah)
            {
                $results = [
                    'id' => Hashids::encode($jamaah->id),
                    'firstname' => $jamaah->firstname,
                    'lastname' => $jamaah->lastname,
                    'idcard_number' => $jamaah->idcard_number
                ];
                return $results;
            });

            return $new;
        } else {
            $networks = Network::get()->toTree();
            return $networks;
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
