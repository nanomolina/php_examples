<html>
 <head>
  <title> Sincronizando con mysql </title>
 </head>
 <body>
  <?php
    $connection=mysql_connect("localhost", "root", "");
    mysql_select_db("FaMAF", $connection);
    $sql_code="SELECT * FROM `Libro`";
    $datos=mysql_query($sql_code, $connection);
    $row=mysql_fetch_array($datos);
    foreach($row as $clave=>$valor) {
        if (is_string($clave)) {
            echo "|$clave| ";
        }
    }
    echo "</br>";
    while ($row=mysql_fetch_array($datos)) {
        $ISBN=$row['ISBN'];
        $titulo=$row['titulo'];
        $editorial=$row['editorial'];
        $edicion=$row['edicion'];
        echo "$ISBN, $titulo, $editorial, $edicion </br>";
    }
    mysql_close($connection);
  ?>
 </body>
</html>
