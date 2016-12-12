<!DOCTYPE html>
<html>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
      <script src="js/ajax.js" ></script>
      <script type="text/javascript" src="js/subir_imagen.js"></script>

      <script src="dist/jquery.validate.js" ></script>
      <link rel="stylesheet" href="css/style.css"/>
      <script src="js/form-validation.js"></script>
            <!-- el siguiente es para evitar errores en validate al mostrar la imagen: -->
      <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>     
      <script type="text/javascript" src="js/mostrarimagen.js"></script>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>      

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>      
    </head>
    <body>
       <div class="container">
        <div class="row">            
          <div class="col s12">
            <h2>Registro:</h2>
              <form action=""  name="registro" enctype="multipart/form-data">

                <label class="label label-danger invalid" for="nombre"></label>                
                <div class="input-field">
                  <label for="nombre">Nombre</label>
                  <input type="text" name="nombre" id="nombre" data-error="wrong"/>
                </div>

                <label for="documento" class="label label-danger invalid"></label>
                <div class="input-field">
                  <label for="documento">Documento</label>
                  <input type="text" name="documento" id="documento" />
                </div>

                <label for="email" class="label label-danger invalid"></label>
                <div class="input-field">
                  <label for="email"  data-error="wrong" data-success="right">Email</label>
                  <input type="email" name="email" id="email"  class="validate"/>
                </div>

                <label for="password" class="label label-danger invalid"></label>
                <div class="input-field">
                  <label for="password">Password</label>
                  <input type="password" name="password" id="password" />
                </div>


                
                <button type="submit" id="procesar" name="Submit" value="Grabar" method="POST">Registrar</button>
              </form>
          </div>
        </div>
      </div>

    <form method="post" id="formulario" enctype="multipart/form-data">
      <input name="file" type="file" id="file" />
    </form>                  
                <div id="respuesta"></div>
                <div class="container" align="center" id="image">


      <div id="respuesta"></div>
      <div id="resultado">

      <?php

       include('consulta.php');?></div>
    </body>
</html>