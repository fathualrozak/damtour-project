<?php namespace App\Http\Controllers;

use App\Address;
use App\City;
use App\District;
use App\Heir;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Jamaah;
use App\Relationship;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Vinkla\Hashids\Facades\Hashids;

class JamaahController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $jamaah = Jamaah::all();
        $properties = getProperties();

		return view('jamaah.index', compact('jamaah', 'properties'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $properties = getProperties();
        $districts = District::all()->lists('name', 'id');
        $cities = City::all()->lists('name', 'id');
        $relationships = Relationship::all()->lists('name', 'id');

		return view('jamaah.create', compact('properties', 'districts', 'cities', 'relationships'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
        $request = $request->all();

        $address = Address::create($request);
        $address_id = ['address_id' => $address->id];
        $request = array_merge($request, $address_id);

        $jamaah = Jamaah::create($request);
        $jamaah_id = ['jamaah_id' => $jamaah->id];
        $request = array_merge($request, $jamaah_id);

        Heir::create($request);

        return redirect('jamaah');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $id = Hashids::decode($id);
        $jamaah = Jamaah::find($id[0]);
        $properties = getProperties();

        return view('jamaah.show', compact('jamaah', 'properties'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $id = Hashids::decode($id);
        $jamaah = Jamaah::find($id[0]);

        $line1 = $jamaah->address->line1;
        $line2 = $jamaah->address->line2;
        $district = $jamaah->address->district->id;
        $city = $jamaah->address->city->id;
        $heir_firstname = $jamaah->heir->heir_firstname;
        $heir_lastname = $jamaah->heir->heir_lastname;
        $relationship = $jamaah->heir->relationship->id;

        $references = [
            'line1' => $line1,
            'line2' => $line2,
            'district_id' => $district,
            'city_id' => $city,
            'heir_firstname' => $heir_firstname,
            'heir_lastname' => $heir_lastname,
            'relationship_id' => $relationship,
            'birthdate' => $jamaah->birthdate->toDateString()
        ];

        unset($jamaah->birthdate);
        $jamaah = $jamaah->toArray();
        $jamaah = array_merge($jamaah, $references);
        $jamaah = (object) $jamaah;

        $properties = getProperties();
        $districts = District::all()->lists('name', 'id');
        $cities = City::all()->lists('name', 'id');
        $relationships = Relationship::all()->lists('name', 'id');

        return view('jamaah.edit', compact('jamaah', 'properties', 'districts', 'cities', 'relationships'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
        $id = Hashids::decode($id);
        $jamaah = Jamaah::find($id[0]);

        $jamaah->fill($request->all())->save();
        $jamaah->heir->fill($request->all())->save();
        $jamaah->address->fill($request->all())->save();

        return redirect(route('jamaah.show', Hashids::encode($jamaah->id)));
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
