<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

	    // Validating inputs
        $validator = Validator::make($request->all(), [
	        'companyname' => 'required',
	        'firstname' => 'required',
	        'lastname' => 'required',
	        'email' => 'required|email:rfc,dns',
	        'telephone' => 'required',
            'message' => 'required',
            'agreement' => 'accepted',
        ],[
	        'agreement.accepted' => 'Graag de voorwaarden accepteren',
            'firstname.required' => 'Voornaam niet ingevuld',
            'lastname.required' => 'Achternaam niet ingevuld',
            'companyname.required' => 'Bedrijfsnaam is niet ingevuld',
            'email.required' => 'E-mailadres niet ingevuld',
            'email.email' => 'E-mailadres bestaat niet.',
            'telephone.required' => 'Telefoonnummer niet ingevuld',
        ]);

        if ($validator->fails()) {

            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $company = $request->input('company_name');

        $mail = [
        	'first_name' => $request->input('first_name'),
			'last_name' => $request->input('last_name'),
			'company_name' => $request->input('company_name'),
    		'email' => $request->input('email'),
    		'tel' => $request->input('tel'),
			'message' => $request->input('message'),
    	];

	    \Mail::to('info@itraa.nl')->send(new \App\Mail\MyTestMail($mail, $company));

	    return back()->with('success', 'Bedankt, we proberen z.s.m. je bericht te beantwoorden!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Make new Application and save
/*
    	$mail = new Mail;
    	$mail->first_name = $request->input('first_name');
    	$mail->last_name = $request->input('last_name');
    	$mail->company_name = $request->input('company_name');
    	$mail->email = $request->input('email');
    	$mail->tel = $request->input('tel');
    	$mail->message = $request->input('message');
*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
