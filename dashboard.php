<?php
include_once 'database.php';
session_start();
if (!(isset($_SESSION['email']))) {
    header("location:login.php");
} else {
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    include_once 'database.php';
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Solicitudes | Cotizador Web</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="css/solicitudes.css">
    <link rel="stylesheet" href="css/font.css">
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <style type="text/css">
        body {
            width: 100%;
            background: url(images/back.jpg);
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;                 
        }
    </style>
        <link rel="stylesheet" href="css/jquery.dataTables.min.css"/>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/Spanish.json"></script>
    <script>
    $.extend( true, $.fn.dataTable.defaults, {
    "language":{
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            },
            "buttons": {
                "copy": "Copiar",
                "colvis": "Visibilidad"
            }
        }
        } );   
    </script>
</head>

<body>
<div clas="panel" style="
    width: 95%;
    margin-left: 2.5%;
    margin-top: 22px;
">

<header>
    <div class="titulo">
    <a href="https://fester-distribuidores.com/cotizador/" target="_self"><img src="images/fester.png" alt="Fester México" width="200"></a>
    </div>
</header>
    <nav class="navbar navbar-default title1" style="margin-bottom:0;border-color: #004380;background: #004380;">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="Javascript:void(0)"><b>  </b></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li><a style="color: white;" href="solicitudes.php?q=1">SOLICITUDES</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li  <?php echo ''; ?>> <a style="color: white; text-transform: uppercase;" href="logout.php?q=dashboard.php">Salir&nbsp;</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12 panel" style="margin-top:0;">
                <?php 
                if (@$_GET['q'] == 1) {
                    $q = mysqli_query($con, "SELECT * FROM solicitudes") or die('Error223');
                    echo  '<div class="txtResultado col-md-12">
                    <label style="color: #004380; font-size: 30px; ">
                    SOLICITUDES </label>
                    </div>
                  
                    <div class="col-md-12"><hr style="border-top: 2px solid gray;"/></div>
                    <div class="btnDescargar col-md-12">
                    <label style="font-size:13px">Listado de Solicitudes</label>
                    <input type="button" style="float:right;" class="btn btn-default" name="descargar" id="descargar" value="Descargar CSV" onclick="exportTableToCSV(' . "'solicitudes.csv'" . ')"></div>
                   <div class="title col-md-12" style="margin-top:10px;"><div class="table-responsive">
                    <table class="table table-striped title1" >
                    <thead><tr style="color:black; font-size:13px;">
                    <td><center><b>Nombre</b></center></td>
                    <td><center><b>Telefono</b></center></td>
                    <td><center><b>Email</b></center></td>
                    <td><center><b>Ocupacion</b></center></td>
                    <td><center><b>Estado</b></center></td>
                    <td><center><b>CP</b></center></td>
                    <td><center><b>Informacion Personal</b></center></td>
                    <td><center><b>Estatus</b></center></td>
                    <td><center><b>Nota</b></center></td>
                    <td><center><b>Acciones</b></center></td>
                    </tr></thead>';
                    $c = 0;
                    echo '<tbody>';
                    while ($row = mysqli_fetch_array($q)) {
                        echo '<tr>
                        <td style="font-size:13px"><center><b>' . $row["nombre"] . '</b></center></td>
                        <td style="font-size:13px"><center><b>' . $row["telefono"] . '</b></center></td>
                        <td style="font-size:13px"><center><b>' . $row["email"] . '</b></center></td>
                        <td style="font-size:13px"><center><b>' . $row["ocupacion"] . '</b></center></td>
                        <td style="font-size:13px"><center><b>' . $row["estado"] . '</b></center></td>
                        <td style="font-size:13px"><center><b>' . $row["CP"] . '</b></center></td>
                        <td style="font-size:13px"><center><b>' . $row["InformacionPersonal"] . '</b></center></td>
                        <td style="font-size:13px"><center>' . $row["estatus"]  . '</center></td>
                        <td style="font-size:13px"><center>' . $row["nota"]  . '</center></td>
                        <td class="accion"><center><b>
                        <span  onclick="openModal(' . $row["id"] .','."'" . $row["nombre"] ."'".','."'" . $row["telefono"] ."'".','."'". $row["email"] ."'".','."'". $row["ocupacion"] ."'".')" 
                         class="pull-right btn btn-primary sub1" title="Agregar Nota" style="margin:0px;color:white; margin-left: 6px;">+</span><center>
                         </td>
                       </tr>';
                    }
                    echo '</tbody>';
                    echo '</table></div></div>';
                }
                ?>
                <?php
                if (@$_GET['q'] == 2) {
                    $id=$_GET['id'];
                    $title=$_GET['title'];
                    $result = mysqli_query($con, "SELECT * FROM solicitudes WHERE id=$id") or die('Error');
                    echo  '
                    <div class="col-md-12">
                    <label style="color: #004380; font-size: 30px;">'.$title.'</label>
                    </div>
                    <div class="btnDescargar col-md-12">
                    <label style="font-size:13px">Listado de Solicitudes</label>
                    <input type="button" style="float:right;" class="btn btn-default" name="descargar" id="descargar" value="Descargar CSV" onclick="exportTableToCSV(' . "'Solicitudes.csv'" . ')"></div>
                    <div class="col-md-12" style="margin-top:10px"><div class="table-responsive"><table class="table table-striped title1"><thead style="font-size:13px">
                    <tr>
                    <th><center><b>Nombre</b></center></th>
                    <th><center><b>Telefono</b></center></th>
                    <th><center><b>Correo</b></center></th>
                    <th><center><b>Ocupacion</b></center></th>
                    <th><center><b>Estado</b></center></th>
                    <th><center><b>CP</b></center></th>
                    <th><center><b>Informacion Personal</b></center></th>
                    <th><center><b>Estatus</b></center></th>
                    <th><center><b>Nota</b></center></th>
                   </tr></thead><tbody style="font-size:13px">';
                    $c = 1;
                    while ($row = mysqli_fetch_array($result)) {

                        echo '<tr><td><center>' . $row['nombre'] . '</center></td>
                        <td><center>' . $row['telefono'] . '</center></td>
                        <td><center>' . $row['email'] . '</center></td>
                        <td><center>' . $row['ocupacion'] . '</center></td>
                        <td><center>' . $row['estado'] . '</center></td>
                        <td><center>' . $row['CP'] . '</center></td>
                        <td><center>' . $row['InformacionPersonal'] . '</center></td>
                        <td><center>' . $row['estatus'] . '</center></td>
                        <td><center>' . $row['nota'] . '</center></td>
                        </tr>';
                    }
                    $c = 0;
                    echo '</tbody></table></div></div>';
                }
                ?>

                <?php
                    if (@$_GET['q'] == 'updatecotizacion') {
                        $id = $_POST['id'];
                        $nombre = $_POST['nombre'];
                        $nota = $_POST['nota'];
                        $_SESSION["id"]=$_POST['id'];
                        
                        if($id==null || $id=""){
                            $q3=mysqli_query($con,"INSERT INTO solicitudes(nombre,nota) 
                            VALUES(
                              '$nombre',
                              '$nota'
                            )");
                            $q3=mysqli_query($con,"SELECT IFNULL(MAX(id),1) as id FROM solicitudes");
                            $idq=0;
    
                            while($row=mysqli_fetch_array($q3))
                            {
                             $idq=$row["id"];
                             $_SESSION["id"]=$idq;
                            }
                        }
                        else{
                            $id=$_SESSION["id"];
                            $q=mysqli_query($con,"UPDATE solicitudes SET nombre='$nombre',nota='$nota' WHERE id= '$id'")or die('Error66');
                        }
                        echo '<script>(function(){window.location="/cotizadorweb/dashboard.php?q=1";})()</script>';
                    }
                      
                ?>
            </div>
        </div>
    </div>
    
    
    
    <div class="modal fade" id="CreateEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <label style="color: #004380; font-size: 30px; ">
                    Solicitudes </label>
                    <br/>
                    <label>Tabla de Solicitudes</label>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="dashboard.php?q=updatecotizacion"  method="POST" enctype="multipart/form-data">  

      <input class="hide" type="text" name="id" class="form-control"/>
      <span>Nombre:</span>
      <input type="text" name="nombre" class="form-control" />
      <br/>

      <span>Nota:</span>
      <input type="text"  name="nota" class="form-control"/>
      <br/>
      <input  class="hide" id="btnsubmit" type="submit">
      </form>
      </div> 
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="$('#btnsubmit').click()" style="background:blue;">Guardar</button>
        <button type="button" class="btn btn-danger" style="background:red;" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>




    <script src="js/Utils.js"></script>
    <script >
        $('table').DataTable();
        $("input[type='file'][name='imagen']").change(function(){
            var tamaño=this.files[0].size;
            if(tamaño>3000000){
                alert("El tamaño de la imagen supera los 3 MB");
                $("input[type='file']").val("");
            }
        })
        function openModal(id,nombre,telefono,email,ocupacion){
        if(id){
            $('[name="id"]').val(id);
            $('[name="nombre"]').val(nombre);
            $('[name="telefono"]').val(telefono);
            $('[name="email"]').val(email);
            $('[name="ocupacion"]').val(ocupacion);
        }

        $('#CreateEditModal').modal();
        
       }
    </script>
    </div>
    <footer>
		<a href="https://www.henkel.mx/privacy-statement?pageID=560414" target="_blank">AVISO DE PRIVACIDAD</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="https://www.henkel.mx/" target="_blank">HENKEL</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="https://www.fester.com.mx/es.html" target="_blank">FESTER</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Desarrollo web <a href="https://doos.com.mx/" target="_blank">DOOS CG&D</a>
    </footer>
</body>

</html>