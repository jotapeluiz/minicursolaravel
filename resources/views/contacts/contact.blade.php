@extends('layouts.form')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ Route::has('/contacts/create') ? 'Mande sua mensagem' : 'Edite a mensagem' }}</div>

                <div class="card-body">
                    @if(Route::has('/contacts/create'))
                        <form method="POST" action="{{ action('ContactController@store') }}">
                    @else
                        <form method="POST" action="{{ action('ContactController@edit') }}">
                        @method('PUT')
                    @endif
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nome</label>

                            <div class="col-md-6">
                                <input
                                    id="name"
                                    name="name"
                                    type="text"
                                    class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                    value="{{ isset($contact->name) ? $contact->name : old('name') }}"
                                    autofocus
                                >
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail</label>

                            <div class="col-md-6">
                                <input
                                    id="email"
                                    name="email"
                                    type="text"
                                    class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                    value="{{ isset($contact->email) ? $contact->email : old('email') }}"
                                >
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">Telefone</label>

                            <div class="col-md-6">
                                <input
                                    id="phone"
                                    type="text"
                                    class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}"
                                    name="phone"
                                    value="{{ isset($contact->phone) ? $contact->phone : old('phone') }}"
                                >
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="subject_id" class="col-md-4 col-form-label text-md-right">Assunto</label>

                            <div class="col-md-6">
                                <select class="form-control" name="subject_id">
                                @foreach($subjects as $subject)
                                    <option value="{{ $subject->id }}">{{ $subject->description }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="message" class="col-md-4 col-form-label text-md-right">Mensagem</label>

                            <div class="col-md-6">
                                <textarea id="message" name="message" class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }}" rows="8" cols="80">
                                {{ isset($contact->message->message) ? $contact->message->message : old('message') }}
                                </textarea>
                                @error('message')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    Enviar
                                </button>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
