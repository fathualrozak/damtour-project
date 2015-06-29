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
	public function index(Request $request)
	{
        if ($request->ajax()) {
            if ($request->input('q')) {
                $q = $request->get('q');
                $programs = Program::where('name', 'LIKE', '%' . $q . '%')->get();
            } else {
                $programs = Program::all();
            }
            $result = $programs->map(function ($program) {
                $schedule = !is_null($program->schedule) ? $program->schedule->format('d-m-Y') : '-';
                $schedule_end = !is_null($program->schedule_end) ? $program->schedule_end->format('d-m-Y') : '-';
                $remap = [
                    'id' => Hashids::encode($program->id),
                    'service' => $program->service->name,
                    'name' => $program->name,
                    'category' => $program->programCategory->name,
                    'package' => $program->package->name,
                    'schedule' => $schedule,
                    'schedule_end' => $schedule_end,
                    'price' => $program->currency->name . ' ' . number_format($program->price, 0, ',', '.'),
                    'booked' => $program->booking->count()
                ];
                return $remap;
            });
            return $result;
        } else {
            return view('program.index');
        }
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
        if ($request->input('service_id') == 2) {
            $request = $request->except(['schedule', 'schedule_end', 'payment_before']);
        } else {
            $request = $request->all();
        }
        Program::create($request);

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
        $id = Hashids::decode($id);
        $program = Program::find($id[0]);

        $schedule = !is_null($program->schedule) ? $program->schedule->format('Y-m-d') : null;
        $schedule_end = !is_null($program->schedule_end) ? $program->schedule_end->format('Y-m-d') : null;
        $payment_before = !is_null($program->payment_before) ? $program->payment_before->format('Y-m-d') : null;

        $reset = [
            "schedule" => $schedule,
            "schedule_end" => $schedule_end,
            "payment_before" => $payment_before
        ];
        unset($program->schedule, $program->payment_before);

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
