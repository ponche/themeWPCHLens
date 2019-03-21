<?php

/*

Template Name: Page Présentation 

*/
	get_header();
?>




    <br><br>
    <!-- Title and paragraph -->
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1>Présentation</h1>
            </div>
            <div class="col-4 end-col">
                le projet en chiffre
                <i class="far fa-question-circle fa-2x Show"></i>
                <i class="far fa-question-circle fa-2x Hide"></i>
                <div id="target"></div>
            </div>
        </div>
    </div>
    <br><br>
    <!-- Architect -->
    <div class="container bg-test">
        <div class="row">
            <div class="col-6 text-title-div">
                <h2>Architecture</h2>
                <p class="space-paragraph">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex error dolorum
                    modi doloremque fugit
                    unde
                    similique eos ut nemo deleniti deserunt iusto qui vitae perferendis consequuntur quasi corporis,
                    aperiam mollitia.
                </p>
                <h5>
                    Surface :
                </h5>
                <h5>
                    Capacité d’accueil :
                </h5>
                <div class="linetest"></div>
                <p>
                    + Meilleur déplacement du personnel
                    et amélioration la de prise en charge
                    des patients
                </p>
                <p>
                    + Accompagnement et support à la
                    médecine moderne
                </p>
                <button type="button" class="btn btn-outline-secondary">Répartition des bâtiments</button>
            </div>
            <div class="col-6">
                <img src="images/presentation/architecture.png" alt="test" width="600" height="800">
            </div>
        </div>
    </div>
    <!-- Techno -->
    <div class="container bg-test-1">
        <div class="row justify-content-md-center">
            <div class="col-6 text-title-div">
                <h2>Technologie</h2>
                <p class="space-paragraph">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex error dolorum
                    modi doloremque fugit
                    unde
                    similique eos ut nemo deleniti deserunt iusto qui vitae perferendis consequuntur quasi
                    corporis,
                    aperiam mollitia.
                </p>
                <h5>
                    Dossier patient digitalisé
                </h5>
                <h5>
                    Chambres intelligentes
                </h5>
                <h5>
                    Matériel et logistique
                </h5>
                <div class="linetest"></div>
                <p>
                    + Amélioration de la qualité d’accueil
                    et réduction de la durée de séjour
                </p>
                <p>
                    + Coordination des soins et focus des
                    soignants sur leur coeur de métier
                </p>
                <p>
                    Transparence du dossier et
                    prévention personnalisée (le patient
                    devient acteur de sa santé)
                </p>
            </div>
            <div class="col-6">
                <img src="ressources/images/technologie.jpg" alt="test" width="600" height="800">
            </div>
        </div>
    </div>
    <!-- Accessibilité -->
    <div class="container bg-test-2">
        <div class="row justify-content-md-center">
            <div class="col-6 text-title-div">
                <h2>Accessibilité</h2>
                <p class="space-paragraph">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex error dolorum
                    modi doloremque fugit
                    unde
                    similique eos ut nemo deleniti deserunt iusto qui vitae perferendis consequuntur quasi
                    corporis,
                    aperiam mollitia.
                </p>
                <h5>
                    Surface :
                </h5>
                <h5>
                    Parking :
                </h5>
                <h5>
                    Ligne de transport dédiée
                </h5>
                <div class="linetest"></div>
                <p>
                    + Fluidité de circulation et facilitation
                    de stationnement
                </p>
                <p>
                    + Rapidité de prise en charge des
                    patients
                </p>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-outline-secondary">
                        Visite virtuelle
                    </button>
                    <button type="button" class="btn btn-outline-secondary">
                        Itinéraire routier
                    </button>
                </div>
            </div>
            <div class="col-6">
                <img src="images/presentation/access.jpg" alt="test" width="600" height="800">
            </div>
        </div>
    </div>
    <!-- Paysage  -->
    <div class="container bg-test-3">
        <div class="row justify-content-md-center">
            <div class="col-6 text-title-div">
                <h2>Paysage</h2>
                <p class="space-paragraph">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex error dolorum
                    modi doloremque fugit
                    unde
                    similique eos ut nemo deleniti deserunt iusto qui vitae perferendis consequuntur quasi
                    corporis,
                    aperiam mollitia.
                </p>
                <h5>
                    Surface :
                </h5>
                <h5>
                    Capacité d'accueil :
                </h5>
                <div class="linetest"></div>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/presentation/plante1.jpg" class="d-block w-100" alt="Paysage">
                        </div>
                        <div class="carousel-item">
                            <img src="images/presentation/plante2.jpg" class="d-block w-100" alt="Paysage">
                        </div>
                        <div class="carousel-item">
                            <img src="images/presentation/plante.jpg" class="d-block w-100" alt="Paysage">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-6">
                <img src="images/presentation/paysage.jpg" alt="test" width="600" height="800">
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>


<?php get_footer() ; ?>
    