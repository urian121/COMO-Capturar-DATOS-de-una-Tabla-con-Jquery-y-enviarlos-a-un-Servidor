<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Urian Viera :: WebDeveloper</title>
    <link rel="icon" type="image/x-icon" href="assets/img/logo-mywebsite-urian-viera.svg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i|Roboto+Mono:300,400,700|Roboto+Slab:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="assets/css/material.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="./assets/css/loader.css">
</head>
    <body>
        <header>
          <div class="contenedor_header">
              <ul class="flex-container">
                <li class="flex-item"></li>
                <li class="flex-item">
                  <p>
                    <strong>
                    WebDeveloper - Urian Viera 😀 👍
                    </strong>
                  </p>
                </li>
                <li class="flex-item"></li>
              </ul>
          </div>
        </header>

        <div id="demo-content">
          <div id="loader-wrapper">
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
                <div class="loader-section section-right"></div>
            </div>
          <div id="content"> </div>
        </div>


        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center" style="padding:70px 0px;">
              <h2 class="text-center" style="color:#333; font-weight:900;">
                COMO Capturar DATOS de una Tabla con Jquery y enviarlos a un Servidor
              </h2>
            </div>
          </div>
        </div>


        <?php
          $usuario  = "root";
          $password = "";
          $servidor = "localhost";
          $basededatos = "ejemplo_youtube";
          $con = mysqli_connect($servidor, $usuario, $password) or die("No se ha podido conectar al Servidor");
          mysqli_query($con,"SET SESSION collation_connection ='utf8_unicode_ci'");
          $db = mysqli_select_db($con, $basededatos) or die("Upps! Error en conectar a la Base de Datos");

          $sqlTrabajadores = ("SELECT * FROM trabajadores");
          $query = mysqli_query($con, $sqlTrabajadores);
        ?>


          <div class="container mb-5">
            <div class="row">
              <div class="col-md-12 text-center">
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>EMAIL</th>
                    <th>TELEFONO</th>
                    <th>SUELDO</th>
                    <th>FECHA DE INGRESO</th>
                    </tr>
                  </thead>
                  <?php
                  while ($dataRow = mysqli_fetch_array($query)) { ?>
                  <tbody>
                    <tr class="trTrabajador" data-trabajador="<?php echo $dataRow['id']; ?>" data-id="<?php echo $dataRow['id']; ?>" id="trabajador<?php echo $dataRow['id']; ?>">
                        <td><?php echo $dataRow['id']; ?></td>
                        <td><?php echo $dataRow['nombre']; ?></td>
                        <td><?php echo $dataRow['apellido']; ?></td>
                        <td><?php echo $dataRow['email'] ; ?></td>
                        <td><?php echo $dataRow['telefono'] ; ?></td>
                        <td><?php echo $dataRow['sueldo'] ; ?></td>
                        <td><?php echo $dataRow['fecha_ingreso'] ; ?></td>
                      </tr>
                  </tbody>
                  <?php } ?>
                </table>
              </div>
              </div>
            </div>
          </div>




    <footer class="footer grey darken-4 mt-5">
      <div class="container center" style="padding-top: 5px;">
        <div class="row justify-content-md-center">
          <div class="col col-lg-5">
          &copy; Visita mis Redes - 2022 WebDeveloper
          </div>
          <div class="col-md-auto">
            <a href="https://www.youtube.com/c/WebDeveloperUrianViera/videos" target="_blank" title="Visitar Youtube">
              <i class="bi bi-youtube"></i>
            </a>
            <a href="https://github.com/urian121" target="_blank" title="Visitar Github">
              <i class="bi bi-github"></i>
            </a>
            <a href="https://www.linkedin.com/in/urian-viera-a930859b/" target="_blank" title="Visitar Linkedin">
              <i class="bi bi-linkedin"></i>
            </a>
            <a href="https://blogangular-c7858.web.app/" target="_blank" title="Visitar Portafolio">
              <i class="bi bi-briefcase"></i>
            </a>

          </div>
        </div>
      </div>
    </footer>


  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="assets/js/material.min.js"></script>
  <script>
  $(function() {
      setTimeout(function(){
        $('body').addClass('loaded');
      }, 1000);
  });




  $( ".trTrabajador" ).click(function(e) {
    e.preventDefault();

    //Capturo el data-id de la fila seleccionada
    var id    =  $(this).attr("data-id");

    //var trabajador = $(this).attr("data-trabajador");
    var trabajadorId = $(this).attr("id"); 
    console.log('La fila corresponde al ID: ' + id + trabajadorId)

    console.log('La fila corresponde al ID: ' + id)
    $("#trabajador" + id).remove();

  /*
    var dataString = 'id='+ id;
    url = "Delete.php";
        $.ajax({
            type: "POST",
            url: url,
            data: dataString,
            success: function(data)
            {
                $("#registro" + id).hide();
               // $("#registro" + id).remove();
                $('#resp').html(data);
            }
        }); 
        */
  });
</script>

</body>
</html>