<?php if (session_status()==PHP_SESSION_NONE) {
  session_start();
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Talibadio!</title> 
    <!-- cdn -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <!-- cdn -->

    <!-- css -->
      <link rel="stylesheet" type="text/css" href="bulma-0.7.1/css/bulma.min.css">
      <link rel="stylesheet" type="text/css" href="bulma-0.7.1/css/style.css">
    <!-- css -->
  </head>                                                                                                
  <body class="has-navbar-fixed-top">
    <nav class="navbar is-fixed-top is-transparent is-expanded" style="border-bottom:4px solid #07caad  ">
      <div class="navbar-brand">
        <a class="navbar-item" href="image/talibadio logo.png">
          <img src="image/talibadio logo.png" width="112" height="28">
        </a>
        <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>

      <div id="navbarExampleTransparentExample" class="navbar-menu">
        <div class="navbar-start">
          <a class="navbar-item" href="#">
            A propos
          </a>
        </div>

        <div class="navbar-end">
          <div class="navbar-item">
            <div class="field is-grouped">
              <?php
                // require_once('../controleur/login_controle.php');
                // if (isset($_GET['menbre_true']) AND isset($_SESSION['id_user']))
                if(isset($_SESSION['id_user'])) 
                {
                  ?>
                    <p class="control">
                      <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-item"  href="#">
                          <span class="icon">
                            <i class="fas fa-user-circle"></i>
                          </span>
                          <span>Mon compte </span>     
                        </a>
                        <div class="navbar-dropdown is-boxed">
                          <a class="navbar-item" href="#">
                            <span class="icon">
                              <i class="fas fa-user-check"></i>
                            </span>
                            <span>Profil</span>
                          </a>
                          <hr class="navbar-divider">
                          <a class="navbar-item" href="#">
                            <span class="icon">
                              <i class="fas fa-cog"></i>
                            </span>
                            <span>Parametre</span>
                          </a>
                          <hr class="navbar-divider">
                          <a class="navbar-item" href="deconnection.php">
                            <span class="icon">
                              <i class="fas fa-power-off"></i>
                            </span>
                            <span>Deconnection</span>
                          </a>
                        </div>
                      </div>
                    </p>
                  <?php
                }else{
                  ?>
                    <p class="control">
                      <a class="navbar-item"  href="inscription.php">
                        <span class="icon">
                          <i class="fas fa-user-circle"></i>
                        </span>
                        <span>
                          S'inscrire      
                        </span>   
                      </a>
                    </p>
                    <p class="control">
                      <a class="navbar-item" href="connection.php">
                        <span class="icon">
                          <i class="fas fa-toggle-on"></i>
                        </span>
                        <span>Se connecte</span>
                      </a>
                    </p>
                  <?php
                }
              ?>
            </div>
          </div>
        </div>
      </nav>