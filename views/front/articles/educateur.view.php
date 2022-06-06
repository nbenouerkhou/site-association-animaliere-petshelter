<?php ob_start();?>

<div class="row no-gutters">
  <div class="col-12 col-md-5 p-2">
    <img src="public/sources/images/site/articles/educateur.png" alt="educateur canin"/>
  </div>
  <div class="col-12 col-md-7 p-2">
    <?php echo titreNiveau1("Education canine",COLOR_TITRE);?>
    <div class="mt-5">
        Nous connaissons des éducateurs canin employant l'éducation positive.<br/>
        Nous <a href="?page=contact"><button type="button" class="btn btn-primary">Contacter ! &raquo; </button>
    </div>
  </div>  
  
  
</div>


<?php 
$content = ob_get_clean();
require "views/commons/template.php";
 ?>