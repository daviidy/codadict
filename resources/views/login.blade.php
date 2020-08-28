<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/94491a0993.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css"/>

    <!-- Title Page-->
    <title></title>

    <!-- Fontfaces CSS-->
    <link href="/assets/css//font-face.css" rel="stylesheet" media="all">
    <link href="/assets/vendor/font-awesome-4.7/css/font-awesome.min.cs" rel="stylesheet" media="all">
    <link href="/assets/vendor/font-awesome-5/css/fontawesome-all.min.ss" rel="stylesheet" media="all">
    <link href="/assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <!-- ==============================================
    Favicons
    =============================================== -->
    <link rel="shortcut icon" href="/assets/imgs/icon/codact.png">
    <link rel="apple-touch-icon" href="/assets/imgs/icon/codact.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/imgs/icon/codact.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/imgs/icon/codact.png">

    <!-- Bootstrap CSS-->

    <!-- /assets/vendor CSS-->
    <link href="/assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="/assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.cs" rel="stylesheet" media="all">
    <link href="/assets/vendor/wow/animate.cs" rel="stylesheet" media="all">
    <link href="/assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="/assets/vendor/slick/slick.cs" rel="stylesheet" media="all">
    <link href="/assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/assets/css/theme.css" rel="stylesheet" media="all">
<style media="screen">
.rating {
  display: flex;
  flex-direction: row-reverse;
  justify-content: center
}

.rating>input {
  display: none
}

.rating>label {
  position: relative;
  width: 1em;
  font-size: 3vw;
  color: #FFD600;
  cursor: pointer
}

.rating>label::before {
  content: "\2605";
  position: absolute;
  opacity: 0
}

.rating>label:hover:before,
.rating>label:hover~label:before {
  opacity: 1 !important
}

.rating>input:checked~label:before {
  opacity: 1
}

.rating:hover>input:checked~label:before {
  opacity: 0.4
}
.main-section{
	margin:0 auto;
	padding: 20px;
	margin-top: 100px;
	background-color: #fff;
	box-shadow: 0px 0px 20px #c1c1c1;
}
.fileinput-remove,
.fileinput-upload{
	display: none;
}
label{text-transform: uppercase;}

@media only screen and (max-width: 650px) {
  .rating>label {
      position: relative;
      width: 3em;
      font-size: 6vw;
      color: #FFD600;
      cursor: pointer;
  }
}
</style>
</head>


