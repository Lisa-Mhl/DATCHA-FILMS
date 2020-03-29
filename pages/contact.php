<?php include('../layouts/head.php'); ?>

    <section class="cover">

    <?php include('../layouts/nav.php'); ?>
 
        <div class="video-container">
            <div class="color-overlay"></div>
            <video autoplay loop muted>
                <source src="../assets/contact.mp4" type="video/mp4">
                <!--Ajouter autres formats vidéo-->
            </video>
        </div>

        <main>

        <?php 
          if($_POST){
              
              $erreurs = array();

              if(empty($_POST['email'])){
                  $erreurs['email'] = "*";
            }
              if(empty($_POST['nom'])){
                  $erreurs['nom'] = "*";
            }
              if(strlen($_POST['nom']) <=1){
                  $erreurs['nom2'] = "Votre nom doit contenir plus d'un caractère";
            }
              if(empty($_POST['objet'])){
                  $erreurs['objet'] = "*";
            }
              if(strlen($_POST['objet']) <=1){
                  $erreurs['objet2'] = "L'objet de votre demande doit contenir plus d'un caractère";
            }
              if(empty($_POST['message'])){
                  $erreurs['message'] = "*";
            }
              if(strlen($_POST['message']) <=1){
                  $erreurs['message2'] = "Votre message doit contenir plus d'un caractère";
            }
        }
        ?>
        
            <div class="contact">
                <h2 class="titre" id="Contact">&#201crivez-Nous</h2>

                <p class="lead"><?php
                    if($_POST){
                        if(count($erreurs)==0){
                            echo "Merci pour votre message"." ".$_POST['nom']." "."!"." " ."Nous vous répondrons dans les plus brefs délais";
                        }else{
                            echo "* Tous les champs sont obligatoires !";
                           }
                        }
                ?></p>
             
                <?php
                   if(isset($_POST['envoyer'])){
                       if(count($erreurs)==0){
                           
                      }
                ?>
                   <p class="lead">
                       <?php
                       $to = "michellisa.75@gmail.com"; // A MODIFIER AVEC ADRESSE DATCHA
                       $from = "lilouuuups@gmail.com"; // A MODIFIER AVEC ADRESSE DATCHA
                       $message = $_POST['message'];
                       $objet = $_POST['objet'];
                       $nom = $_POST['nom'];
                       $email = $_POST['email'];
                       $subject = "Nouveau message sur Datchafilms.com";
                       $content =
                       "Ce message vous a été envoyé par :" .$nom." ".$email." ".$message;           
                       $headers = "From:" .$from;
                       mail($to, $subject, $content, $headers); 
                       } 
                   ?>

                <form method="POST">
                    <div class="container">

                        <div class="option">
                            <label for="selection">Vous êtes :</label>
                            <select name="choix" id="selection" required value=<?php if(isset($_POST['choix'])) echo $_POST['choix']?>>
                                <option value="">-- Sélectionnez une option --</option>
                                <option value="entreprise"<?php if (isset($_POST['choix']) && $_POST['choix']== "entreprise") echo "selected"?>>Une entreprise</option>
                                <option value="particulier"<?php if (isset($_POST['choix']) && $_POST['choix']== "particulier") echo "selected"?>>Un particulier</option>
                            </select>
                        </div>

                        <p class="erreur">

                           
                                <?php if(isset($erreurs['email'])) echo $erreurs['email']; ?>
                            <input type="email" placeholder="Email"  name ="email" value=<?php if(isset($_POST['email'])) echo $_POST['email']?>>
                           

                                <?php if(isset($erreurs['nom'])) echo $erreurs['nom']; ?>
                            <input type="text" placeholder="Nom / Société"  name="nom" value=<?php if(isset($_POST['nom'])) echo $_POST['nom']?>>
                            <p class="erreur"><?php if(isset($erreurs['nom2'])) echo $erreurs['nom2']; ?></p>

                           
                            <p class="erreur"><?php if(isset($erreurs['objet'])) echo $erreurs['objet']; ?></p>
                            <input type="text" placeholder="Objet" name='objet' value=<?php if(isset($_POST['objet'])) echo $_POST['objet']?>>
                            <p class="erreur"><?php if(isset($erreurs['objet2'])) echo $erreurs['objet2']; ?></p>
                            
                            
                            <p class="erreur"><?php if(isset($erreurs['message'])) echo $erreurs['message']; ?></p>
                            <textarea placeholder="Message" rows="10"  name="message"><?php if(isset($_POST['message'])) echo $_POST['message']?></textarea>
                            <p class="erreur"><?php if(isset($erreurs['message2'])) echo $erreurs['message2']; ?></p>
                            <p class="erreur"><?php if(isset($erreurs['message'||'email'||'nom'||'objet'])) echo $erreurs['message'||'email'||'nom'||'objet']; ?></p>
                        </div>

                        <div class="send">
                            <input class="send" type="submit" value="Envoyer" name='envoyer'>
                        </div>

                    </div>
                </form>          

            </div>
        </main>
    </section>

    <footer class="footer">
        <div id="left">
            <a href="home.php#accueil" class="">A propos</a><br />
            <a href="login.php" class="">Catalogue</a><br />
            <a href="home.php#actu" class="">Actualités</a>
        </div>

        <div id="adresse">
            <p>Datcha Films : 14 rue des platrières 75020 - PARIS</p>
            <p>Tel : 01 56 56 47 89</p>
        </div>

        <div id="footerlogo">
            <a href="https://www.instagram.com/datchafilms/" target="blank" class="IG"><img
                    src="https://i.postimg.cc/wxcdmkhC/logo-instagram.png" alt="Logo Instagram"></a><br />
            <!--LIEN A INSERER--><a href="" class="FB" target="blank"><img
                    src="https://i.postimg.cc/LXtGjHZt/facebook-icone-Cmon-Site.png"></a><br />
            <a href="https://vimeo.com/user89486657" target="blank" class="VM"><img src="https://i.postimg.cc/K83qnZ61/vim-o.png"></a>
        </div>

    </footer>

</body>

</html>