<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
	        'agreement' => 'accepted',
	        'first_name' => 'required',
	        'last_name' => 'required',
	        'email' => 'required|email:rfc,dns',
        ],[
	        'agreement.accepted' => 'Graag de voorwaarden accepteren',
            'first_name.required' => 'Voornaam niet ingevuld',
            'last_name.required' => 'Achternaam niet ingevuld',
            'email.required' => 'E-mailadres niet ingevuld',
            'email.email' => 'E-mailadres bestaat niet.',
        ]);

        if ($validator->fails()) {

            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $newsletter = [
        	'first_name' => $request->input('first_name'),
			'last_name' => $request->input('last_name'),
			'email' => $request->input('email'),
    		'agreement' => $request->input('agreement'),
    	];

    	$email = $request->input('email');

// 	    \Mail::to('inbox@weleadtheway.nl')->send(new \App\Mail\MyTestMail($newsletter));

	    $mailchimp = new \MailchimpMarketing\ApiClient();

		$mailchimp->setConfig([
			'apiKey' => config('services.mailchimp.key'),
			'server' => 'us14'
		]);


		$response = $mailchimp->lists->addListMember('eef5f4dec0', [
			'email_address' => $email,
			'status' => 'subscribed'
		]);


	    return back()->with('success', 'Bedankt voor uw aanmelding!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
