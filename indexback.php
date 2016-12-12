<!DOCTYPE html>
<html>
    <head>
      <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
      <script src="dist/jquery.validate.js" ></script>
      <script src="js/form-validation.js"></script>
      <!-- el siguiente es para evitar errores en validate al mostrar la imagen: -->
      <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>      
      <script type="text/javascript" src="js/mostrarimagen.js"></script>
      <link rel="stylesheet" href="css/style.css"/> 
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
              <form action="" name="registro">

                  <label for="nombre" data-error="wrong" data-success="right">Nombre</label>
                  <input type="text" class="form-control" name="nombre" id="nombre" />
                  <label for="documento">Documento</label>
                  <input type="text" class="form-control"  name="documento" id="documento" />

                  <label for="email"  data-error="wrong" data-success="right">Email</label>
                  <input type="text" class="form-control" name="email" id="email"  class="validate"/>

                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" />

                <label for="foto">Foto</label>
                <input name="foto" id="foto" type="file" />
                <div class="container" align="center" id="image"></div>
                <button type="submit" id="procesar">Registrar</button>
              </form>
          </div>
        </div>
      </div>
      
    </body>
</html>