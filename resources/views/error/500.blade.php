@extends('common.template')
@section('contenu')
    <body class="error-page err-404">
        <div class='loader'>
            <div class='spinner-grow text-primary' role='status'>
              <span class='sr-only'>en cours...</span>
            </div>
          </div>
        <div class="container">
            <div class="error-container">
                <div class="error-info">
                    <h1>500</h1>
                    <p>Ooopss... quelque chose n'a pas marché<br>essayez de recharger la page <a href="#">help center</a></p>
                </div>
                <div class="error-image"></div>
            </div>
        </div>

@endsection