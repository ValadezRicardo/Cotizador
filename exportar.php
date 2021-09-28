<?php
include_once 'database.php';
session_start();
if (!(isset($_SESSION['email']))) {
    header("location:login.php");
}
else {
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
    <title>Exportar Base De Datos | Cotizador Web</title>
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

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>


    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script> -->
    <script type="text/javascript">
        $(document).ready( function () {
        $('#SolicitudesTabla').DataTable( {
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.10.22/i18n/Spanish.json'
                },
                order: [[ 0, 'desc' ]],
                dom: 'Bfrtlip',
                pageLength: 50
        });
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
                    <li><a style="color: white;" href="exportar.php">EXPORTAR BASE DE DATOS</a></li>
                    <li><a style="color: white;" href="solicitudes.php?q=1">SOLICITUDES</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li  <?php echo ''; ?>> <a style="color: white; text-transform: uppercase;" href="logout.php?q=solicitudes.php">Salir&nbsp;</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12 panel" style="margin-top:0;">     
           
            <select id="month">
                    <?php
$months = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
    "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
$nDate = date("m");

for ($i = 0; $i < (int)($nDate); $i++) {
    echo '<option value="' . ($i + 1) . '">' . $months[$i] . '</option>';
}
?>
            </select>

            <select id="year">
                    <?php
$initialYear = 2021;
$nDate = date("Y");
echo '<option value="' . $nDate . '">' . $nDate . '</option>';
for ($i = $initialYear; $i < (int)($nDate); $i++) {
    echo '<option value="' . ($i) . '">' . $i . '</option>';
}
?>
            </select>
            <button type="submit" style="margin-left:5px;" class="btn btn-success" name="submit" id="descargar" onclick="descargar()">DESCARGAR BASE DE DATOS</button>

            <hr class="my-5">
    <section class="mb-5">
        <table id="SolicitudesTabla" class="display table table-striped" style="width:100%">
            <thead>
                <tr>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Ocupacion</th>
                <th>Estado</th>
                <th>CP</th>
                <th>Infromacion Personal</th>
                <th>Estatus</th>
                <th>Nota</th>
                <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                <?php
if (isset($_GET["d"]) && isset($_GET["y"])) {
    $q = mysqli_query($con, "SELECT * FROM solicitudes where fecha BETWEEN '" . $_GET["y"] . "-" . $_GET["d"] . "-01' and '" . $_GET["y"] . "-" . $_GET["d"] . "-31'");
    while ($row = mysqli_fetch_array($q)) {
        echo
            '<tr><td>' . $row["nombre"] . '</td>
                    <td>' . $row["telefono"] . '</td>
                    <td>' . $row["email"] . '</td>
                    <td>' . $row["ocupacion"] . '</td>
                    <td>' . $row["estado"] . '</td>
                    <td>' . $row["CP"] . '</td>
                    <td>' . $row["InformacionPersonal"] . '</td>
                    <td>' . $row["estatus"] . '</td>
                    <td>' . $row["nota"] . '</td>
                    <td>' . $row["fecha"] . '</td>
                </tr>';
    }
}
?>
            </tbody>
        </table>
      
    </section>

<?php
//   if(ISSET($_GET["d"])&&ISSET($_GET["y"]))
//   {
//     $q1= mysqli_query($con, "SELECT * FROM solicitudes");
//     echo '
//     <table id="Solicitudes1" class="display table table-striped" style="width:100%;display:none">
//     <thead>
//         <tr>
//             <th>Nombre</th>
//             <th>Telefono</th>
//             <th>Email</th>
//             <th>Ocupacion</th>
//             <th>Estado</th>
//             <th>CP</th>
//             <th>Infromacion Personal</th>
//             <th>Estatus</th>
//             <th>Nota</th>
//             <th>Fecha</th>
//         </tr>
//     </thead>
//     <tbody>';
//     while ($row = mysqli_fetch_array($q1)) {
//       echo '
//       <tr>
//         <td>'.$row["nombre"].'</td>
//         <td>'.$row["telefono"].'</td>
//         <td>'.$row["email"].'</td>
//         <td>'.$row["ocupacion"].'</td>
//         <td>'.$row["estado"].'</td>
//         <td>'.$row["CP"].'</td>
//         <td>'.$row["InformacionPersonal"].'</td>
//         <td>'.$row["estatus"].'</td>
//         <td>'.$row["nota"].'</td>
//         <td>'.$row["fecha"].'</td>
//         <td></td>
//       </tr>       
//       ';
//     }
//     echo ' </tbody></table>';
//   }

?>          
            </div>
        </div>
    </div>

    


    <script >

        function descargar(){
            window.location="./exportar.php?d="+$('#month').val()+"&y="+$('#year').val();
        }
        function downloadCSV(csv, filename) {
            var csvFile;
            var downloadLink;

            // CSV file
            csv="\ufeff"+csv;
            csvFile = new Blob([csv], {
                type: "text/csv"
            });

            // Download link
            downloadLink = document.createElement("a");

            // File name
            downloadLink.download = filename;

            // Create a link to the file
            downloadLink.href = window.URL.createObjectURL(csvFile);

            // Hide download link
            downloadLink.style.display = "none";

            // Add the link to DOM
            document.body.appendChild(downloadLink);

            // Click download link
            downloadLink.click();
        }
          function exportTableToCSV(filename) {
            var csv = [];
            var rows = document.querySelectorAll("#SolicitudesTabla tr");

            for (var i = 0; i < rows.length; i++) {
                var row = [],
                 cols = rows[i].querySelectorAll("td:not(.accion), th:not(.accion)");

                for (var j = 0; j < cols.length; j++)
                    row.push(cols[j].innerText);

                csv.push(row.join(","));
            }

            // Download CSV file
            downloadCSV(csv.join("\n"), filename);
        }

        <?php
if (isset($_GET["d"]) && isset($_GET["y"])) 
{
    echo 'exportTableToCSV("BaseDeDatosSolicitudes.csv")';
}
?>
    </script>
    </div>
    <footer>
		<a href="https://www.henkel.mx/privacy-statement?pageID=560414" target="_blank">AVISO DE PRIVACIDAD</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="https://www.henkel.mx/" target="_blank">HENKEL</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="https://www.fester.com.mx/es.html" target="_blank">FESTER</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Desarrollo web <a href="https://doos.com.mx/" target="_blank">DOOS CG&D</a>
    </footer>
</body>

</html>