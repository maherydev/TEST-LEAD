@extends('header')

@section('content')
<form class="container mt-3">
<h1>Veuillez repondre aux questions ci-dessous</h1>
    <p> Seriez vous capable de faire un projet sur Laravel?</p>
    <form action="" method="post" >
    <div class="form-check">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <label class="form-check-label" for="check1">
        <input type="checkbox" class="form-check-input" id="check1" name="oui"
               value="something" checked> OUI
        </label>
    </div>
    <div class="form-check">
        <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check1" name="non"
               value="something" checked> NON, Preciser pourquoi? <input type="text"
               class="form-control" id="pkw">

        </label>
    </div>
    </form>
    <div class="form-group">
    <button class="btn-info">Valider
    </button>
    <nav>
        <ul class="pagination">
            <li><a href="#" aria-label='Previous' >
                    <span aria-hidden='true'>&laquo;</span>
                    <span class="sr-only">Previous</span>
            </a></li>

            <li><a href="#">Q1</a></li>
            <li><a href="#">Q2</a></li>

            <li><a href="#" aria-label='Next' >
                    <span aria-hidden='true'>&raquo;</span>
                    <span class="sr-only">Next</span>
            </a></li>
        </ul>

    </nav>


    </nav>
</div>
@endsection
