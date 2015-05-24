<?php namespace App\Http\Controllers;

use App\Booking;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Item;
use App\Jamaah;
use App\Network;
use Carbon\Carbon;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Vinkla\Hashids\Facades\Hashids;

class BookingController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $bookings = Booking::all();

        return view('booking.index', compact('bookings'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $items = Item::all()->lists('name', 'id');

		return view('booking.create', compact('items'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
        $network = [
            'parent_id' => 0,
            'sponsor_id' => 1,
            'pos' => 'mid'
        ];

        $network = Network::create($network);

        $date = Carbon::now(new DateTimeZone('GMT+7'));
        $booking = [
            'program_id' => Hashids::decode($request->get('program_id'))[0],
            'jamaah_id' => Hashids::decode($request->get('jamaah_id'))[0],
            'date'      => $date,
            'code'      => Hashids::connection('booking')->encode($date->timestamp),
            'network_id' => $network->id
        ];

        $booking = Booking::create($booking);

        $booking->items()->attach($request->input('item_id'));

        return redirect('booking');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($code)
	{
        $booking = Booking::whereCode($code)->first();

        $items = $booking->items;
        $jamaah = $booking->jamaah;
        $properties = getProperties();

		return view('booking.show', compact('booking', 'jamaah', 'properties', 'items'));
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
