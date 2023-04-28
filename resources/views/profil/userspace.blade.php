@extends('common.template')
@section('contenu')
      <div class='loader'>
        <div class='spinner-grow text-primary' role='status'>
          <span class='sr-only'>Loading...</span>
        </div>
      </div>

        <div class="page-container">
          <div class="page-header">
            <nav class="navbar navbar-expand-lg d-flex justify-content-between">

                <div class="logo">
                  <a class="navbar-brand" href="index.html"></a>
                </div>
                <div class="" id="headerNav">
                  <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                      <a class="nav-link search-dropdown" href="#" id="searchDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i data-feather="search"></i></a>
         
                    <li class="nav-item dropdown">
                      <a class="nav-link profile-dropdown" href="#" id="profileDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="{{asset('../../assets/images/avatars/profile-image.png')}}" alt=""></a>
                      <div class="dropdown-menu dropdown-menu-end profile-drop-menu" aria-labelledby="profileDropDown">
                        <a class="dropdown-item" href="#"><i data-feather="user"></i>Profil</a>
                        <a class="dropdown-item" href="#"><i data-feather="inbox"></i>Messages</a>
                        <a class="dropdown-item" href="#"><i data-feather="edit"></i>Activités<span class="badge rounded-pill bg-success">12</span></a>
                     
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i data-feather="settings"></i>paramettre</a>
                        <a class="dropdown-item" href="#"><i data-feather="unlock"></i>deconnexion</a>
                      
                      </div>
                    </li>
                  </ul>
              </div>
            </nav>
        </div>

            <div class="page-content">
                <div class="main-wrapper">
                    <div class="row">
                      <div class="col-sm-12 col-md-2">
                            <div class="d-grid gap-2">
                              <button class="btn btn-danger m-b-sm" type="button">import de fichier</button>
                          </div>
                          <div class="file-manager-menu">
                            <span class="fmm-title">Mes fichiers</span>
                            <ul class="list-unstyled">
                              <li>
                                  <a href="#"><i class="far fa-folder"></i>tout mes fichiers</a>
                              </li>
            
                              <li>
                                  <a href="#"><i class="far fa-star"></i>Importants</a>
                              </li>
                              <li>
                                  <a href="#"><i class="far fa-trash-alt"></i>suppression</a>
                              </li>
                          </ul>
                          </div>
                          <div class="file-manager-menu label-menu">
                            <span class="fmm-title">categories</span>
                            <ul class="list-unstyled">
                              <li>
                                  <a href="#"><i class="bg-danger"></i>travail</a>
                              </li>
                              <li>
                                  <a href="#"><i class="bg-success"></i>Personnel</a>
                              </li>

                              <li>
                                  <a href="#"><i class="bg-primary"></i>agenda</a>
                              </li>

                          </ul>
                          </div>
                          <div class="file-manager-menu storage-info">
                            <span class="fmm-title">espace</span>
                            <span class="storage-info-text">60GB used of 100GB</span>
                            <div class="progress m-b-sm">
                              <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                          </div>
                      <div class="col-sm-12 col-md-10">
                        <div class="row">
                          <div class="col-sm-6 col-md-3">
                            <div class="card card-file-manager">
                              <div class="card-file-header text-danger">
                                <i class="fas fa-file-image"></i>
                              </div>
                              <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted">IMG_08719.jpg</h6>
                                <p class="card-text">657.9kb</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-6 col-md-3">
                            <div class="card card-file-manager">
                              <div class="card-file-header text-primary">
                                <i class="fas fa-file-word"></i>
                              </div>
                              <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted">doc.docs</h6>
                                <p class="card-text">27kb</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-6 col-md-3">
                            <div class="card card-file-manager">
                              <div class="card-file-header">
                                <i class="fas fa-file-code"></i>
                              </div>
                              <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted">IMG_08719.jpg</h6>
                                <p class="card-text">657.9kb</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-6 col-md-3">
                            <div class="card card-file-manager">
                              <div class="card-file-header text-info">
                                <i class="fas fa-file-audio"></i>
                              </div>
                              <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted">music.mp3</h6>
                                <p class="card-text">49.7kb</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <h4 class="m-b-md m-t-md">Dossiers</h4>
                          <div class="col-4">
                            <div class="card folder">
                              <div class="card-body">
                                  <div class="folder-icon">
                                    <i class="far fa-folder-open"></i>
                                  </div>
                                  <div class="folder-info">
                                      <a href="#">Photos</a>
                                      <span>14 files, 334mb</span>
                                  </div>
                              </div>
                          </div>
                          </div>
                          <div class="col-4">
                            <div class="card folder">
                              <div class="card-body">
                                  <div class="folder-icon">
                                    <i class="far fa-folder-open"></i>
                                  </div>
                                  <div class="folder-info">
                                      <a href="#">Music</a>
                                      <span>5 files, 944mb</span>
                                  </div>
                              </div>
                          </div>
                          </div>
                        </div>
                        <div class="row">
                          <h4 class="m-b-md m-t-md">Fichiers</h4>
                          <div class="col-sm-6 col-md-3">
                            <div class="card card-file-manager">
                              <div class="card-file-header text-danger">
                                <i class="fas fa-file-image"></i>
                              </div>
                              <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted">IMG_08719.jpg</h6>
                                <p class="card-text">657.9kb</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-6 col-md-3">
                            <div class="card card-file-manager">
                              <div class="card-file-header">
                                <i class="fas fa-file-word"></i>
                              </div>
                              <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted">doc.docs</h6>
                                <p class="card-text">27kb</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-6 col-md-3">
                            <div class="card card-file-manager">
                              <div class="card-file-header text-warning">
                                <i class="fas fa-file-code"></i>
                              </div>
                              <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted">IMG_08719.jpg</h6>
                                <p class="card-text">657.9kb</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-6 col-md-3">
                            <div class="card card-file-manager">
                              <div class="card-file-header">
                                <i class="fas fa-file-audio"></i>
                              </div>
                              <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted">music.mp3</h6>
                                <p class="card-text">49.7kb</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-6 col-md-3">
                            <div class="card card-file-manager">
                              <div class="card-file-header">
                                <i class="fas fa-file-code"></i>
                              </div>
                              <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted">IMG_08719.jpg</h6>
                                <p class="card-text">657.9kb</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-6 col-md-3">
                            <div class="card card-file-manager">
                              <div class="card-file-header text-info">
                                <i class="fas fa-file-audio"></i>
                              </div>
                              <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted">music.mp3</h6>
                                <p class="card-text">49.7kb</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                      </div>
                                  
                </div>
              
            </div>
        
@endsection
