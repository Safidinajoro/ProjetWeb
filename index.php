<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <title>Site Guichet</title>
        <!-- Bootstrap core CSS -->
    
    <link href="bootstrap-5.1.3/dist/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="css/icofont/icofont.css" type="text/css" rel="stylesheet">
    <link href="css/index.css" type="text/css" rel="stylesheet">

  </head>
  <body> 
    <header>
        <div class="card salutation" style="background-image: url('image/conduite.jpg');">
          <p>
          Bienvenu dans ce site vitrine de notre espace de loisir </br>
          Apart la pr&eacute;sentation de notre diff&eacute;rents jeu de loisir vous pouvez faire ici un achat en-ligne de billet 
          
          </p> 
        </div>
    </header>
    
    <div class="b-example-divider"></div>

    <section class="container activity">
      <h2 class="pb-2 border-bottom">Voici les diff&eacute;rents jeu disponible chez nous</h2> 

      <div class="row">
        <div class="col-lg-3">
          <div class="card" type="button" data-bs-toggle="modal" data-bs-target="#modalPiscine"  style="background-image: url('image/P1.jpg');">
            <h4>Piscine</h4>            
          </div>
          <div class="modal fade " data-bs-backdrop="static" id="modalPiscine">
            <div class="modal-dialog " role="document">
              <div class="modal-content bg-dark text-white ">
                <div class="toast-header">
                  <h2 class="modal-title me-auto">Acheter un billet pour piscine</h2>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                  <p>une grange piscine de 50m de longueur est &agrave; votre dispostion. Sa profondeur maximale est de 3m 
                    situ&eacute; &agrave; l'extemit&eacute; nord du piscine et sa profondeur minimale de 1m 
                    situ&eacute; &agrave; l'extemit&eacute; sud</p>
                  <form action="page/controller.php?billet=piscine" method="post" class="text-black" style="text-align: center;">
                    <p class="text-white">Pour acc&egrave;der au piscine veulliez remplir les formulaires d'achat de billet</p>

                    <p class="form-floating   mb-3">
                      <input type="text-area" class="form-control rounded-4" name="nom" required >
                      <label for="">Votre nom</label>
                    </p>
                    <p class="form-floating mb-3">
                      <input type="number" class="form-control rounded-4" name="nbr" required>
                      <label for="nbr">Nombre de billet</label>
                    </p>
                    <input type="submit" value="acheter" class="btn btn-primary"/>
                  </form>

                </div>
              </div>
            </div>
          </div>
         
        </div>

        <div class="col-lg-3">
          <div class="card" type="button" data-bs-toggle="modal" data-bs-target="#modalKermesse" style="background-image: url('image/tb.jpg'); ">
            <h4>jeux de kermesse</h4>
    
          </div>
          <div class="modal fade " data-bs-backdrop="static" id="modalKermesse">
            <div class="modal-dialog " role="document">
              <div class="modal-content bg-dark text-white ">
                <div class="toast-header">
                  <h2 class="modal-title me-auto">Acheter un ticket pour jeux de kermesse</h2>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                  <p>
                  pour les enfants et les adolecents ou m&ecirc;me les adultes qui veulent s'amuser sur les jeux de kermesse, notre espace dispose 
              une grande cour plein air avec des man&egrave;ge, cheval de bois, trampolin. La cour poss&eacute;de aussi 6 chalet pour boire prendre l'appettit
              entre vous et une espace libre pour en m&eacute;ttre des chapiteaux ou des tentes si vous voulez dormir dedans la nuit
                  </p>
                  <form action="page/controller.php?billet=kermesse" method="post" class="text-black" style="text-align: center;">
                    <p class="text-white">Pour acc&egrave;der aux jeux de kermesse veulliez remplir les formulaires d'achat de ticket</p>
                    <p class="form-floating   mb-3">
                      <input type="text-area" class="form-control rounded-4" name="nom" required>
                      <label for="">Votre nom</label>
                    </p>
                    <p class="form-floating mb-3">
                      <input type="number" class="form-control rounded-4" name="nbr" required>
                      <label for="nbr">Nombre de ticket</label>
                    </p>
                    <input type="submit" value="acheter" class="btn btn-primary"/>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="col-lg-3">
          <div class="card " type="button" data-bs-toggle="modal" data-bs-target="#modalFete" style="background-image: url('image/fete.jpg'); color:black;">
            <h4>restauration</h4>
 
          </div>
          <div class="modal fade " data-bs-backdrop="static" id="modalFete">
            <div class="modal-dialog " role="document">
              <div class="modal-content bg-dark text-white ">
                <div class="toast-header">
                  <h2 class="modal-title me-auto">Acheter un billet pour la f&ecirc;te de week-end</h2>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                  <p>
                  Les ambiances de karaok&eacute; et discoth&eacute;que sont pr&eacute;sentes dans notre grande salle de f&ecirc;te tous les apr&egrave;s-midi. Ansi
              des spectacles ou cabarets des artistes invit&eacute;s se pr&eacute;sentent tous les week-end.
              Et enfin une service restoration et une bar sont disponible dans la salle pour les dejeuner, diner et les raifraichisselent pendant la f&ecirc;te     
            
                  </p>
                  <form action="page/controller.php?billet=restauration" method="post" class="text-black" style="text-align: center;">
                    <p class="text-white">Pour acc&egrave;der &agrave; la salle de f&ecirc;te veulliez remplir les formulaires d'achat de billet</p>
                    <p class="form-floating   mb-3">
                      <input type="text-area" class="form-control rounded-4" name="nom" required>
                      <label for="">Votre nom</label>
                    </p>
                    <p class="form-floating mb-3">
                      <input type="number" class="form-control rounded-4" name="nbr" required>
                      <label for="nbr">Nombre de billet</label>
                    </p>
                    <input type="submit" value="acheter" class="btn btn-primary"/>
                  </form>
                </div>
              </div>
            </div>
          </div>
          
        </div>

        <div class="col-lg-3">
          <div class="card text-black" type="button" data-bs-toggle="modal" data-bs-target="#modalVidéos" style="background-image: url('image/jx.jpg');">
            <h4>jeux vid&eacute;os</h4>
            
 
          </div>
          <div class="modal fade " data-bs-backdrop="static" id="modalVidéos">
            <div class="modal-dialog " role="document">
              <div class="modal-content bg-dark text-white ">
                <div class="toast-header">
                  <h2 class="modal-title me-auto">Acheter un ticket pour jeux vid&eacute;os</h2>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                  <p>
                  une salle sp&eacute;cialle pour les geeks et pour ceux qui veut s'amuser en jeux vid&eacute;os et en r&eacute;alit&eacute; 
              virtuelle est exploitable chez notre espace  
                  </p>
                  <form action="page/controller.php?billet=jeux vidéos" method="post" class="text-black" style="text-align: center;">
                    <p class="text-white">Pour acc&egrave;der aux jeux vid&eacute;os et r&eacute;alist&eacute;s virtuelles veulliez remplir les formulaires d'achat de ticket</p>
                    <p class="form-floating   mb-3">
                      <input type="text-area" class="form-control rounded-4" name="nom" required>
                      <label for="">Votre nom</label>
                    </p>
                    <p class="form-floating mb-3">
                      <input type="number" class="form-control rounded-4" name="nbr" required>
                      <label for="nbr">Nombre de ticket</label>
                    </p>
                    <input type="submit" value="acheter" class="btn btn-primary"/>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="card" type="button" data-bs-toggle="modal" data-bs-target="#modalChambre" style="background-image: url('image/ch.jpg');">
            <h4>Chambre</h4>
 
          </div>
          <div class="modal fade " data-bs-backdrop="static" id="modalChambre">
            <div class="modal-dialog " role="document">
              <div class="modal-content bg-dark text-white ">
                <div class="toast-header">
                  <h2 class="modal-title me-auto">Loyer une ou des chambres</h2>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                  <p>
                      Nous disposons 18 chambres pour vous acc&eacute;uillir la nuit </br>
                      4 des 18 chambres sont des grandes chambres pour une famille de 5 personnes les autres peuvent loger &agrave; 2 personnes </br>
                      NB : le petit d&eacute;j&eacute;uner est offert pour vous chaque matin de votre s&eacute;jour
                  </p>
                  <form action="page/controller.php?billet=chambre" method="post" class="text-black" style="text-align: center;">
                    <p class="text-white">Pour loyer une ou des chambres veulliez remplir les formulaires de location</p>
                    <p class="form-floating   mb-3">
                      <input type="text-area" class="form-control rounded-4" name="nom" required>
                      <label for="">Votre nom</label>
                    </p>
                    <p class="form-floating mb-3" require>
                      <h4>Type de chambre</h4>
                      <span><input type="radio" id="couple" name="type" value="chambre à 2 personnes" checked /> chambre à 2 personnes</span>
                      <span><input type="radio" name="type" id="famille"value="chambre de famille"/> chambre pour famille</span> 
                    </p>
                    <p class="form-floating mb-3">
                      <input type="number" class="form-control rounded-4" name="nbr"required>
                      <label for="nbr">Nombre de chambre</label>
                    </p>
                    <input type="submit" value="acheter" class="btn btn-primary"/>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 ">
          <div class="card text-black" type="button" data-bs-toggle="modal" data-bs-target="#modalTerrains" style="background-image: url('image/bf.jpg');">
            <h4>football ou basketball</h4>
 
          </div>
          <div class="modal fade " data-bs-backdrop="static" id="modalTerrains">
            <div class="modal-dialog " role="document">
              <div class="modal-content bg-dark text-white ">
                <div class="toast-header">
                  <h2 class="modal-title me-auto">Acheter un billet pour les terrains</h2>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                  <p>
                  Un terrain de basketball et de football &agrave; 7 avec assez de ballon est &agrave; votre disposition pour s'amuser et 
              faire des parties avec vos camarades
                  </p>
                  <form action="page/controller.php?billet=terrains" method="post" class="text-black" style="text-align: center;">
                    <p class="text-white">Pour acc&egrave;der aux terrains de basketball et football veulliez remplir les formulaires d'achat de billet</p>
                    <p class="form-floating   mb-3">
                      <input type="text-area" class="form-control rounded-4" name="nom" required >
                      <label for="">Votre nom</label>
                    </p>
                    <p class="form-floating mb-3">
                      <input type="number" class="form-control rounded-4" name="nbr" required>
                      <label for="nbr">Nombre de billet</label>
                    </p>
                    <input type="submit" value="acheter" class="btn btn-primary"/>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 ">
          <div class="card" type="button" data-bs-toggle="modal" data-bs-target="#modalTable" style="background-image: url('image/bb4.jpg'); color:black;">
            <h4>jeux sur Table</h4>
 
          </div>
          <div class="modal fade " data-bs-backdrop="static" id="modalTable">
            <div class="modal-dialog " role="document">
              <div class="modal-content bg-dark text-white ">
                <div class="toast-header">
                  <h2 class="modal-title me-auto">Acheter un ticket pour jeux de table</h2>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                  <p>
                  Adorez-vous les jeux de table? du Billard, du Baby Foot ou du tenis de table? nous vous donnez une acc&egrave;s 
            &agrave; notre une salle &eacute;quip&eacute;e de divers jeux table pour tester vos comptences entre vous
                  </p>
                  <form action="page/controller.php?billet=jeux de table" method="post" class="text-black" style="text-align: center;">
                    <p class="text-white">Pour acc&egrave;der aux jeux de table veulliez remplir les formulaires d'achat de ticket</p>
                    <p class="form-floating   mb-3">
                      <input type="text-area" class="form-control rounded-4" name="nom" required >
                      <label for="">Votre nom</label>
                    </p>
                    <p class="form-floating mb-3">
                      <input type="number" class="form-control rounded-4" name="nbr" required>
                      <label for="nbr">Nombre de ticket</label>
                    </p>
                    <input type="submit" value="acheter" class="btn btn-primary"/>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 ">
          <div class="card " type="button" data-bs-toggle="modal" data-bs-target="#modalCasino" style="background-image: url('image/casino3.jpg');">
            <h4> <em>Casino</em></h4>
          </div>
          <div class="modal fade " data-bs-backdrop="static" id="modalCasino">
            <div class="modal-dialog " role="document">
              <div class="modal-content bg-dark text-white ">
                <div class="toast-header">
                  <h2 class="modal-title me-auto">Acheter un ticket pour Casino</h2>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                  <p>
                  Nous disposons d'une grande salle avec les m&eacute;illeur jeux de carte et jeux de machines</br>
              NB : des jetons gratuits seront disponible dans la salle et notons bien que ce n'est un casino de paris o&ugrave; 
              on fait une mise puis &agrave; la fin du partie on gagne ou perd la mise ainsi des surveillances personelles et mat&eacute;rielles 
              sont mises dans la salle pour bien respecter cette &eacute;tique  
                  </p>
                  <form action="page/controller.php?billet=casino" method="post" class="text-black" style="text-align: center;">
                    <p class="text-white">Pour accèder &agrave; la casino veulliez remplir les formulaires d'achat de ticket</p>
                    <p class="form-floating   mb-3">
                      <input type="text-area" class="form-control rounded-4" name="nom" required>
                      <label for="">Votre nom</label>
                    </p>
                    <p class="form-floating mb-3">
                      <input type="number" class="form-control rounded-4" name="nbr" required>
                      <label for="nbr">Nombre de ticket</label>
                    </p>
                    <input type="submit" value="acheter" class="btn btn-primary"/>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <div class="b-example-divider"></div>
    
    <footer >
      <span class="col-lg-4">&copy; copyright 2022 - Tout droit est reserv&eacute;</span>
      <span class="col-lg-3"><a href="#">&agrave; propos du site</a></span> 
      <span class="col-lg-3">
        <ul class="list-unstyled">
          <li><i class="icofont-facebook icon" style="color:blue"></i><a href="#">facebook.com</a></li>
          <li><i class="icofont-phone icon" ></i>T&eacute;l&eacute;phone : +261 XX XX XXX XX</li>
          <li><i class="icofont-letter icon" style="color:red"></></i>E-mail : exemple@gmail.com</li>
        </ul>
      </span>
      
    </footer>
    <?php 
    if($_GET['bool'] == 'true')
      echo'   
    <div class="toast position-fixed bottom-0 end-0 p-3 bg-dark text-white" id="notif"  style="text-align: center;">
        <div class = "bg-dark"aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <h4 class="me-auto"">Remerciement</h4>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            <p>votre billet est achet&eacute;</p>
          </div>
        </div>
    </div>
    
    ';
    ?>

    <script src="bootstrap-5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      var mytoast = document.getElementById('notif');
      new bootstrap.Toast(mytoast).show();
    </script>
  </body>
</html>
