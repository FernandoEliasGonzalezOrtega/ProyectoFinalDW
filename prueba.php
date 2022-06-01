<?php
    require 'bd.php';
    $query = "SELECT colonia.chcodigo_postal, colonia.chdescripcion, municipio.chd_municipio, estado.chd_estado 
    FROM colonia INNER JOIN municipio ON colonia.nukidmunicipio=municipio.nukidmunicipio 
    INNER JOIN estado ON municipio.nukidestado=estado.nukidestado ORDER BY colonia.nukidcolonia ASC";
 
    $stmt = $conn->prepare($query);
    $stmt->execute();

    $userData = array();

    while($row=$stmt->fetch()){
  
        $userData['CodigosPostales'][] = $row;

    }

    echo json_encode($userData);
?>