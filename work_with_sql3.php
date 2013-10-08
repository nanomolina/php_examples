<html>
 <head>
  <title> Sincronizando con mysql </title>
 </head>
 <body>
  <?php
    $connection=mysql_connect("localhost", "root", "");
    mysql_select_db("FaMAF", $connection);
    $sql_code="SELECT `apellido`,`rest_nom`\n"
            . "FROM `Persona`, `TrabajaEn`\n"
            . "WHERE `Persona`.`DNI`=`TrabajaEn`.`DNI`\n"
            . "AND `nom_bib` = \"FaMAF\"";
    $datos=mysql_query($sql_code, $connection);
    $row=mysql_fetch_array($datos);
    foreach($row as $clave=>$valor) {
        if (is_string($clave)) {
            echo "|$clave| ";
        }
    }
    echo "</br>";
    while ($row=mysql_fetch_array($datos)) {
        $apellido=$row['apellido'];
        $rest_nom=$row['rest_nom'];
        echo "$apellido, $rest_nom </br>";
    }
    mysql_close($connection);
  ?>
 </body>
</html>
