<?php
require_once "pdo.php";

function getAnimalFromStatut($idStatut){
    $bdd = connexionPDO();
    $req ='SELECT * 
    FROM animal 
    WHERE id_statut= :idStatut';
    
    $stmt = $bdd->prepare($req);
    $stmt->bindValue(':idStatut',$idStatut,PDO::PARAM_INT);
    $stmt->execute();
    $animaux = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $animaux;
}

function getFirstImageAnimal($idAnimal){
    $bdd = connexionPDO();
    $stmt = $bdd->prepare('SELECT i.id_image,libelle_image,url_image,description_image
    FROM image i
    INNER JOIN contient c ON i.id_image = c.id_image
    INNER JOIN animal a ON a.id_animal = c.id_animal
    WHERE a.id_animal = :idAnimal
    LIMIT 1');
    $stmt->bindValue(':idAnimal',$idAnimal,PDO::PARAM_INT);
    $stmt->execute();
    $image = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $image;
}

function getAnimalFromAnimalBD($idAnimal){
    $bdd = connexionPDO();
    $req ="SELECT * 
    FROM animal 
    WHERE id_animal = :idAnimal";
    $stmt = $bdd->prepare($req);
    $stmt->bindValue(":idAnimal",$idAnimal,PDO::PARAM_INT);
    $stmt->execute();
    $animal = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $animal;
}

function getImagesFromAnimalBD($idAnimal){
    $bdd = connexionPDO();
    $stmt = $bdd->prepare('SELECT i.id_image,libelle_image,url_image,description_image
    FROM image i
    INNER JOIN contient c ON i.id_image = c.id_image
    INNER JOIN animal a on a.id_animal = c.id_animal
    WHERE a.id_animal = :idAnimal
    ');
    $stmt->bindValue(":idAnimal",$idAnimal,PDO::PARAM_INT);
    $stmt->execute();
    $images = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $images;
}