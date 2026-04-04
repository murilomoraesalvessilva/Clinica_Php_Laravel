<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo') - Minha Clínica</title>
</head>
<body>
    <nav>
        <a href="/pacientes">Paciente</a>
        <a href="/consultas">Consultas</a>
    </nav>

    <main>
        @yield('conteudo')
    </main>

    <footer>
        <p>° 2024 Minha Clinica</p>
    </footer>
</body>
</html>
