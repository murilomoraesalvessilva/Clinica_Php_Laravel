@extends('layouts.app')

@section('titulo', 'Paciente')

@section('conteudo')
    <h1>Pacientes</h1>
    <a href="{{ route('patients.create') }}" class="btn btn-success" style="margin-bottom: 20px;">NOVO PACIENTE</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Nascimento</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            @forelse($patients as $patient)
                <tr>
                    <td>{{ $patient->id }}</td>
                    <td>{{ $patient->name }}</td>
                    <td>{{ $patient->email }}</td>
                    <td>{{ $patient->phone }}</td>
                    <td>{{ $patient->date_birth }}</td>
                    <td>
                        <a href="{{ route('patients.show', $patient->id) }}" class="btn btn-primary">Ver</a>
                        <a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('patients.destroy', $patient->id) }}" method="POST" style="display:inline"></form>

                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger" onclick="return confirm('Tem certeza?')">Deletar</button>
                    </td>
                </tr>

            @empty
                <tr>
                    <td colspan="6" style="text-aligh:center">Nenhuma paciente cadastrado.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
