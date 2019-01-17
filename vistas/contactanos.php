<?php
require_once("app/config.inc.php");
$titulo= "Al-tech";
require("plantillas/doc-start.inc.php");
require("plantillas/navbar.inc.php");

if ($_POST['aubmit']) {
    $name = $_POST['name'];
    $mail = $_POST['email'];
    $body = $_POST['body'];

    //Email a enviar para los webmaster
    mail("prueba.dev@yopmail.com", "Nueva peticion", "Hay un potencial cliente " + $body);

    //Email a enviar al cliente
    //mail($mail, "Solicitud de proyecto", "Nuestro equipo estara revisando su peticion lo mas pronto posible... Gracias por confiar en nosotros :)");

    $to = $_POST['email']; // aqui coloca el email de quien recibira el correo
    $from_email = 'prueba.dev@yopmail.com'; // $_POST[email]

    $subject = 'Evilsys - Mail de Ejemplo';
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
    $headers .= "From: $from_email" . "\r\n" .
    "Reply-To: $from_email" . "\r\n" .
    "X-Mailer: PHP/" . phpversion();
    $message = "<body><h1> Sr.(a)". $name ."</h1><p>Nuestro equipo estara revisando su peticion lo mas pronto posible.</p>
    <br><p>Gracias por contactarnos</p>  </body>";

    if(mail($to, $subject, $message, $headers)){
        print "Su peticion ha sido procesada con exito.";
    }

}

?>  

    <div >
        <br>
        <br>
        <br>
        <div id="contacto">
            <div class="container">
                <div class="row">
                    <div class="col-12 center">
                        <h2 >Contactanos</h2>
                    </div>
                    <div class="col-6 offset-3">
                        <form action="<?php print RUTA_CONTACTO?>" method="post">
                            <label for="name">Nombre</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Ingrese su nombre">
                            <br>
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="yourmail@example.com" id="email">
                            <br>
                            <label for="description">Describe lo que quieres nosotros lo hacemos por ti</label>
                            <textarea class="form-control" rows="3" id="description" name="body"></textarea>
                            <br>
                            <button type="submit" class="btn btn-primary btn-block btn-large" name="submit">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
require('plantillas/footer.inc.php');
require_once('plantillas/doc-end.inc.php');
?>
    