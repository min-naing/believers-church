<?php

namespace App\Http\Controllers\Church;

use App\ContactUs;
use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $from;

    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('church.contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactFormRequest $request)
    {

        $name = $request->get('name');
        $email = $request->get('email');
        // $from = $request->email;
        $msg = $request->get('message');

        // echo "<script>alert('$email')</script>";

        // Mail::to($from)->queue(new ContactUsMail($to, $message));

        $data = [
            'name' => $name,
            'mail' => $email,
            'msg' => $msg
        ];

        Mail::queue('emails.welcome', $data, function($message) use ($email){

            $message->from($email, "Believers Church Myanmar");

            $message->to('minthetnaing90@gmail.com')->subject('From Believers Church Myanmar Website contactor');

        });

        // ContactUs::create($request->all());

        // return back()->with('success', 'Thanks for contacting us! your message has been successfully sent to us.');
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