<body class="">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li class="active">
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">john doe</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">john doe</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">

                          <div class="col-lg-12 col-md-12 col-sm-12">
                              <div class="card">
                                  <!--div class="card-header">
                                      <strong>Basic Form</strong> Elements
                                  </div-->
                                  <div class="card-body card-block">
                                      <form action="" method="post" enctype="multipart/form-data" class="">
                                          <!--div class="row form-group">
                                              <div class="col col-md-3">
                                                  <label class=" form-control-label">Static</label>
                                              </div>
                                              <div class="col-12 col-md-9">
                                                  <p class="form-control-static">Username</p>
                                              </div>
                                          </div-->
                                          <div class="row form-group">
                                              <div class="col col-md-12">
                                                  <label for="text-input" class=" form-control-label">1- Que voulez-vous exactement ?</label>
                                              </div>
                                              <div class="col-12 col-md-9">
                                                  <select name="select" id="select" class="form-control" required>
                                                      <option value="0">Landing Page</option>
                                                      <option value="1">Blog</option>
                                                      <option value="2">Boutique en ligne</option>
                                                      <option value="3">Application web</option>
                                                      <option value="3">Application Android</option>
                                                      <option value="3">Application IOS</option>
                                                      <option value="3">Application web</option>
                                                      <option value="3">Augmentation de votre presence sur les résaux sociaux</option>
                                                      <option value="3">Apprendre le developpement web</option>
                                                      <option value="3">Apprendre le developpement d'applications Android</option>
                                                      <option value="3">Apprendre à investir sur la publicité en ligne</option>
                                                      <option value="3">Trader sur le marché du FOREX</option>
                                                      <option value="3">Application web</option>
                                                  </select>
                                              </div>
                                          </div>
                                          <div class="row form-group">
                                              <div class="col col-md-12">
                                                  <label for="text-input" class=" form-control-label">2- Quel est votre nom complet ?</label>
                                              </div>
                                              <div class="col-12 col-md-9">
                                                  <input type="text" id="text-input" name="text-input" placeholder="Nom complet" class="form-control" required>
                                              </div>

                                          </div>
                                          <div class="row form-group">
                                              <div class="col col-md-12">
                                                  <label for="text-input" class=" form-control-label">3- Quel est le nom de votre entreprise ? (facultatif)</label>
                                              </div>
                                              <div class="col-12 col-md-9">
                                                  <input type="text" id="text-input" name="text-input" placeholder="Nom de votre entreprise ? (facultatif)" class="form-control" required>
                                              </div>

                                          </div>
                                          <div class="row form-group">
                                              <div class="col col-md-12">
                                                  <label class=" form-control-label">4- A quel point votre demande est-elle urgente ?</label>
                                              </div>
                                              <div class="col-12 col-md-9">
                                                  <div class="form-check-inline form-check">
                                                    <div class="rating">
                                                      <input type="radio" name="rating" value="5" id="5">
                                                      <label for="5">☆</label>
                                                      <input type="radio" name="rating" value="4" id="4">
                                                      <label for="4">☆</label>
                                                      <input type="radio" name="rating" value="3" id="3">
                                                      <label for="3">☆</label>
                                                      <input type="radio" name="rating" value="2" id="2">
                                                      <label for="2">☆</label>
                                                      <input type="radio" name="rating" value="1" id="1">
                                                      <label for="1">☆</label>
                                                    </div>
                                                  </div>
                                              </div>
                                          </div>

                                          <div class="row form-group">
                                              <div class="col col-md-12">
                                                  <label class=" form-control-label">5- Quel est votre budget ? (facultatif)</label>
                                              </div>
                                              <div class="col-12 col-md-9">
                                                  <div class="form-check">
                                                      <div class="radio">
                                                          <label for="radio1" class="form-check-label ">
                                                              <input type="radio" id="radio1" name="radios" value="option1" class="form-check-input">Moins de 350 €
                                                          </label>
                                                      </div>
                                                      <div class="radio">
                                                          <label for="radio2" class="form-check-label ">
                                                              <input type="radio" id="radio2" name="radios" value="option2" class="form-check-input">Autour de 1500 €
                                                          </label>
                                                      </div>
                                                      <div class="radio">
                                                          <label for="radio3" class="form-check-label ">
                                                              <input type="radio" id="radio3" name="radios" value="option3" class="form-check-input">Le ciel est la limite
                                                          </label>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>

                                          <div class="row form-group">
                                              <div class="col col-md-12">
                                                  <label for="date-input" class=" form-control-label">6- Quel est le délai pour votre projet (si vous voulez réaliser un projet) ?</label>
                                              </div>
                                              <div class="col-12 col-md-9">
                                                  <input type="date" id="date" name="text-input" placeholder="Le délai pour votre projet" class="form-control" required>
                                              </div>
                                          </div>
                                          <div class="row form-group">
                                              <div class="col col-md-12">
                                                  <label for="select" class=" form-control-label">7- Quelle est votre meilleure adresse email?</label>
                                              </div>
                                              <div class="col-12 col-md-9">
                                                  <input type="email" id="email-input" name="email-input" placeholder="Enter Email" class="form-control">
                                              </div>
                                          </div>

                                          <div class="row form-group">
                                              <div class="col col-md-12">
                                                  <label for="select" class=" form-control-label">8- Enfin, quel est votre numéro de téléphone ? (Whatsapp de préférence)</label>
                                              </div>
                                              <div class="col-12 col-md-9">
                                                  <input type="number" id="numberl-input" name="number-input" placeholder="Votre numéro de téléphone" class="form-control" required>
                                              </div>
                                          </div>

                                          <div class="row form-group">
                                              <div class="col col-md-12">
                                                  <label for="select" class=" form-control-label">9- Document</label>
                                              </div>
                                              <div class="col-12 col-md-9">
                                                <div class="file-loading">
                                                  <input id="file-1" type="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="2">
                                                </div>
                                              </div>
                                          </div>

                                      </form>
                                  </div>
                                  <div class="card-footer">
                                      <button type="submit" class="btn btn-primary btn-sm">
                                          <i class="far fa-paper-plane"></i> Envoyer
                                      </button>
                                      <button type="reset" class="btn btn-danger btn-sm">
                                          <i class="fa fa-ban"></i> Reset
                                      </button>
                                  </div>
                              </div>

                          </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>

    <script type="text/javascript">
    $(document).ready(function() {
      $("#file-1").fileinput({
        theme: 'fa',
        uploadUrl: '#',
        allowedFileExtensions: ['jpg', 'png', 'gif','pdf'],
        overwriteInitial: false,
        maxFileSize:2000,
        maxFilesNum: 10,
        slugCallback: function (filename) {
            return filename.replace('(', '_').replace(']', '_');
        }
    });

    });
    </script>
    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>



</body>

</html>
<!-- end document-->
