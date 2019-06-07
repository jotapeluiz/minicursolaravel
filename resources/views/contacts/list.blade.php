@extends('layouts.app')

@section('app-css')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('body')
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            Lista de Mensagens
        </div>

        <div class="flex-center">
            @if(count($contacts) === 0)
                Não há mensagens
            @else
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Assunto</th>
                        <th scope="col">Mensagem</th>
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
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>

    </div>
</div>
@endsection
