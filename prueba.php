<?php
include('plantilla/encabezado.php');
include('clases/examen.php');

encabezado();
$obj = new Examen();
$preg = $obj->traerPreguntas();

    

?>

<div class="heading__primary margin-bottom-medium">Examen</div>

<form action="prueba.php" target="_self" method="POST">
    <h2 class="heading__secondary margin-bottom-small center-text">Datos Personales 😜</h2>
    <div class="formulario datos__personales margin-bottom-medium center-text">
        <a>Nombre: <input type="text" name="nombre" title="Escriba su nombre y apellido" placeholder="Nombre y apellido" size="25" required maxlength="24"></a>
        <a>Cédula: <input type="text" name="cedula" title="Escriba su cédula de identidad personal" placeholder="XX-XXXX-XXXXX" size="25" required maxlength="15"></a>
    </div>
    <h2 class="heading__secondary center-text margin-bottom-small">Prueba 😏</h2>
    <div class="formulario prueba">
        <?php
        for ($i = 0; $i < 10; $i++) {
            echo "<h3 class=\"heading__tertiary margin-bottom-small\">" . $preg[0][$i] . "</h3> ";
        ?>
            <div class="opcion__wrapper">
                <div class="opcion opcion__si margin-bottom-small">
                    <p>
                        <input type="radio" name="<?php echo 'resp' . $i ?>" value="Sí" required>
                        👌 Sí</p>
                </div>
                <div class="opcion opcion__no margin-bottom-medium">
                    <p>
                        <input type="radio" name="<?php echo 'resp' . $i ?>" value="No"> 👎 No
                    </p>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
    <center>
        <input type="submit" name="enviado" value="Enviar" class="env">
        <input type="reset" value="Borrar" class="btn">
    </center>
    <?php
    //EVALUAR EL EXAMEN
    if (isset($_POST["enviado"])) {
        $respuestas = array($_POST["resp0"], $_POST["resp1"], $_POST["resp2"], $_POST["resp3"], $_POST["resp4"], $_POST["resp5"], $_POST["resp6"], $_POST["resp7"], $_POST["resp8"], $_POST["resp9"]);
        $obj->asignar($respuestas);
        $punt = $obj->evaluar();

    ?>
        <br>
        <form action="" target="_self" method="POST">
            <fieldset>
                <h2 class="heading__secondary center-text margin-bottom-medium">Examen de <?php echo $_POST["nombre"] ?></h2>
                <div class="respuestas cedula center-text margin-bottom-medium margin-top-small">
                    <a>Cédula: <input class="center-text" type="text" title="C.I.P" size="10" maxlength="20" value="<?php echo $_POST['cedula']; ?>" readonly></a>
                </div>
                <h3 class="heading__tertiary center-text  margin-bottom-small">Tus respuestas</h3>
                <div class="formulario__respuestas">
                    <?php
                    for ($a = 0; $a < 10; $a++) {
                        if ($respuestas[$a] === $preg[2][$a]) {
                            echo "<h3 class=\"heading__tertiary margin-top-small margin-bottom-small\"> Pregunta: " . $preg[0][$a] . " (" . $preg[1][$a] . " puntos) . ☑️</h3>";
                        } else {
                            echo "<h3 class=\"heading__tertiary margin-top-small margin-bottom-small\"> Pregunta: " . $preg[0][$a] . " (" . $preg[1][$a] . " puntos) ❌</h3>";
                        }
                    ?>
                        <div class="formulario__respuestas--wrapper">
                            <div class="formulario__respuestas--respondio margin-bottom-small">
                                <a>Respondió: <input class="center-text" type="text" title="Respuesta Ingresada" value="<?php echo $respuestas[$a]; ?>" size="1" maxlength="20" class="cajas" readonly> </a>
                            </div>
                            <div class="formulario__respuestas--respuesta-correcta">
                                <a>Respuesta correcta: <input class="center-text" type="text" name="precio" title="Respuesta Correcta" value="<?php echo $preg[2][$a] ?>" size="1" maxlength="20" class="cajas" readonly> </a>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="center-text puntaje__final  margin-top-medium margin-bottom-big">
                    <h4 class="finaltext">Puntaje final:</h4>
                    <input type="text" title="Puntaje obtenido"
                         size="7" maxlength="20" 
                            class="respuesta" value=" <?php echo $punt; ?>/80 " 
                    readonly>
                    <?php  if($punt >= 60) {
                        echo "<p class=\"nota-margen\" ><span class=\"felicitaciones\">!Felicidades!</span> Has pasado la prueba 🥳  </p>";
                    } else {
                        echo "<p class=\"nota-margen\" ><span class=\"lo-sentimos\">No has pasado la prueba.</span> Prueba otra vez 😵 </p>";
                    }
                        ?>
                </div>
            </fieldset>
        </form>

    <?php
    }
    pie();

    ?>