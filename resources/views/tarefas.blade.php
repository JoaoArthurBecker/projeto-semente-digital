<!-- resources/views/tarefas.blade.php -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefas - Semente Digital</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <ul class="menu">
                <li><a href="{{ url('/home') }}">Home</a></li>
                <li><a href="{{ url('/tarefas') }}">Tarefas</a></li>
            </ul>
        </nav>
        <h1>Minhas Tarefas</h1>
    </header>

    <section>
        <p>Aqui você pode agendar suas tarefas e gerenciar sua agenda.</p>
    </section>

    <footer>
        <p>&copy; {{ date('Y') }} Semente Digital. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
