<?php
require_once "pdo.php";

function getActualitesFromBD($type){
    $bdd = connexionPDO();
    $req ="
    SELECT * 
    FROM actualite 
    WHERE type_actualite = :type
    order by date_publication_actualite DESC
    ";
    $stmt = $bdd->prepare($req);
    $stmt->bindValue(":type",$type,PDO::PARAM_STR);
    $stmt->execute();
    $actualites = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $actualites;
}

function getActualiteFromBD($idActualite){
    $bdd = connexionPDO();
    $req = '
    SELECT id_actualite, libelle_actualite, contenu_actualite,type_actualite, a.id_image, i.url_image, i.libelle_image 
    FROM actualite a
    inner join image i on i.id_image = a.id_image
    where id_actualite = :idActualite
    ';
    $stmt = $bdd->prepare($req);
    $stmt->bindValue(":idActualite",$idActualite,PDO::PARAM_INT);
    $stmt->execute();
    $actualite = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $actualite;
}
function getImageActualiteFromBD($idImage){
    $bdd = connexionPDO();
    $req ="
    SELECT * 
    FROM image
    WHERE id_image = :idImage";
    $stmt = $bdd->prepare($req);
    $stmt->bindValue(":idImage",$idImage,PDO::PARAM_INT);
    $stmt->execute();
    $image = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $image;
}

function getLastNews(){
    $bdd = connexionPDO();
    $req ="
    SELECT id_actualite,libelle_actualite,contenu_actualite,date_publication_actualite,type_actualite,a.id_image,i.libelle_image,i.url_image,i.description_image
    FROM actualite a  
    INNER JOIN image i ON a.id_image = i.id_image
    WHERE type_actualite = :type
    order by date_publication_actualite DESC
    LIMIT 1 
    ";
    $stmt = $bdd->prepare($req);
    $stmt->bindValue(":type",TYPE_NEWS,PDO::PARAM_STR);
    $stmt->execute();
    $actualite = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $actualite;
}

function getLastActionsOrEvents(){
    $bdd = connexionPDO();
    $req ="
    SELECT id_actualite,libelle_actualite,contenu_actualite,date_publication_actualite,type_actualite,a.id_image,i.libelle_image,i.url_image,i.description_image
    FROM actualite a  
    INNER JOIN image i ON a.id_image = i.id_image 
    WHERE type_actualite = :typeEvent or type_actualite = :typeAction
    order by date_publication_actualite DESC
    LIMIT 1 ";
    $stmt = $bdd->prepare($req);
    $stmt->bindValue(":typeEvent",TYPE_EVENTS,PDO::PARAM_STR);
    $stmt->bindValue(":typeAction",TYPE_ACTIONS,PDO::PARAM_STR);
    $stmt->execute();
    $actualite = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $actualite;
}