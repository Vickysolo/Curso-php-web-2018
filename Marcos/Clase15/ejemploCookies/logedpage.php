<?php
session_start();
if(!empty($_SESSION['usuario'])){
/* La funcion empty() devuelve verdadero si el argumento posee un valor vacio,
al usar !empty() devuelve verdadero no solo si la variable fue declarada sino
ademas si contiene algun valor no nulo.
*/
echo 'Te haz logueado como: '.$_SESSION['usuario'].'<br />';
echo 'Has logrado el acceso a una pagina segura';
}else{
echo 'No estas logueado<br />';
echo 'Esta pagina es restringida!';
}
?>
    <a href="login.php">BACK TO LOGIN</a>

