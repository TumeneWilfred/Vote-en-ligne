<?php 
session_start(); 
    if (@$_SESSION["status"] != "login Reuissi") 
    {
        header("location: index.php"); 
        exit(); 
        
    }
   
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
    <link rel="stylesheet" href="logo.css">
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
                    <img class="logo" src="img/logo.png" alt="logo">
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
                        <a href="#" class="nav-link"><i
                                class="flaticon-multiple-users-silhouette"></i><span>Utilisateurs</span></a>
                        <ul class="nav sub-group-menu">
                            <li class="nav-item">
                                <a href="index2.php" class="nav-link"><i class="fas fa-angle-right"></i>Liste des utilsateurs
                                    </a>
                            </li>
                           
                            <li class="nav-item">
                                <a href="add-teacher.php" class="nav-link"><i class="fas fa-angle-right"></i>Formulaire d'inscription
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li class="nav-item sidebar-nav-item">
                        <a href="#" class="nav-link"><i class="flaticon-couple"></i><span>Listes</span></a>
                        <ul class="nav sub-group-menu">
                             <li class="nav-item">
                                <a href="creationListes.php" class="nav-link"><i class="fas fa-angle-right"></i>Creation des listes
                                    </a>
                            </li>
                            <li class="nav-item">
                                <a href="voirListes.php" class="nav-link"><i class="fas fa-angle-right"></i>Voir les listes
                                    </a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="nav-item sidebar-nav-item">
                        <a href="#" class="nav-link"><i class="flaticon-couple"></i><span>Configuration de l'élection</span></a>
                        <ul class="nav sub-group-menu">
                            <li class="nav-item">
                                <a href="configurationElection.php" class="nav-link"><i class="fas fa-angle-right"></i>Configuration
                                    </a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="nav-item sidebar-nav-item">
                        <a href="#" class="nav-link"><i class="flaticon-couple"></i><span>Poste</span></a>
                        <ul class="nav sub-group-menu">
                            <li class="nav-item">
                                <a href="poste.php" class="nav-link"><i class="fas fa-angle-right"></i>Poste
                                    </a>
                                    <a href="listePoste.php" class="nav-link"><i class="fas fa-angle-right"></i>liste des postes
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
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li >
                        <a href="#" class="nav-link"><i ></i><span></span></a>
                        <ul >
                            <li >
                                <a  class="nav-link"><i ></i>
                                    </a>
                            </li>
                           
                        </ul>
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
                    <?php
                        include("DbConnection.php"); 
                        $table = "poste"; 
                        $id = $_GET["id"]; 
                        $editPoste = $database->getReference($table)->getChild($id)->getValue();
                    ?>
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Création d'un poste</h3>
                            </div>
                            <div class="dropdown">
                            <a href="index.php">   <button class="btn btn-primary btn-lg">DECONNEXION</button></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Update</a>
                                   
                                </div>
                            </div>
                        </div>
                        <form class="new-added-form" action="code2.php" method="POST">
                        <input type="hidden" name="id" value="<?= $id; ?>">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Creer un poste </label>
                                    <input type="text" value="<?= $editPoste["nomPoste"]; ?>" name="nomPoste" class="form-control" required>
                               <br>
                                </div>
                                
                               
                               
                            </div>
                            <br>
                            <button class="btn btn-primary btn-lg btn-lg" name="modifPoste">MODIFIER</button>

                        </form>
                    </div>
                </div>
                   

           
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
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Select 2 Js -->
    <script src="js/select2.min.js"></script>
    <!-- Date Picker Js -->
    <script src="js/datepicker.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/main.js"></script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/admit-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jul 2019 12:20:38 GMT -->
</html>