@extends('common.template')
@section('contenu')

        <div class="page-container">
            <div class="page-header">
                <nav class="navbar navbar-expand-lg d-flex justify-content-between">
                  <div class="" id="navbarNav">
                    <ul class="navbar-nav" id="leftNav">
                      <li class="nav-item">
                        <a class="nav-link" id="sidebar-toggle" href="#"><i data-feather="arrow-left"></i></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Settings</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Help</a>
                      </li>
                    </ul>
                    </div>
                    <div class="logo">
                      <a class="navbar-brand" href="index.html"></a>
                    </div>
                    <div class="" id="headerNav">
                      <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                          <a class="nav-link search-dropdown" href="#" id="searchDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i data-feather="search"></i></a>
                          <div class="dropdown-menu dropdown-menu-end dropdown-lg search-drop-menu" aria-labelledby="searchDropDown">
                            <form>
                              <input class="form-control" type="text" placeholder="Type something.." aria-label="Search">
                            </form>
                            <h6 class="dropdown-header">Recent Searches</h6>
                            <a class="dropdown-item" href="#">charts</a>
                            <a class="dropdown-item" href="#">new orders</a>
                            <a class="dropdown-item" href="#">file manager</a>
                            <a class="dropdown-item" href="#">new users</a>
                          </div>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link notifications-dropdown" href="#" id="notificationsDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false">3</a>
                          <div class="dropdown-menu dropdown-menu-end notif-drop-menu" aria-labelledby="notificationsDropDown">
                            <h6 class="dropdown-header">Notifications</h6>
                            <a href="#">
                              <div class="header-notif">
                                <div class="notif-image">
                                  <span class="notification-badge bg-info text-white">
                                    <i class="fas fa-bullhorn"></i>
                                  </span>
                                </div>
                                <div class="notif-text">
                                  <p class="bold-notif-text">faucibus dolor in commodo lectus mattis</p>
                                  <small>19:00</small>
                                </div>
                              </div>
                            </a>
                            <a href="#">
                              <div class="header-notif">
                                <div class="notif-image">
                                  <span class="notification-badge bg-primary text-white">
                                    <i class="fas fa-bolt"></i>
                                  </span>
                                </div>
                                <div class="notif-text">
                                  <p class="bold-notif-text">faucibus dolor in commodo lectus mattis</p>
                                  <small>18:00</small>
                                </div>
                              </div>
                            </a>
                            <a href="#">
                              <div class="header-notif">
                                <div class="notif-image">
                                  <span class="notification-badge bg-success text-white">
                                    <i class="fas fa-at"></i>
                                  </span>
                                </div>
                                <div class="notif-text">
                                  <p>faucibus dolor in commodo lectus mattis</p>
                                  <small>yesterday</small>
                                </div>
                              </div>
                            </a>
                            <a href="#">
                              <div class="header-notif">
                                <div class="notif-image">
                                  <span class="notification-badge">
                                    <img src="../../assets/images/avatars/profile-image.png" alt="">
                                  </span>
                                </div>
                                <div class="notif-text">
                                  <p>faucibus dolor in commodo lectus mattis</p>
                                  <small>yesterday</small>
                                </div>
                              </div>
                            </a>
                            <a href="#">
                              <div class="header-notif">
                                <div class="notif-image">
                                  <span class="notification-badge">
                                    <img src="../../assets/images/avatars/profile-image.png" alt="">
                                  </span>
                                </div>
                                <div class="notif-text">
                                  <p>faucibus dolor in commodo lectus mattis</p>
                                  <small>yesterday</small>
                                </div>
                              </div>
                            </a>
                          </div>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link profile-dropdown" href="#" id="profileDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="../../assets/images/avatars/profile-image.png" alt=""></a>
                          <div class="dropdown-menu dropdown-menu-end profile-drop-menu" aria-labelledby="profileDropDown">
                            <a class="dropdown-item" href="#"><i data-feather="user"></i>Profile</a>
                            <a class="dropdown-item" href="#"><i data-feather="inbox"></i>Messages</a>
                            <a class="dropdown-item" href="#"><i data-feather="edit"></i>Activities<span class="badge rounded-pill bg-success">12</span></a>
                            <a class="dropdown-item" href="#"><i data-feather="check-circle"></i>Tasks</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i data-feather="settings"></i>Settings</a>
                            <a class="dropdown-item" href="#"><i data-feather="unlock"></i>Lock</a>
                            <a class="dropdown-item" href="#"><i data-feather="log-out"></i>Logout</a>
                          </div>
                        </li>
                      </ul>
                  </div>
                </nav>
            </div>

            <div class="page-content">
              <div class="main-wrapper">
                <div class="row">
                  <div class="col-md-6 col-xl-3">
                    <div class="card stat-widget">
                        <div class="card-body">
                            <h5 class="card-title">Nombre d'utilisateur</h5>
                              <h2>132</h2>
                              <p>actifs</p>
                              <div class="progress">
                                <div class="progress-bar bg-info progress-bar-striped" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-xl-3">
                    <div class="card stat-widget">
                        <div class="card-body">
                            <h5 class="card-title">nombre de projet en cours</h5>
                              <h2>287</h2>
                            
                              <div class="progress">
                                <div class="progress-bar bg-success progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-xl-3">
                    <div class="card stat-widget">
                        <div class="card-body">
                            <h5 class="card-title">nombres de taches en cours</h5>
                              <h2>7.4K</h2>
                             
                              <div class="progress">
                                <div class="progress-bar bg-danger progress-bar-striped" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-xl-3">
                    <div class="card stat-widget">
                        <div class="card-body">
                            <h5 class="card-title">Nombre d'administrateur</h5>
                              <h2>87</h2>
                              <div class="progress">
                                <div class="progress-bar bg-primary progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6 col-xl-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">resumé des depence</h5>
                            <div id="apex1"></div>
                        </div>
                    </div>
                  </div>
                

                  <div class="col-sm-12 col-md-4">
                  <div class="card stat-widget">
                      <div class="card-body">
                          <h5 class="card-title">acceder aux projets</h5>
                          <div class="transactions-list">
                            <div class="tr-item">
                              <div class="tr-company-name">
                                <div class="tr-icon tr-card-icon tr-card-bg-primary text-primary">
                                  <i data-feather="user"></i>
                                </div>
                                <div class="tr-text">
                                  <a href="#"><h4>Project Managment</h4></a>
                                  <p>Management</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="transactions-list">
                            <div class="tr-item">
                              <div class="tr-company-name">
                                <div class="tr-icon tr-card-icon tr-card-bg-info text-info">
                                  <i data-feather="user"></i>
                                </div>
                                <div class="tr-text">
                                  <a href="#"><h4>Design</h4></a>
                                  <p>Creative</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="transactions-list">
                            <div class="tr-item">
                              <div class="tr-company-name">
                                <div class="tr-icon tr-card-icon tr-card-bg-secondary">
                                  <i data-feather="user"></i>
                                </div>
                                <div class="tr-text">
                                  <a href="#"><h4>Financial Accounting</h4></a>
                                  <p>Finance</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="transactions-list">
                            <div class="tr-item">
                              <div class="tr-company-name">
                                <div class="tr-icon tr-card-icon tr-card-bg-primary text-primary">
                                  <i data-feather="user"></i>
                                </div>
                                <div class="tr-text">
                                  <a href="#"><h4>Testing</h4></a>
                                  <p>Manager</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="transactions-list">
                            <div class="tr-item">
                              <div class="tr-company-name">
                                <div class="tr-icon tr-card-icon tr-card-bg-secondary text-secondary">
                                  <i data-feather="user"></i>
                                </div>
                                <div class="tr-text">
                                  <a href="#"><h4>Development</h4></a>
                                  <p>Developers</p>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                  </div>
                </div>

                </div>
                <div class="row">
                  <div class="col-md-12 col-lg-8">
                      <div class="card table-widget">
                          <div class="card-body">
                              <h5 class="card-title">liste des utilisateurs</h5>
                              <div class="table-responsive">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">nom</th>
                                    <th scope="col">Prenom</th>
                                    <th scope="col">Mail</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Modifications</th>
                                    <th scope="col">Suppression</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row"><img src="../../assets/images/avatars/profile-image.png" alt="">Anna Doe</th>
                                    <td>Modern</td>
                                    <td>#53327</td>
                                    <td>loiutudio</td>
                                    <td><button type="button" class="btn btn-danger m-b-xs">Danger</button></td>
                                    <td><button type="button" class="btn btn-warning m-b-xs">Warning</button></td>
                                  </tr>
                                  <tr>
                                    <th scope="row"><img src="../../assets/images/avatars/profile-image.png" alt="">Anna Doe</th>
                                    <td>Modern</td>
                                    <td>#53327</td>
                                    <td>loiutudio</td>
                                    <td><button type="button" class="btn btn-danger m-b-xs">Danger</button></td>
                                    <td><button type="button" class="btn btn-warning m-b-xs">Warning</button></td>
                                  </tr>
                                  <tr>
                                    <th scope="row"><img src="../../assets/images/avatars/profile-image.png" alt="">Anna Doe</th>
                                    <td>Modern</td>
                                    <td>#53327</td>
                                    <td>loiutudio</td>
                                    <td><button type="button" class="btn btn-danger m-b-xs">Danger</button></td>
                                    <td><button type="button" class="btn btn-warning m-b-xs">Warning</button></td>
                                  </tr>
                                  <tr>
                                    <th scope="row"><img src="../../assets/images/avatars/profile-image.png" alt="">Anna Doe</th>
                                    <td>Modern</td>
                                    <td>#53327</td>
                                    <td>loiutudio</td>
                                    <td><button type="button" class="btn btn-danger m-b-xs">Danger</button></td>
                                    <td><button type="button" class="btn btn-warning m-b-xs">Warning</button></td>
                                  </tr>
                                  <tr>
                                    <th scope="row"><img src="../../assets/images/avatars/profile-image.png" alt="">Anna Doe</th>
                                    <td>Modern</td>
                                    <td>#53327</td>
                                    <td>loiutudio</td>
                                    <td><button type="button" class="btn btn-danger m-b-xs">Danger</button></td>
                                    <td><button type="button" class="btn btn-warning m-b-xs">Warning</button></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                      </div>
                  </div>
                  

                  </div>

              </div>
              
            </div>
        </div>
@endsection