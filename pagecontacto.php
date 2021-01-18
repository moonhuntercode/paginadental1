<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  Contacto </title>
    <link rel="stylesheet" href="styles/stylebasic.css">

</head>
<body>

    <!-- Header --> 
    <?php include 'header.php';  ?>
    <!-- Menu -->
    <?php include 'menu.php';  ?>
    <!-- Content -->

    <h1>  Contacto </h1>

    <p> Escribanos por medio del formulario de contacto su opinion o consulta es  importante para nosotros </p>
     
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <fieldset>
            <legend> Formulario de Contacto </legend>
            Nombre: <input type="text" name="name"> <br> <br>
            Correo Electronico: <input type="text" name="email"> <br><br>
            Comentario: <br> <textarea name="comment" cols="40" rows="5"></textarea> <br><br>
            <input type="submit" name="submit" value="Enviar">
        </fieldset>
    </form>

     <?php   
        if ($_SERVER["REQUEST_METHOD"]=="POST") {
            $name=$_REQUEST['name'];
            $email=$_REQUEST['email'];
            $comment=$_REQUEST['comment'];
    
            echo "<h2> Gracias por escribirnos $name <br>  ";
            echo " nuestro dpto. de comunicacion se pondra en contacto contigo <br>";   
            echo " te contactaremos por tu correo $email <br>"; 
            echo " sobre tu comentario en nuestra pagina:  $comment <br>  </h2>"; 
    
            $message=" Remitente: $name, su email: $email, Comentario: $comment ";
    
            mail("arcidio.ortiz@gmail.com","Mensaje del sitio Web",$message);
    
            echo " <h3>  <br>  Mensaje enviado con exito.  </h3>  ";
        }

       
    ?>



    <!-- Footer --> 
    <?php include 'footer.php';  ?>
    
</body>
</html>