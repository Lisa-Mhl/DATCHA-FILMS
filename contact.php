<?php include('head.php'); ?>

    <section class="cover">

    <?php include('nav.php'); ?>
 
        <div class="video-container">
            <div class="color-overlay"></div>
            <video autoplay loop muted>
                <source src="asets/contact.mp4" type="video/mp4">
                <!--Ajouter autres formats vidéo-->
            </video>
        </div>

        <main>
            <div class="contact">
                <h2 class="titre" id="Contact">&#201crivez-Nous</h2>

                <form action="" method="">
                    <div class="container">

                        <div class="option">
                            <label for="selection">Vous êtes :</label>
                            <select name="choix" id="selection" required>
                                <option value="">-- Sélectionnez une option --</option>
                                <option value="entreprise">Une entreprise</option>
                                <option value="particulier">Un particulier</option>
                            </select>
                        </div>

                        <div class="formulaire">
                            <input type="email" placeholder="Email" required>
                            <input type="text" placeholder="Nom / Société" required>
                            <input type="text" placeholder="Objet">
                            <textarea placeholder="Message" rows="10" required></textarea>
                        </div>

                        <div class="send">
                            <input class="send" type="submit" value="Envoyer">
                        </div>

                    </div>
                </form>
            </div>
        </main>
    </section>

    <footer class="footer">
        <div id="left">
            <a href="index.php#accueil" class="">A propos</a><br />
            <a href="catalogue.php" class="">Catalogue</a><br />
            <a href="index.php#actu" class="">Actualités</a>
        </div>

        <div id="adresse">
            <p>Datcha Films : 14 rue des platrières 75020 - PARIS</p>
            <p>Tel : 01 56 56 47 89</p>
        </div>


        <div id="footerlogo">
            <a href="https://www.instagram.com/datchafilms/" target="blank" class="IG"><img
                    src="asets/img/logo-instagram.png" alt="Logo Instagram"></a><br />
            <!--LIEN A INSERER--><a href="" class="FB" target="blank"><img
                    src="asets/img/facebook-icone-CmonSite.png"></a><br />
            <a href="https://vimeo.com/user89486657" target="blank" class="VM"><img src="asets/img/viméo.png"></a>
        </div>

    </footer>

</body>

</html>