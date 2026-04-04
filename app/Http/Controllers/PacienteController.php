<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index()
    {
        $pacientes = Paciente::all();

        return view('pacientes.index', ['pacientes' => $pacientes]);
    }
    public function create()
    {
        return view('pacientes.create');
    }

    public function store(Request $request)
    {
        Paciente::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone
        ]);

        return redirect()->route('paciente.index');
    }

    public function show(string $id)
    {
        $paciente = Paciente::find($id);
        
        return view('pacientes.show' , ['paciente' => $paciente]);
    }

    public function edit(string $id)
    {
         $paciente = Paciente::find($id);

         return view('pacientes.edit' , ['paciente' => $paciente]);
    }

    public function update(Request $request, string $id)
    {
        $paciente = Paciente::find($id);

        $paciente->nome = $request->nome;
        $paciente->email = $request->email;
        $paciente->telefone = $request->telefone;
        
        $paciente->save();

        return redirect()->route('paciente.index');
    }

    public function destroy(string $id)
    {
        $paciente = Paciente::find($id);
        $paciente->delete();

        return redirect()->route('paciente.index');
    }
}
