<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title> </title>
    </head>

    <body>
        <!-- TITULO PASADO DESDE EL CONTROLADOR -->
        <h4><?php echo $titulo; ?></h4>
        <!-- FORMULARIO -->
        <form id="datos" name="datos" method="POST" action="<?php echo base_url(); ?>index.php/DatosControl/registrar">
            Nombre              
            <input name="nombre" type="text" /><br />
            Teléfono            
            <input name="telefono" type="text" /><br />
            Correo electrónico  
            <input name="email" type="text" /><br />

            <input type="submit" value="Registra">
        </form>
    </body>
</html>