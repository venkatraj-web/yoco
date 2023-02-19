<?php

namespace App\Http\Controllers\Forms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Contact;

class contactFormController extends Controller
{
    function StoreContactForm(Request $request){
        $request->validate([
            'name' => 'required|alpha',
            'email' => 'required|email|unique:contacts,email',
            'organization' => 'required',
            'company_type' => 'required'
        ]);

        
    $contact_data = new Contact();
    $contact_data->name = $request->name;
    $contact_data->email = $request->email;
    $contact_data->company_type = $request->company_type;
    $contact_data->organization = $request->organization;

    $save = $contact_data->save();

    if($save){
        return redirect()->back()->with('success','you need to verify your account. we have sent you an activation link, please check your email.');
    }else{
        return redirect()->back()->with('fail','Something went wrong. failed to register.');
    }

    }

}
