<?php include('../layouts/head.php'); session_start(); ?>

    <section class="cover">

    <?php include('../layouts/nav.php'); 
    if ($_POST) {
        getUserLogin($_POST); 
        
        $erreurs = array();

        if(empty($_POST['pseudo'])){
            $erreurs['pseudo'] = "Veuillez renseigner votre nom";
        }
        if(strlen($_POST['pseudo']) <=1){
            $erreurs['pseudo2'] = "Votre nom doit contenir plus d'un caractère";
        }
        if(empty($_POST['password'])){
            $erreurs['password'] = "Veuillez entrer le code secret. Un indice ?".'<br/>'. "C'est le nom de l'agence !";
        }
        if ($_POST['password'] !== "datcha"){
            $erreurs['password'] = "Veuillez entrer le code secret. Un indice ?".'<br/>'. "C'est le nom de l'agence !";
        }
    }
    ?>
    <div class="login">
     <h2>Accès au catalogue</h2>
        <form method = "POST">
        <input class = "pseudo" type ="texte" name ="pseudo" placeholder ="-- Entrez votre nom ici --" value=<?php if(isset($_POST['pseudo'])) echo $_POST['pseudo']?>>
        <p class = "erreur2"> <?php if(isset($erreurs['pseudo'])) echo $erreurs['pseudo']; ?></p>
        <p class ="erreur2"> <?php if(isset($erreurs['pseudo2'])) echo $erreurs['pseudo2']; ?></p>
        <input class="mdp" type="password" placeholder="-- Entrez le code secret ici --"  name ="password">
        <p class = "erreur2"> <?php if(isset($erreurs['password'])) echo $erreurs['password']; ?></p>
        <input class="entrer" type="submit" id='submit' name="entrer" value='ACCEDER AU CATALOGUE' >
        </div>

        <div class="cover-container">
            <img src="../assets/img/cover-2.png">
        </div>

        <?php

        function getUserLogin($form){
            if(!empty($form['password']) && !empty($form['pseudo']) && $form['password'] === 'datcha'){
                $_SESSION['pseudo'] = $form['pseudo'];
                $_SESSION['isConnected'] = true;
            if($_SESSION['isConnected'] === true){
                 Header('Location: http://localhost:8000/pages/catalogue.php');
                 }
            }
        }
        
?>

    </section>

    <footer class="footer">
        <div id="left">
            <a href="home.php#accueil" class="">A propos</a><br />
            <a href="contact.php" class="">Contact</a><br />
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