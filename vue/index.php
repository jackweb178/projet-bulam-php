<?php require_once('header.php'); ?>
    <section class="hero is-medium is-primary" style="margin-top: 8px;">
      <div class="hero-body">
        <div class="container">
          <div class="columns">
            <div class="column is-8-desktop is-offset-2-desktop">
              <h1 class="title is-2 is-spaced is-centered" style="">
                Bienvenu sur mon site web !
              </h1>
              <h2 class="subtitle is-4">
                  Veillez vous <strong>Connecte</strong>
                  <br>
                  Et si c'est pas le cas <strong>inscrivez vous</strong> pour ne plus ratter les infos sur la nouvelle technologie .
              </h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="container">
      <div class="columns is-multiline columns-2">
        <div class="column is-12-desktop is-12-mobile is-12-tablet">
          <nav class="breadcrumb has-succeeds-separator is-medium" aria-label="breadcrumbs">
            <ul>
              <li><a href="#">En promo</a></li>
              <li><a href="#">Passer une commande</a></li>
              <li><a href="#">Voir les derniere poste</a></li>
              <li class="is-active"><!--<a href="#" aria-current="page"></a>-->
                <div class="dropdown is-hoverable">
                  <div class="dropdown-trigger">
                    <p class="" style="margin-left: 5px;" aria-haspopup="true" aria-controls="dropdown-menu4">
                      <span> Derouler la liste des produit</span>
                      <span class="icon is-small">
                        <i class="fas fa-angle-down" aria-hidden="true"></i>
                      </span>
                    </p>
                  </div>
                  <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                    <div class="dropdown-content">
                      <div class="dropdown-item">
                        <p>
                          <h1>Ordinateur</h1>
                          <hr class="navbar-divider">
                          <h1 >Telephone</h1>
                          <hr class="navbar-divider">
                          <h1>Console</h1>
                          <hr class="navbar-divider">
                          <h1 >Accessoir</h1>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </nav>
        </div>
        <div class="column is-8-desktop is-8-tablet is-12-mobile">
          <article class="message is-dark">
            <div class="message-body">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.<br><br>
              <h1 class="title is-4">Contacter le proprietaire </h1>
              <a class="bd-tw-button button" data-social-network="Twitter" data-social-action="tweet" data-social-target="" target="_blank" href="#">
                <span class="icon"><i class="fab fa-twitter"></i></span> 
                <span>Tweet</span>
              </a>
              <a class="button is-info" href="#">
                <span class="icon"><i class="fab fa-facebook-f"></i></span>
                <span> facebook</span>
              </a>
              <a class="button is-danger" href="#">
                <span class="icon"><i class="fab fa-google-plus-g"></i></span>
                <span>google plus</span>
              </a>
            </div>
          </article>
        </div>
        <div class="column is-4-desktop is-4-tablet is-12-mobile ">
          <img src="image/dan-freeman-572122-unsplash.jpg" width="400" height="">
        </div>

        <div class="column is-8-desktop is-8-tablet is-12-mobile">
          <article class="message is-dark">
            <div class="message-body">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.<br><br>
              <h1 class="title is-4">Contacter le proprietaire </h1>
              <a class="bd-tw-button button" data-social-network="Twitter" data-social-action="tweet" data-social-target="" target="_blank" href="#">
                <span class="icon"><i class="fab fa-twitter"></i></span> 
                <span>Tweet</span>
              </a>
              <a class="button is-info" href="#">
                <span class="icon"><i class="fab fa-facebook-f"></i></span>
                <span> facebook</span>
              </a>
              <a class="button is-danger" href="#">
                <span class="icon"><i class="fab fa-google-plus-g"></i></span>
                <span>google plus</span>
              </a>
            </div>
          </article>
        </div>
     </div><!-- columns -->
    </div> <!-- contenair -->
    <?php require_once('footer.php'); ?>
  <script type="text/javascript" src="bulma-0.7.1/js/main.js"></script> 
  </body>
</html>
