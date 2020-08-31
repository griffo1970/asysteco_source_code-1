<?php
if($_SESSION['Perfil'] === 'Admin')
{ 
    if ($response = $class->query("SELECT $class->profesores.ID, $class->profesores.Nombre FROM $class->profesores WHERE Activo = 1 ORDER BY ID ASC"))
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
                echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            while ($fila = $response->fetch_assoc())
            {
                echo "<tr id='guardias_$fila[ID]' class='row_prof'>";
                if($fila['Tipo'] == 'Admin')
                    {
                    echo "<td>$fila[ID]</td>";
                    echo "<td>$fila[Nombre]</td>";
                    }
                    else
                    {
                        $ERR_MSG = "Solo es una prueba";

                    }
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
}
else
{
    $ERR_MSG = "Solo es una prueba";

}