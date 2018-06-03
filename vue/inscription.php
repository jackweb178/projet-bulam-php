<?php require_once('header.php'); ?>
    <section class="hero is-small " style="margin-top: 8px;">
      <div class="hero-body">
        <div class="container">
          <div class="columns is-mobile is-centered">
            <div class="column is-6-desktop is-6-tablet is-12-mobile ">
              <form method="post" action="../modele/insertion.php">
                <div class="field">
                  <label class="label">Pseudo</label>
                  <div class="control has-icons-left has-icons-right">
                    <!-- is-success --><input class="input" type="text" name="pseudo" placeholder="Text input" value="talibadio">
                    <span class="icon is-small is-left">
                      <i class="fas fa-user"></i>
                    </span>
                    <span class="icon is-small is-right">
                      <i class="fas fa-check"></i>
                    </span>
                  </div>
                  <!-- <p class="help is-success">This username is available</p> -->
                </div>

                <div class="field">
                  <label class="label">Email</label>
                  <div class="control has-icons-left has-icons-right">
                    <!-- is-danger --><input class="input " type="email" name="email" placeholder="Email input" value="hello@">
                    <span class="icon is-small is-left">
                      <i class="fas fa-envelope"></i>
                    </span>
                    <span class="icon is-small is-right">
                      <i class="fas fa-exclamation-triangle"></i>
                    </span>
                  </div>
                  <!-- <p class="help is-danger">This email is invalid</p> -->
                </div>

                <div class="field">
                  <label class="label">Mot de pass</label>
                  <p class="control has-icons-left">
                    <input class="input" type="password" name="mdp" placeholder="Password">
                    <span class="icon is-small is-left">
                      <i class="fas fa-lock"></i>
                    </span>
                  </p>
                </div>

                <div class="field">
                  <label class="label">Confirmer</label>
                  <p class="control has-icons-left">
                    <input class="input is-couleur_de_mon_choix" type="password" name="mdp_confirm" placeholder="Password_confirm">
                    <span class="icon is-small is-left">
                      <i class="fas fa-lock"></i>
                    </span>
                  </p>
                </div>

                <div class="field">
                  <div class="control">
                    <label class="checkbox">
                      <input type="checkbox" name="checkboxe">
                      Se souvenir de moi
                    </label>
                  </div>
                </div>

                <div class="field is-grouped">
                  <div class="control">
                    <button type="Submit" name="submit" class="button is-primary" >Submit</button>
                  </div>
                </div>
              </form>
              <?php 
                if (isset($_GET['email']))
                {                   
                  ?>
                    <div class="notification is-danger" style="margin-top: 5px;">
                      <a href="inscription.php"><button class="delete" style="float: right;"></button></a>
                        <strong>Cet email est deja pris </strong>
                    </div>
                  <?php 
                }
              ?>
            </div><!-- column --> 
          </div><!-- columns -->
        </div><!-- container -->
      </div><!-- hero-body -->
    </section>
    <?php require_once('footer.php'); ?>
  </body>
</html>