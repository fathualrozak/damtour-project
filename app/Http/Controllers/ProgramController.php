<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Currency;
use App\Package;
use App\Program;
use App\Service;
use App\ProgramCategory;
use Vinkla\Hashids\Facades\Hashids;


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
        $properties = getProperties();

        return view('program.create', compact('services', 'categories', 'packages', 'currencies', 'properties'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
        if ($request->ajax()) {
            $q = $request->get('q');
            $programs = Program::where('name', 'LIKE', '%'.$q.'%')->get();

            $result = $programs->map(function($program)
            {
                $remap = [
                    'id' => Hashids::encode($program->id),
                    'service' => $program->service->name,
                    'name' => $program->name,
                    'category' => $program->programCategory->name,
                    'package' => $program->package->name,
                    'schedule' => $program->schedule->format('d-M-Y'),
                    'days_length' => $program->days_length.' Hari',
                    'price' => $program->currency->name.' '.number_format($program->price,0,',','.'),
                ];
                return $remap;
            });

            return $result;
        } else {
            Program::create($request->all());

            return redirect('program');
        }
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

        $reset = [
            "schedule" => $program->schedule->format('Y-m-d'),
            "payment_before" => $program->payment_before->format('Y-m-d'),
            "down_payment" => $program->getOriginal('down_payment')
        ];
        unset($program->schedule, $program->payment_before, $program->down_payment);

        $program = $program->toArray();
        $program = array_merge($program, $reset);

        $program = (object) $program;

        $services = Service::all()->lists('name', 'id');
        $categories = ProgramCategory::all()->lists('name', 'id');
        $packages = Package::all()->lists('name', 'id');
        $currencies = Currency::all()->lists('name', 'id');
        $properties = getProperties();

        return view('program.edit', compact('program', 'services', 'categories', 'packages', 'currencies', 'properties'));
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
