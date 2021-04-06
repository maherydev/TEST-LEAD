<html>
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="{{asset('css/monstyle.css')}}" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="container">
    <div class="row" style="background-color: #34393f">
        <div class="col-xl-12 ">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link text-info" href="index.html">Acceuil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-info" href="enregistrer">Enregistrer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-info" href="resultat.html">Resultat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-info" href="a_propos.html">A propos</a>
                </li>
            </ul>
            </div>
        </div>
    </div>
@yield('content');
</body>
</html>


