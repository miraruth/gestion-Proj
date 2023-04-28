@extends('common.template')
@section('contenu')
    <body class="error-page err-404">
        <div class='loader'>
            <div class='spinner-grow text-primary' role='status'>
              <span class='sr-only'>Loading...</span>
            </div>
          </div>
        <div class="container">
            <div class="error-container">
                <div class="error-info">
                    <h1>404</h1>
                    <p>It seems that the page you are looking for no longer exists.<br>Please contact our <a href="#">help center</a> or go to the <a href="index.html">homepage</a>.</p>
                </div>
                <div class="error-image"></div>
            </div>
        </div>
         
@endsection