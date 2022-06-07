<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;

class contactcontroller extends Controller
{
    public function getadmincontactlist(){
        $contacts = Contact::orderBy('created_at', 'desc')->paginate(9);
        return view('admin.contactform', ['contacts' => $contacts]);
    }

        public function getcontactform()
    {
        return view('contact');
    }
    public function postcontact(Request $request)
    {
        $this->validate($request, ['title' => 'required|min:3',
            'content' => 'required|max:200']);

        $contacts = new Contact([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message')
        ]);
        $contacts->save();
        return redirect()->route('index')->with('info', 'succsessfully send your message');
    }
    public function getadmincontactdelete($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->route('admin.contactlist')->with('info', 'succsessfully dele');
    }
}
