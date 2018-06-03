<?php if (session_status()==PHP_SESSION_NONE){  
  session_start();}
  // require_once('../controleur/login_controle.php');
  if (isset($_SESSION['id_user'])) {
    //affichage du tableau
    require_once('../controleur/compte_creer.controleur.php');
    //en-tete
    require_once('header.php');
    ?>
          <section class="hero is-small is-primary" style="margin-top: 8px;">
            
            <div class="hero-body">
              <div class="container">
                <div class="columns">
                  <div class="column is-8-desktop is-offset-2-desktop">
                    <h1 class="title is-2 is-spaced is-centered" style="">
                      Bienvenu sur mon site web !
                    </h1>
                    <h2 class="subtitle is-4">
                        bonjours <strong> <?php if(isset($_SESSION['pseudo'])){echo " <mark>". $_SESSION['pseudo']."</mark>";}?></strong><br> Votre compte a bien ete reer
                        <br>
                        Vous pouvez maintenant surfer <strong>et vivre la nouvelle technologie </strong>
                    </h2>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <div class="container">
            <div class="columns">
              <div class="column is-8-desktop is-12-mobile is-offset-2-desktop" style="margin-top: 20px;">
                <?php 
                  if (isset($_GET['oui']))
                  {                   
                    ?>
                      <div class="notification is-danger">
                        <a href="compte_creer.php"><button class="delete" style="float: right;"></button></a>
                          <strong>Voulez vous vraiment supprimer cette ligne <a class="button" href="compte_creer.php?sup">Oui</a> ou <a class="button" href="compte_creer.php">non</a></strong>
                      </div>
                    <?php 
                  }
                  //notification sil a effacer ou s'il a modifier
                  if(isset($_GET['delete']) OR isset($_GET['edite']))
                  { 
                      ?>
                        <div class="notification is-success">
                          <a href="compte_creer.php"><button class="delete" style="float: right;"></button></a>
                            <strong> <?php if(isset($_GET['edite'])){ echo "Vos modifications ont ete sauvegarder";}else{echo "Vous aviez supprimer une ligne avec succes";}?> </strong>
                        </div>
                    <?php  
                  }
                ?>
              </div> 
            </div>
          </div>
          <table class="table is-hoverable is-fullwidth"><!-- table is-hoverable -->
            <thead>
              <tr>
                <th>Pseudo</th>
                <th>E-mail</th>
                <th colspan="2">Action</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th></th>
                <th></th>
                <th colspan="2"></th>
              </tr>
            </tfoot>
            <tbody>
              <!-- <form method="post" action="../controleur/edit-sup.controleur.php"> -->
                <?php
                  while ( $resultat=$req->fetch() )
                  {
                    ?>
                      <tr>
                        <td><?php echo $resultat['pseudo'];?></td>
                        <td><?php echo $resultat['email'];?></td>
                        <td>
                          <p class="buttons">
                            <a class="button" href="../controleur/edit-sup.controleur.php?edit=<?=$resultat['id'];?>">
                              <span class="icon">
                                <i class="fas fa-pencil-alt"></i>
                              </span>
                              <span>Editer</span>
                            </a>
                          </p>
                        </td>
                        <td>
                          <p class="buttons" >
                            <a class="button" href="<?php   if(isset($_GET['sup'])){echo "../controleur/edit-sup.controleur.php?sup=".$resultat['id']; }else{echo "compte_creer.php?oui";}
                            ?>">
                              <span class="icon">
                                <i class="far fa-trash-alt"></i>
                              </span>
                              <span>Supprimer</span>
                            </a>
                          </p>
                        </td>
                      </tr>
                    <?php
                  }

                ?>
              <!-- </form> -->
            </tbody>
          </table>
          <div class="container">
            <div class="columns">
              <div class="column">
                <nav id="navigation" class="pagination is-centered" role="navigation" aria-label="pagination">
                  <!-- <a class="pagination-previous">Previous</a> -->
                  <!-- <a class="pagination-next">Next page</a> -->
                  <ul class="pagination-list">
                    <li>
                      <a class="pagination-link" aria-label="Goto page 1" href="?page=<?php if($page_init !='1'){echo $page_init-1 ;}else{echo $page_init;}?>" <?php if($page_init =='1'){echo "disabled" ;}?> >&laquo</a>
                    </li>
                    <?php
                      for ($i=1; $i <=$nb_page ; $i++)
                      { 
                        if ($i==$page_init) 
                        {
                          ?>
                            <li>
                              <a class="pagination-link is-current" aria-label="Goto page 45" href="?page=<?php echo $i ;?>"><?php echo $i ;?></a>
                            </li>
                          <?php
                        }else{
                          ?>
                            <li>
                              <a class="pagination-link" aria-label="" href="?page=<?php echo $i ;?>"><?php echo $i ;?></a>
                            </li>
                          <?php
                        }
                      }
                      
                    ?>
                    <li>
                      <!-- gestion ussi de suppression si oui ou non -->
                      <a class="pagination-link" aria-label="Goto page 1" href="?page=<?php if($page_init !=$nb_page){echo $page_init+1 ;}else{echo $page_init;}?>" <?php if($page_init ==$nb_page){echo "disabled" ;}?> >&raquo</a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
          <?php require_once('footer.php'); ?>
        </body>
      </html>
    <?php
  }else{
    require_once('connection.php');
  }
 
?>
    