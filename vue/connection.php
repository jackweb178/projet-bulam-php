<?php require_once('header.php'); ?>
    <section class="hero is-medium " style="margin-top: 8px;">
      <div class="hero-body">
        <div class="container">
          <div class="columns is-mobile is-centered">
            <div class="column is-6-desktop is-6-tablet is-12-mobile ">
              <form method="post" action="../controleur/login_controle.php">
          
                <div class="field">
                  <label class="label">Email</label>
                  <div class="control has-icons-left has-icons-right">
                    <!-- is-danger --><input class="input " type="email" name="email" placeholder="Email input" value="talibadio@gmail.com">
                    <span class="icon is-small is-left">
                      <i class="fas fa-envelope"></i>
                    </span>
                    <span class="icon is-small is-right">
                      <i class="fas fa-user"></i>
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
                  <div class="control">
                    <label class="checkbox">
                      <input type="checkbox">
                      Se souvenir de moi
                    </label>
                  </div>
                </div>

                <div class="field is-grouped">
                  <div class="control">
                    <button type="Submit" name="submit" class="button is-primary">Submit</button>
                  </div>
                </div>
              </form>
            </div><!-- column -->
          </div><!-- columns -->
        </div><!-- container -->
      </div><!-- hero-body -->
    </section>
    <?php require_once('footer.php'); ?>
  </body>
</html>