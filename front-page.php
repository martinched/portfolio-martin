<?php get_header(); ?>

  <section class="accueil">
        <div class="container">
            <div class="row accueil">
                <div class="col-12 col-md-6">
                    <!--<h2>Qui suis je?</h2>-->
                        <p>
                            <?php $post = get_post(127) ?>
                            <?php echo $post->post_content ?>
                        </p>
                    <div class="boutonplus">
                        <a class="btn btn-primary plus" href="http://localhost/wordpress/wp-content/themes/portfolio-martin/page-83.php">En savoir plus</a>
                    </div>
                    
                        <!--<h3>Expérience</h3>-->
                        <ul>
                            <?php $post = get_post(129) ?>
                            <?php echo $post->post_content ?>
                        </ul>   

                        <!--<h3>Diplômes</h3> -->  
                        <ul>  
                            <?php $post = get_post(133) ?>
                            <?php echo $post->post_content ?>
                        </ul>

                        <!--<h3>Autres</h3>-->
                        <ul>
                            <?php $post = get_post(137) ?>
                            <?php echo $post->post_content ?>
                        </ul>  
                        
                        <!--<h3>Compétences</h3>-->
                        <ul>
                            <?php $post = get_post(140) ?>
                            <?php echo $post->post_content ?>
                        </ul>
                    </div>

                <div class="col-12 col-md-6" class="portrait">
                   
                    <?php $post = get_post(151) ?>
                            <?php echo $post->post_content ?>
                </div>

            </div>
        </div>
    </section>
    <hr>
    <section class="projet">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Projets</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="http://localhost/wordpress/wp-content/themes/portfolio-martin/images/convertisseur.png" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">convertisseur</h5>
                          <p class="card-text">Ma première réalisation avec des vrais morceaux de Java Script dedans.</p>
                          <a href="https://github.com/martinched/convertisseur1.git" class="btn btn-primary codesource">Voir code source</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="http://localhost/wordpress/wp-content/themes/portfolio-martin/images/biomoebius.png" alt="capture d'écran biographie Jean Giraud">
                        <div class="card-body">
                          <h5 class="card-title">Biographie</h5>
                          <p class="card-text">Une mini-bio de mon dessinateur prefèré, alias Moebius.</p>
                          <a href="https://github.com/martinched/moebius2.git" class="btn btn-primary codesource">Voir code source</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="http://localhost/wordpress/wp-content/themes/portfolio-martin/images/Capture d'écran 2023-11-20 175427.png" alt="capture d'écran portfolio">
                        <div class="card-body">
                          <h5 class="card-title">Mon portfolio</h5>
                          <p class="card-text">Voila l'exemple récursif d'un exercice-type de portfolio.</p>
                          <a href="https://github.com/martinched/portfolio.git" class="btn btn-primary codesource">Voir code source</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="https://placehold.co/600x400" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title .</p>
                          <a href="#" class="btn btn-primary codesource">Voir code source</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
<?php get_footer(); ?>