<?php 
ob_start();
echo titreNiveau1("Ils ont besoin de vous !",COLOR_TITRE);
?>

<!-- Carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active bg-dark"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1" class="bg-dark"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2" class="bg-dark"></li>
  </ol>

  <div class="carousel-inner">
    <!-- Début d'un item -->
    <div class="carousel-item active">
      <div class="row no-gutters border rounded overflow-hidden mb-4 bgColor">
        <div class="col-12 col-md-auto text-center">
          <img src='public/sources/images/site/animaux/chat/simba/simba.jpg' style='height:250px;'
            alt='photo de simba' />

        </div>
        <div class="col p-4 d-flex flex-column position-static">
          <h3 class="policeTitre titreTextShadow">Simba</h3>
          <div class="text-muted mb-1">Né : 2021/02/05</div>
          <p class="mb-auto">
            Description de Simba
          </p>
          <a href="" class="btn btn-primary">Visiter ma page</a>
        </div>
      </div>
    </div>
    <!-- Fin d'un item -->
    <!-- Début d'un item -->
    <div class="carousel-item ">
      <div class="row no-gutters border rounded overflow-hidden mb-4 bgColor">
        <div class="col-12 col-md-auto text-center">
          <img src='public/sources/images/site/animaux/chat/titi/titi.jpg' style='height:250px;' alt='photo de titi' />
        </div>

        <div class="col p-4 d-flex flex-column position-static">
          <h3 class="policeTitre titreTextShadow">Titi</h3>
          <div class="text-muted mb-1">Né : 2021/04/06</div>
          <p class="mb-auto">
            Description de Titi
          </p>
          <a href="" class="btn btn-primary">Visiter ma page</a>
        </div>
      </div>
    </div>
    <!-- Fin d'un item -->
    <!-- Début d'un item -->
    <div class="carousel-item ">
      <div class="row no-gutters border rounded overflow-hidden mb-4 bgColor">
        <div class="col-12 col-md-auto text-center">
          <img src='public/sources/images/site/animaux/chien/rex/rex.jpg' style='height:250px;' alt='photo de rex' />
        </div>

        <div class="col p-4 d-flex flex-column position-static">
          <h3 class="policeTitre titreTextShadow">Rex</h3>
          <div class="text-muted mb-1">Né : 2021/03/10</div>
          <p class="mb-auto">
            Description de Rex
          </p>
          <a href="" class="btn btn-primary">Visiter ma page</a>
        </div>
      </div>
    </div>
    <!-- Fin d'un item -->
  </div>
</div>
<!-- icones -->
<div class="row">
  <div class="col-6 mt-3">
    <h2 class="text-center mt-3 colorMenu policeTitre titreTextShadow"><img
        src="public/sources/images/autres/icones/journal.png" alt="Logo News" />Nouvelles des adoptés</h2>
  </div>
  <div class="col-6 mt-3">
    <h2 class="text-center mt-3 colorMenu policeTitre titreTextShadow"><img
        src="public/sources/images/autres/icones/action.png" alt="Logo News" />Evènements & Actions</h2>
  </div>
</div>
<!--Nouvelles des adoptés -->
<div class="row">
  <div class="col-6 bgColor">
    <div class="row no-gutters border rounded m-2 align-items-center mb-4">
      <div class="col-auto d-none d-lg-block mx-2">
        <img src="public/sources/images/site/animaux/chien/nova/nova.jpg" style="height:250px;" alt="photo de nova" />
      </div>
      <div class="col p-3 d-flex flex-column position-static">
        <h3 class="mb-0 policeTitre titreTextShadow">Nouvelle famille pour Nova</h3>
        <p class="mt-2">
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Nisi aperiam vitae corrupti adipisci fugit voluptatum dicta iusto dolores voluptatem vel.
        </p>
        <a href="" class="btn btn-primary">Voir les nouvelles des adoptés</a>
      </div>
    </div>
  </div>
  <!-- Evenements et actions -->
  <div class="col-6 bgColor">
    <div class="row no-gutters border rounded m-2 align-items-center">
      <div class="col-auto d-none d-lg-block mx-2 ">
        <img src="public/sources/images/site/animaux/chien/pixie/pixie.jpg" style="height:250px;"
          alt="photo de pixie" />
      </div>
      <div class="col p-3 d-flex flex-column position-static">
        <h3 class="mb-0 policeTitre titreTextShadow">Nouveaux arrivés</h3>
        <p class="mt-2">
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Nisi aperiam vitae corrupti adipisci fugit voluptatum dicta iusto dolores voluptatem vel.
        </p>
        <a href="" class="btn btn-primary">Les Evenements et actions</a>
      </div>
    </div>
  </div>
</div>

<?php 
$content = ob_get_clean();
require "views/commons/template.php";
?>