<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- bootstrap link --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        {{-- <link rel="icon" type="image/png" href="/images/logo.png"> --}}
    <link rel="stylesheet" href="/css/style.css">
    <title>Dashboard</title>
</head>

<body>


            <!-- The sidebar -->
            <div class="sidebar">
                <a class="active" href="#">MENU</a>
                <a href="#">Regions</a>
                <a href="#">Departements</a>
                <a href="#">Villes</a>
                <a href="#">Communes</a>
                <a href="#">Communes d'arrondissements</a>
                <a href="#">Arrondissements</a>
                <a href="#">Communautés rurales</a>
                <div style="background-color:rgb(231, 12, 12);">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Deconnexion') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>

            <!-- Page content -->
            <div class="content">

            </div>

</body>

</html>
