<?php
session_start();

?>

<!doctype html>
<html class="no-js" lang="">


<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | Admission Form</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="fonts/flaticon.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Select 2 CSS -->
    <link rel="stylesheet" href="css/select2.min.css">
    <!-- Date Picker CSS -->
    <link rel="stylesheet" href="css/datepicker.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Modernize js -->
    <script src="js/modernizr-3.6.0.min.js"></script>
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
        <!-- Header Menu Area Start Here -->
        <div class="navbar navbar-expand-md header-menu-one bg-light">
            <div class="nav-bar-header-one">
                <div class="header-logo">
                    <a href="index.html">
                       LOGO
                    </a>
                </div>
                  <div class="toggle-button sidebar-toggle">
                    <button type="button" class="item-link">
                        <span class="btn-icon-wrap">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="d-md-none mobile-nav-bar">
               <button class="navbar-toggler pulse-animation" type="button" data-toggle="collapse" data-target="#mobile-navbar" aria-expanded="false">
                    <i class="far fa-arrow-alt-circle-down"></i>
                </button>
                <button type="button" class="navbar-toggler sidebar-toggle-mobile">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <div class="header-main-menu collapse navbar-collapse" id="mobile-navbar">
                
                <ul class="navbar-nav">
                    <li class="navbar-item dropdown header-admin">      
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header">
                                <h6 class="item-title">Steven Zone</h6>
                            </div>
                            <div class="item-content">
                                <ul class="settings-list">
                                    <li><a href="#"><i class="flaticon-user"></i>My Profile</a></li>
                                    <li><a href="#"><i class="flaticon-list"></i>Task</a></li>
                                    <li><a href="#"><i class="flaticon-chat-comment-oval-speech-bubble-with-text-lines"></i>Message</a></li>
                                    <li><a href="#"><i class="flaticon-gear-loading"></i>Account Settings</a></li>
                                    <li><a href="#"><i class="flaticon-turn-off"></i>Log Out</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    
                    
                    
                </ul>
            </div>
        </div>
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            <div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
               <div class="mobile-sidebar-header d-md-none">
                    <div class="header-logo">
                        <a href="index.html"><img src="img/logo1.png" alt="logo"></a>
                    </div>
               </div>
            <div class="sidebar-menu-content">
                <ul class="nav nav-sidebar-menu sidebar-toggle-view">
                   
                    <li class="nav-item sidebar-nav-item">
                        <a href="#" class="nav-link"><i class="flaticon-classmates"></i><span>Candidats</span></a>
                        <ul class="nav sub-group-menu">
                            <li class="nav-item">
                                <a href="all-student.html" class="nav-link"><i class="fas fa-angle-right"></i>Liste de candidats
                                        </a>
                            </li>
                            <li class="nav-item">
                                <a href="student-details.html" class="nav-link"><i
                                        class="fas fa-angle-right"></i>Profil des candidats</a>
                            </li>
                            <li class="nav-item">
                                <a href="admit-form.html" class="nav-link"><i
                                        class="fas fa-angle-right"></i>Formulaire d'inscription</a>
                            </li>
                
                        </ul>
                    </li>
                    <li class="nav-item sidebar-nav-item">
                        <a href="#" class="nav-link"><i
                                class="flaticon-multiple-users-silhouette"></i><span>Electeurs</span></a>
                        <ul class="nav sub-group-menu">
                            <li class="nav-item">
                                <a href="all-teacher.html" class="nav-link"><i class="fas fa-angle-right"></i>Liste des électeurs
                                    </a>
                            </li>
                            <li class="nav-item">
                                <a href="teacher-details.html" class="nav-link"><i
                                         class="fas fa-angle-right"></i>Profil des électeurs</a>
                            </li>
                            <li class="nav-item">
                                <a href="add-teacher.php" class="nav-link"><i class="fas fa-angle-right"></i>Formulaire d'inscription
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li class="nav-item sidebar-nav-item">
                        <a href="#" class="nav-link"><i class="flaticon-couple"></i><span>Configuration de l'élection</span></a>
                        <ul class="nav sub-group-menu">
                            <li class="nav-item">
                                <a href="all-parents.html" class="nav-link"><i class="fas fa-angle-right"></i>Configuration
                                    </a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="nav-item sidebar-nav-item">
                        <a href="#" class="nav-link"><i class="flaticon-books"></i><span>Resultat</span></a>
                        <ul class="nav sub-group-menu">
                            <li class="nav-item">
                                <a href="all-book.html" class="nav-link"><i class="fas fa-angle-right"></i>Resultat
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                   
                   
                    
                    
                    <li class="nav-item">
                        <a href="student-attendence.html" class="nav-link"><i
                                ></i><span></span></a>
                    </li>
                    <li class="nav-item sidebar-nav-item">
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul class="nav sub-group-menu">
                            <li class="nav-item">
                                <a href="exam-schedule.html" class="nav-link"><i ></i>
                                    </a>
                            </li>
                            <li class="nav-item">
                                <a href="exam-grade.html" class="nav-link"><i class="fas fa-angle-right"></i>Exam
                                    Grades</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="transport.html" class="nav-link"><i
                               ></i><span></span></a>
                    </li>
                    <li class="nav-item">
                        <a href="hostel.html" class="nav-link"><i ></i><span></span></a>
                    </li>
                    <li class="nav-item">
                        <a href="notice-board.html" class="nav-link"><i
                              ></i><span></span></a>
                    </li>
                    <li class="nav-item">
                        <a href="messaging.html" class="nav-link"><i
                               ></i><span></span></a>
                    </li>
                    <li class="nav-item sidebar-nav-item">
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        
                    </li>
                    <li class="nav-item">
                        <a href="map.html" class="nav-link"><i
                                ></i><span></span></a>
                    </li>
                    <li class="nav-item">
                        <a href="account-settings.html" class="nav-link"><i
                                ></i><span></span></a>
                    </li>
                    <li class="nav-item">
                        <a href="account-settings.html" class="nav-link"><i
                                ></i><span></span></a>
                    </li>
                    <li class="nav-item">
                        <a href="account-settings.html" class="nav-link"><i
                                ></i><span></span></a>
                    </li>
                    <li class="nav-item">
                        <a href="account-settings.html" class="nav-link"><i
                                ></i><span></span></a>
                    </li>
                </ul>
            </div>
            </div>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                
                <!-- Breadcubs Area End Here -->
                <!-- Admit Form Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Ajouter un électeur</h3>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                    aria-expanded="false">...</a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Update</a>
                                   
                                </div>
                            </div>
                        </div>
                        <form class="new-added-form" action="code.php" method="POST">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Nom *</label>
                                    <input type="text" placeholder="Nom" name="nom2" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Prenom *</label>
                                    <input type="text" placeholder="Prenom" name="prenom2" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Filiere *</label>
                                    <select class="select2" name="filiere2">
                                        <option value=""></option>
                                        <option value="TIC">TIC</option>
                                        <option value="II">II</option>
                                        <option value="EE">EE</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Matricule *</label>
                                    <input type="text" placeholder="Matricule" name="matricule2" class="form-control air-datepicker"
                                        data-position='bottom right'>
                                  
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Email</label>
                                    <input type="email" placeholder="email" name="email2" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Phone</label>
                                    <input type="email" placeholder="phone" name="phone2" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Niveau</label>
                                    <input type="number" placeholder="Niveau" name="niveau2" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Departement *</label>
                                    <select class="select2" name="departement2">
                                        <option value="">Departement</option>
                                        <option value="Gnfo">Ginfo</option>
                                        <option value="Gel">Gel</option>
                                        <option value="ITH">ITH</option>
                                        <option value="ESF">ESF</option>
                                        <option value="Genie mecanique">GENIE MECANIQUE</option>
                                        <option value="Genie civil">GENIE CIVIL</option>
                                    </select>
                                </div>
                   
                            </div>
                            <button class="btn btn-primary btn-lg" name="enregistrement">Enregistrer</button>

                        </form>
                    </div>
                </div>
                   
                <?php
                
                                if(isset($_SESSION["status"]))
                                    {       
                                       echo "<h4 >".$_SESSION["status"]."</h4>";
                                      unset($_SESSION["status"]);
                                    }
                                ?>
                <!-- Admit Form Area End Here -->
                <footer class="footer-wrap-layout1">
                    <div class="copyright"> <a href="#"></a>  <a
                            href="#"></a></div>
                </footer>
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    <!-- jquery-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Select 2 Js -->
    <script src="js/select2.min.js"></script>
    <!-- Date Picker Js -->
    <script src="js/datepicker.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/admit-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jul 2019 12:20:38 GMT -->
</html>