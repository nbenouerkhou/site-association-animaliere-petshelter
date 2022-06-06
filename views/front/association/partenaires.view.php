<?php 
ob_start();
echo titreNiveau1("les partenaires",COLOR_TITRE);
?>

<div class="row no-gutters">
  <!-- partenaire1 -->
  <div class="card col-auto mx_auto mt-2" style="width: 18rem;">
    <img src="public/sources/images/autres/logoPartenaire.png" class="card-img-top p-1" alt="logo Animal Rescue"/>
    <div class="card-body text-center">
      <h5 class="card-title policeTitre titreTextShadow ">Animal Rescue</h5>
      <p class="card-text">Lorem, ipsum dolor sit amet consectetur.</p>
      <a href="" class="btn btn-primary">Visiter notre site</a>
    </div>
  </div>
  <!-- partenaire2 -->
  <div class="card col-auto mx-auto mt-2" style="width: 18rem;">
    <img src="public/sources/images/autres/logoPartenaire.png" class="card-img-top p-1" alt="logo Animal Rescue"/>
    <div class="card-body text-center">
      <h5 class="card-title policeTitre titreTextShadow ">Animal Rescue</h5>
      <p class="card-text">Lorem, ipsum dolor sit amet consectetur.</p>
      <a href="" class="btn btn-primary">Visiter notre site</a>
    </div>
  </div>
  <!-- partenaire3 -->
  <div class="card col-auto mx-auto mt-2" style="width: 18rem;">
    <img src="public/sources/images/autres/logoPartenaire.png" class="card-img-top p-1" alt="logo Animal Rescue"/>
    <div class="card-body text-center">
      <h5 class="card-title policeTitre titreTextShadow">Animal Rescue</h5>
      <p class="card-text">Lorem, ipsum dolor sit amet consectetur.</p>
      <a href="" target=_blank class="btn btn-primary">Visiter notre site</a>
    </div>
  </div>
</div>

<?php
$content = ob_get_clean();
require "views/commons/template.php";
?>