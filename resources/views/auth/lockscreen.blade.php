<!DOCTYPE html>
<html lang="en">
@include('head')
    <body class="login-page">
        <div class='loader'>
            <div class='spinner-grow text-primary' role='status'>
              <span class='sr-only'>en cour...</span>
            </div>
          </div>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-12 col-lg-4">
                    <div class="card login-box-container">
                        <div class="card-body">
                            <div class="authent-logo">
                                <img src="../../assets/images/avatars/profile-image.png" width="60" alt="">
                            </div>
                            <div class="authent-text">
                                <p>Bienvenue!</p>
                                <p>entrez votre mot de passe pour deverouller</p>
                            </div>
                            <form>
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                        <label for="floatingPassword">mot de passe</label>
                                      </div>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-info m-b-xs">deverouller</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         
        
@include('footer')
    </body>
</html>