<div class="container" style="margin-top: 75px;"></div>
<?php

$basedir = dirname($_SERVER['DOCUMENT_ROOT']);
$Instituto = preg_split('/\//', $_SERVER['REQUEST_URI']);
$subdir = '/' . $Instituto[1];
preg_match('/^\/[A-Z]+$/i', $subdir) ? $subdir = $subdir : $subdir = '' ;
$dirs = [
    'public' => '',
    'inc' => $basedir . $subdir . '/inc/',
    'class' => $basedir . $subdir . '/class/',
];
// try
// {
//     $bd = $class->bdConex();
//     $bd->begin_transaction();
//     $count = 6;
//     for($i=0;$i<$count;$i++)
//     {
//         $i == 3 ? $columna = 'Iniciasles' : $columna = 'Iniciales';
//         $response = $class->query("INSERT INTO Profesores ($columna, Nombre, Password, TIPO) VALUES ('FGL', 'Francisco García Lugo$i', 'luajhkgsfdkuqw7tei8972g3odcuiydo', '2')");
//     }
//     $bd->commit();
//     $bd->autocommit(TRUE);
// }
// catch(Exception $ERR_ASYSTECO)
// {
//     $bd->rollback();
// }