<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactForm;

class LeadController extends Controller
{
    
    public function postContact(Request $request) {
        $lead = new Lead();
        $lead->name = $request->get('name');
        $lead->org = $request->get('org');
        $lead->phone = $request->get('phone');
        $lead->email = $request->get('email');
        $lead->message = $request->get('message');
        //$lead->save();
        Mail::to("cyborgk@gmail.com")->send(new ContactForm($lead));
        return redirect('/');
	}
    
    
}
