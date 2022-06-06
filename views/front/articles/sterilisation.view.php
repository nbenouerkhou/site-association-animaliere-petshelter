<?php ob_start();?>

<div class="row no-gutters">
    <div class="col-12 col-lg-5 p-2 my-auto">
        <img src="public/sources/images/site/articles/sterilisation.jpg" class="img-fluid img-tumbnail"
            alt="stérilisation"/>
    </div>
    <div calss="col-12 col-lg-7 p-2">
        <?php
        $txt="La stérilisation des chats !";
        echo titreNiveau1($txt,COLOR_TITRE);
        ?>
        <div class="mt-5 ml-3 text-center">
            <h5>Pourquoi la stérilisation des chats est-elle un act responsabel?</h5>
        
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa doloremque,<br/>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa doloremque,<br/>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa doloremque,<br/>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa doloremque,<br/>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa doloremque,<br/>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa doloremque,<br/>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa doloremque,<br/>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa doloremque,<br/>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa doloremque.<br/>
                
            </p>
            
        </div>
    </div>
</div>


<?php 
$content = ob_get_clean();
require "views/commons/template.php";
 ?>