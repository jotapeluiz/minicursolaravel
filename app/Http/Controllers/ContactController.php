<?php

namespace App\Http\Controllers;

use App\Subject;
use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        $subjects = Subject::all();

        return view('contacts.contact', compact('subjects'));
    }

    public function store(Request $request)
    {
        $contact = new Contact();
        // metodo fill preenche todos os dados vindo do form de acordo com o array $fillable da model
        $contact->fill($request->all());
        $contact->save();

        return redirect('/')->with('status', 'Mensagem enviada com sucesso!');
    }
}
