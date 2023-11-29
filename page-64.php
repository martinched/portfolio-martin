
<?php get_header(); ?>
    
 
    <hr>
<section class="formulaire">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Contactez-moi!</h2>
                    <div class="col-12">
                        <input type="text" placeholder="NOM et Prénom" class="champ  mb-4" id="nom">
                        <div id="messagederreurnom" class="alert erreur" role="alert"></div>
                    </div>
                    <div class="col-12" > 
                        <input type="text" min="10" max="13" placeholder="Téléphone" class="champ  mb-4" id="tel">
                        <div id="messagederreurtel" class="alert erreur" role="alert"></div>
                    </div>
                    <div  class="col-12">
                        <input type="email" placeholder="E-mail" class="champ  mb-5" id="mail">
                        <div id="messagederreurmail" class="alert erreur" role="alert"></div>
                    </div>
                    <div class="col-12" > 
                        <label for="mess" class="formulaire__label-message">Votre message</label>
                        <textarea id="mess" class="champ mb-4" rows="6"></textarea>
                        <div id="messagederreurmess" class="alert erreur" role="alert"></div>
                    </div>
                   
                    <div class="btnconnect">
                        <button class="btn btn-primary envoi" onclick="verify(), verifytel(), verifymail(), verifymess()">Envoyer</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>