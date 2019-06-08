<?php

namespace App\Http\Controllers;

use App\Subject;
use App\Contact;
use App\Message;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ContactStoreRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contacts.index');
    }

    public function create()
    {
        $subjects = Subject::all();

        return view('contacts.contact', compact('subjects'));
    }

    public function list()
    {
        $contacts = Contact::all();

        return view('contacts.list', compact('contacts'));
    }

    public function show($id)
    {
        $subjects = Subject::all();
        $contact = Contact::findOrFail($id);

        return view('contacts.contact', compact('contact', 'subjects'));
    }

    public function store(ContactStoreRequest $request)
    {
        $data = $request->validated();

        $message = new Message($data);
        $contact = new Contact($data);

        $message->save();
        $message->contact()->save($contact);

        return redirect('/contacts/create')->with('status', 'Mensagem enviada com sucesso!');
    }

    public function edit(ContactStoreRequest $request)
    {
                
    }
}
