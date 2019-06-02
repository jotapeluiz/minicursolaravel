<?php

namespace App\Http\Controllers;

use App\Subject;
use App\Contact;
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
        $contact = new Contact();
        // metodo fill preenche todos os dados vindo do form de acordo com o array $fillable da model
        $contact->fill($request->validated());
        $contact->save();

        return redirect('/contatos/create')->with('status', 'Mensagem enviada com sucesso!');
    }
}
