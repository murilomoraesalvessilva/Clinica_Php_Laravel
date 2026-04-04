@extends('layouts.app')

@section('titulo', 'Lista de Pacientes')

@section('conteudo')

    <h1>Pacientes</h1>

    @forelse($pacientes as $paciente)

        <p>{{ $paciente->nome }}</p>
    @empty
        <p>Nenhum paciente cadastrado.</p>
    @endforelse
@endsection
