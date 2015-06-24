<?php namespace App\Http\Controllers;

use App\Currency;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Payer;
use App\Payment;
use App\PaymentMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class PaymentController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$payments = Payment::paginate(2);

        return view('payment.index', compact('payments'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $currencies = Currency::all()->lists('name', 'id');
        $paymentMethod = PaymentMethod::all()->lists('name', 'id');

		return view('payment.create', compact('currencies', 'paymentMethod'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
        $payer = Payer::findOrNew(['name' => $request->payer_name, 'contact' => $request->payer_contact]);

        Payment::create([
            'date' => $request->input('date'),
            'amount' => $request->input('amount'),
            'invoice_id' => $request->input('invoice_id'),
            'payer_id' => $payer->id,
            'currency_id' => $request->input('currency_id'),
            'payment_method_id' => $request->input('payment_method_id'),
            'user_id' => Auth::user()->id
        ]);

        return redirect('/payment');

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
