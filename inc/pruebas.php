<?php
if($_SESSION['Perfil'] === 'Admin')
{ 
 if ($response = $class->query("SELECT $class->profesores.ID, $class->profesores.Nombre, $class->profesores.Iniciales, $class->perfiles.Tipo, $class->profesores.Activo, $class->profesores.Sustituido FROM $class->profesores INNER JOIN $class->perfiles ON $class->profesores.TIPO=$class->perfiles.ID"))
 {
   if ($response->num_rows > 0)
   {
    echo "<div id='guardias'></div>";
    echo "<h2>Edición de Guardias</h2>";
    echo "</br><table id='tabla_profesores' class='table table-hover'>";
    echo "<thead>";
        echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Nombre</th>";
            echo "<th>Iniciales</th>";
            echo "<th>Activo</th>";
        echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
   }
   else
   {
       $ERR_MSG = "Solo es una prueba";
   }
 }
 else
 {
    $ERR_MSG = "Solo es una prueba";

 }
}
else
{
    $ERR_MSG = "Solo es una prueba";

}