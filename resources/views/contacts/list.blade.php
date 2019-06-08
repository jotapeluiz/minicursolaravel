@extends('layouts.form')

<!-- @section('app-css')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection -->

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if(count($contacts) === 0)
                <div class="card-header">Não há Mensagens</div>
                @else
                <div class="card-header">Lista de Mensagens</div>
                <div class="card-body">
                    <div class="form-group row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Telefone</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">Assunto</th>
                                    <th scope="col">Mensagem</th>
                                    <th scope="col"> </th>
                                    <th scope="col"> </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($contacts as $contact)
                                <tr>
                                    <td scope="row">{{ $contact->id }}</td>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->phone }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->subject->description }}</td>
                                    <td>{{ $contact->message->message }}</td>
                                    <td><a href="{{ url('/contacts/show/'.$contact->id.'') }}" class="btn btn-primary btn-sm" role="button">Editar</a></td>
                                    <td><a href="#" class="btn btn-danger btn-sm" role="button">Excluir</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
