<!DOCTYPE html>
<html>
  <head>
    
    <?php get_header(); ?>
  </head>
  <body>

  <section class="accueil">
        <div class="container">
            <div class="row essais">
                <div class="col-12 col-md-6">
                    <h2>Qui suis je?</h2>
                    <p>Un dev-front tout neuf, dans le Sud de la France. <br /> D’abord poète, puis soudeur, marin  ensuite, et finalement développeur; car l’écriture, l’exploration et la construction sont mes passions!...
                    </p>
                    <div class="boutonplus">
                        <a class="btn btn-primary plus" href="./a-propos.html">En savoir plus</a>
                    </div>
                        <h3>Expérience</h3>
                        <ul>
                            <li>2023-2024: Formation Titre pro 'Développeur Web, Web Mobil'</li>
                            <li> 2018-2023:  Nidification & procréation</li>
                            <li>2014-2018:  Plaisance à la voile</li>
                            <li>2003-2014:  Soudage en chaudronnerie et structures métalliques.</li>
                        </ul>   

                        <h3>Diplômes</h3>   
                        <ul>  
                            <li>2000:  Brevet des collèges</li>  
                            <li>2003:  BEP chaudronnerie et structures métalliques</li>
                            <li>2005:  Monitorat fédéral de voile sportive</li>
                            <li>2006:  Brevet de matelot</li>
                            <li>2014:  Licence TIG acier/inox</li>
                        </ul>

                        <h3>Autres</h3>
                        <ul>
                            <li>Travaux agricoles</li>
                            <li>Enseignement de la voile sportive</li>
                            <li>Convoyage de voiliers</li>
                            <li>Actoring </li>
                            <li>Sports </li>
                        </ul>           
                     <!--   <ul>
                            <li>html/css</li>
                            <li>java script</li>
                            <li>Scratch</li>
                        </ul>
                            
                        <ul>
                            <li>Bootstrap</li>
                            <li>GitHub</li>
                            <li>Figma</li>
                        </ul>-->
                    </div>


                <div class="col-12 col-md-6" class="portrait">
                    <img src="./images/martin.2.jpg" alt="portrait M. Chedaille" id="portrait">
                </div>

            </div>
        </div>
    </section>

    <section class="competence">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>Compétences</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6">
                    <ul>
                        <li>html/css</li>
                        <li>java script</li>
                        <li>Scratch</li>
                    </ul>
                </div>
           
                <div class="col-12 col-md-6">
                    <ul>
                        <li>Bootstrap</li>
                        <li>GitHub</li>
                        <li>Figma</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
-->
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
                        <img class="card-img-top" src="./images/convertisseur.png" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">convertisseur</h5>
                          <p class="card-text">Ma première réalisation avec des vrais morceaux de Java Script dedans.</p>
                          <a href="https://github.com/martinched/convertisseur1.git" class="btn btn-primary codesource">Voir code source</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="../briefs/moebius/images/biographiemoebius.png" alt="capture d'écran biographie Jean Giraud">
                        <div class="card-body">
                          <h5 class="card-title">Biographie</h5>
                          <p class="card-text">Une mini-bio de mon dessinateur prefèré.</p>
                          <a href="https://github.com/martinched/moebius2.git" class="btn btn-primary codesource">Voir code source</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="./images/Capture d'écran 2023-11-20 175427.png" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Mon portfolio</h5>
                          <p class="card-text">Voila un exercice-type de portfolio.</p>
                          <a href="https://github.com/martinched/portfolio.git" class="btn btn-primary codesource">Voir code source</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="https://placehold.co/600x400" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary codesource">Voir code source</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


 

    <?php wp_footer(); ?>
