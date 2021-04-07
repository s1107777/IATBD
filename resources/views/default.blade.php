<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <script src='/js/main.js' defer></script>
    <title>PassenOpJeDier</title>
</head>
<body>
    <header class="header">
        <nav class="nav">
            <h1 class="nav__h1">PassenOpJeDier</h1>
            <ul class="nav__ul">
                <li class="nav__li">
                    <a class="nav__li--a" href="/home">Home</a>
                </li>
                @if(Auth::check() && Auth::user()->role == 'Gebruiker')
                    <li class="nav__li">
                        <a class="nav__li--a" href="/home/create">Oppassen</a>
                    </li>
                    <li class="nav__li">
                        <a class="nav__li--a" href="/dashboard">Uitloggen</a>
                    </li>
                @endif
                @if(Auth::check() && Auth::user()->role == 'Admin')
                    <li class="nav__li">
                        <a class="nav__li--a" href="/aanvraag">Berichten</a>
                    </li>
                    <li class="nav__li">
                    <a class="nav__li--a" href="/dashboard">Uitloggen</a>
                </li>
                @endif
            </ul>
        </nav>
    </header>
    @yield('content')
</body>
</html>