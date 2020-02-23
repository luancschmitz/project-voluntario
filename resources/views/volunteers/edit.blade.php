@extends('layouts.master')

@section('title', 'Editar Voluntário')

@section('container')

<h2>Editar um Voluntário</h2>

{!! Form::model($volunteer, ['route' => ['volunteer.update', $volunteer->id], 'method' => 'PUT']) !!}

    @include('volunteers.form')
    
{!! Form::close() !!}

<a href="{{ route('volunteer.index') }}">Voltar para a Lista</a>

@endsection