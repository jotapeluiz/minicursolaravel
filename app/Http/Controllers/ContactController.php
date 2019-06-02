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
        $user = Auth::user();
        $contacts = Contact::all();

        return view('contacts.list', compact('contacts', 'user'));
    }

    public function store(ContactStoreRequest $request)
    {
        $data = $request->validated();
        
        $message = new Message($data);
        $contact = new Contact($data);

        $message->save();
        $message->contact()->save($contact);

        return redirect('/contatos/create')->with('status', 'Mensagem enviada com sucesso!');
    }
}
