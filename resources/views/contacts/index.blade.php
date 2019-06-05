@extends('layouts.app')

@section('app-css')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('body')
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            {{ str_replace('-', ' de ', config('app.name', 'Laravel')) }}
        </div>

        <div class="subtitle m-b-md">
            Um exemplo básico de um projeto Laravel
        </div>

        <div class="flex-center">
            <div class="btn-group" role="group">
                <a href="{{ url('contatos/list') }}" type="button" class="btn btn-light">Visualizar mensagens</a>
                <a href="{{ url('contatos/create') }}" type="button" class="btn btn-light">Enviar mensagem</a>
            </div>
        </div>

        <div class="flex-center">
            <div class="links">
                <a href="https://laravel.com/docs">Documentação</a>
                <a href="https://laracasts.com">Laracasts</a>
            </div>
        </div>

    </div>
</div>
@endsection
