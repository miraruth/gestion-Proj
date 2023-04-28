<!DOCTYPE html>
<html lang="en">
@include('head')
    </html>
    <body class="login-page">
        <div class='loader'>
            <div class='spinner-grow text-primary' role='status'>
              <span class='sr-only'>Loading...</span>
            </div>
          </div>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-12 col-lg-4">
                    <div class="card login-box-container">
                        <div class="card-body">
                            <div class="authent-logo">
                                <img src="{{asset('../../assets/images/logo@2x.png')}}" alt="">
                            </div>
                            <div class="authent-text">
                                <p>Welcome to Circl</p>
                                <p>Enter your details to create your account</p>
                            </div>

                            <form>
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="nom" placeholder="nom">
                                        <label for="floatingInput">votre nom</label>
                                      </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="prenom" placeholder="prenom">
                                        <label for="floatingInput">votre prenom</label>
                                      </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="numero" placeholder="******">
                                        <label for="floatingInput">votre numero</label>
                                      </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="name@example.com">
                                        <label for="floatingInput">votre Email</label>
                                      </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="password" placeholder="*****">
                                        <label for="floatingPassword">mot de passe</label>
                                      </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="password" placeholder="Confirm Password">
                                        <label for="floatingPassword">Confirmer le mot de passe</label>
                                      </div>
                                </div>
                                <div class="mb-3 form-check">
                                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                  <label class="form-check-label" for="exampleCheck1">j'accepte<a href="#">conditions</a></label>
                                </div>
                                <div class="d-grid">
                                <button type="submit" class="btn btn-primary m-b-xs">inscrire</button>
                            </div>
                              </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
         
        
        <!-- Javascripts -->
@include('footer')
    </body>
</html>