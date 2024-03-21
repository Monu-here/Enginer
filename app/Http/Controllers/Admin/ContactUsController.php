<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
    }
    public function add(Request $request)
    {
        if ($request->getMethod() == "POST") {
            $contact = new Contact();
            $contact->name = $request->name;
            $contact->phone = $request->phone;
            $contact->prov = $request->prov;
            $contact->email = $request->email;
            $contact->desc = $request->desc;
            $contact->save();
            return redirect()->back()->with('sucess', 'Thank you for contact us');
        }

    }
}
