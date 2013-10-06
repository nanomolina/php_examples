<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
 <head>
  <title> Trabajando con Sql </title>
 </head>
 <body>
  <?php
    $db=mysql_connect("localhost","root","");
    mysql_select_db("famaf", $db);
    $sql_cod="SELECT * FROM `libro`";
    $datos=mysql_query($sql_cod, $db);
    $row=mysql_fetch_array($datos);
    foreach ($row as $clave=>$valor) {
        if (is_string($clave)) {
            echo "$clave | ";
        }
    }
    echo "<br/>";
    while ($row=mysql_fetch_array($datos)) {
        $ISBN=$row['ISBN'];
        $titulo=$row['titulo'];
        $editorial=$row['editorial'];
        $edicion=$row['edicion'];
        echo "$ISBN, $titulo, $editorial, $edicion <br/>";
    }  
    mysql_close($db);
  ?>    
 </body>
</html>