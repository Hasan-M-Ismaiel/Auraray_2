<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\Contact;
use App\Models\Email;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class StoreController extends Controller
{
    public function storeContact(StoreRequest $request)
    {
        $contact = Contact::create($request->validated());
        Alert::success('Success', 'Your message has been sent successfully, Thank you!');

        return redirect()->back();
    }

    public function storeEmail(Request $request)
    {
        if (! Email::where('email', $request->input('email_footer'))->exists()) {
            $email = Email::create([
                'email' => $request->email_footer
            ]);
            Alert::success('Success', 'Your email had been registered successfully, Thank you!');
        } else {
            Alert::toast('your email is already registered', 'Toast Type');
        }
        
        return redirect()->back();
    }
}
