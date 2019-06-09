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
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $contacts = Contact::all();

        return view('contacts.list', compact('contacts'));
    }

    public function create()
    {
        $subjects = Subject::all();

        return view('contacts.contact', compact('subjects'));
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
        $data = $request->validated();

        $contact = Contact::findOrFail($data['id']);
        $message = $contact->message;

        $message->fill($data);
        $contact->fill($data);

        $message->save();
        $message->contact()->save($contact);

        return redirect('/contacts/list');
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $message = $contact->message;

        $message->contact()->delete($contact);
        $message->delete();

        return redirect('/contacts/list');
    }
}
