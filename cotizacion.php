<!DOCTYPE html>
<html><head>
    <title>Cotizador Fester</title>
    <meta charset="UTF-8">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;900&display=swap" rel="stylesheet">


    <link href="css/styles.css" rel="stylesheet">

    <!-- JQUERY only -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
 </head>

<body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="https://www.fester.com.mx" target="_blank"><img src="images/logo.png" alt="Fester" class="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link" href="cotizador.php">INICIO</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="cotizador.php">COTIZADOR</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="https://www.fester.com.mx" target="_blank">FESTER MÉXICO</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="https://www.fester.com.mx/es/servicio-y-apoyo/distribuidores.html" target="_blank">DISTRIBUIDORES FESTER</a>
                    </li>
                  </ul>
            </div>
          </div>
        </nav>

    <section class="section2">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 ventana my-5" style=" padding: 16px; ">
                    <div id="cotizacion" style=" overflow-y: auto; overflow-x: hidden;">


                    </div>

                </div>
                <!-- <div class="col-1 col-md-1"></div>
                <div class="col-12 col-md-4 ingeniero d-flex align-items-end text-center">

                </div> -->
            </div>
        </div>
    </section>

    <section class="container section3 py-5">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
    </section>

    <footer>
        <div class="row align-items-end">
            <div class="col-md-10 col-10">
                <a href="https://www.fester.com.mx/es/meta/footer-nav/condiciones.html" target="_blank">Condiciones de Uso</a> |
                <a href="https://www.fester.com.mx/es/meta/footer-nav/creditos.html" target="_blank">CrÃ©ditos</a> |
                <a href="https://www.henkel.mx/declaracion-de-proteccion-de-datos" target="_blank">Aviso de Privacidad</a> |
                <a href="https://www.henkel.mx/cookies?pageID=560528" target="_blank">Cookies</a> |
                <a href="https://www.henkel.mx/impresion?pageID=560414" target="_blank">Imprenta</a> |
                <a href="https://www.henkel.mx/" target="_blank">Henkel</a> |
                <a href="https://www.fester.com.mx" target="_blank">Fester México</a></div>
            <div class="col-md-2 col-2 text-center"><a href="https://www.henkel.mx/" target="_blank"><img src="images/henkel.svg" width="40" alt="Henkel"></a></div>
        </div>
    </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>

  <script>
    var sistemas={
    "Techos":{
            Concreto:{
                sistemas:[
                    {
                        nombre:"SISTEMA FESTER A / Sistema acrílico 3 años garantía",
                        garantia:3,
                        productos:[
                            {
                                descripcion:"FESTER ACRITON SELLADOR ",
                                rendimiento:"5.00 m2/L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*5)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*5)/4)
                                    valores.litro ="N/A"
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER ACRITON RESANADOR ACRÍLICO",
                                rendimiento:"0.80 L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*.8)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*.8)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)*.8)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment ="El consumo de este producto dependera de la condicion de superficie"
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER ACRIFLEX",
                                rendimiento:"100.00 m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo =Math.ceil((parseFloat(mt3)/100))
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER A 3 AÑOS",
                                rendimiento:"1.50 l/m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*1.5)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)/1.5)/4)
                                    valores.litro ="N/A"   
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                        ]
                    },
                    {
                        nombre:"SISTEMA FESTER A / Sistema acrílico 5 años garantía",
                        garantia:5,
                        productos:[
                            {
                                descripcion:"FESTER ACRITON SELLADOR ",
                                rendimiento:"5.00 m2/L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*5)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*5)/4)
                                    valores.litro ="N/A"
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER ACRITON RESANADOR ACRÍLICO",
                                rendimiento:"0.80 L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*.8)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*.8)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)*.8)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment ="El consumo de este producto dependera de la condicion de superficie"
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER ACRIFLEX",
                                rendimiento:"100.00 m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo =Math.ceil((parseFloat(mt3)/100))
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER A  5 AÑOS",
                                rendimiento:"1.50 l/m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*1.5)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*1.5)/4)
                                    valores.litro ="N/A"   
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            
                        ]
                    },
                    {
                        nombre:"SISTEMA FESTER A / Sistema acrílico 7 años garantía",
                        garantia:7,
                        productos:[
                            {
                                descripcion:"FESTER ACRITON SELLADOR ",
                                rendimiento:"5.00 m2/L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*5)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*5)/4)
                                    valores.litro ="N/A"
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER ACRITON RESANADOR ACRÍLICO",
                                rendimiento:"0.80 L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*.8)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*.8)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)*.8)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment ="El consumo de este producto dependera de la condicion de superficie"
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER ACRIFLEX",
                                rendimiento:"100.00 m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo =Math.ceil((parseFloat(mt3)/100))
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER A  7 AÑOS",
                                rendimiento:"1.50 l/m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*1.5)/19)
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"   
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            
                        ]
                    },
                    {
                        nombre:"SISTEMA ACRITON  / Sistema acrílico 4 años garantía",
                        garantia:4,
                        productos:[
                            {
                                descripcion:"FESTER ACRITON SELLADOR ",
                                rendimiento:"5.00 m2/L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*5)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*5)/4)
                                    valores.litro ="N/A"
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER ACRITON RESANADOR ACRÍLICO",
                                rendimiento:"0.80 L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*.8)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*.8)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)*.8)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment ="El consumo de este producto dependera de la condicion de superficie"
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER ACRIFLEX",
                                rendimiento:"100.00 m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo =Math.ceil((parseFloat(mt3)/100))
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER ACRITON  4 AÑOS ",
                                rendimiento:"1.50 l/m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*1.5)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*1.5)/4)
                                    valores.litro ="N/A"   
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            
                        ]
                    },
                    {
                        nombre:"SISTEMA ACRITON  / Sistema acrílico 6 años garantía",
                        garantia:6,
                        productos:[
                            {
                                descripcion:"FESTER ACRITON SELLADOR ",
                                rendimiento:"5.00 m2/L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*5)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*5)/4)
                                    valores.litro ="N/A"
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER ACRITON RESANADOR ACRÍLICO",
                                rendimiento:"0.80 L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*.8)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*.8)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)*.8)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment ="El consumo de este producto dependera de la condicion de superficie"
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER ACRIFLEX",
                                rendimiento:"100.00 m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo =Math.ceil((parseFloat(mt3)/100))
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER ACRITON 6 AÑOS ",
                                rendimiento:"1.50 l/m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*1.5)/19)
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"   
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            
                        ]
                    },
                    {
                        nombre:"SISTEMA ACRITON  / Sistema acrílico 8 años garantía",
                        garantia:8,
                        productos:[
                            {
                                descripcion:"FESTER ACRITON SELLADOR ",
                                rendimiento:"5.00 m2/L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*5)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*5)/4)
                                    valores.litro ="N/A"
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER ACRITON RESANADOR ACRÍLICO",
                                rendimiento:"0.80 L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*.8)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*.8)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)*.8)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment ="El consumo de este producto dependera de la condicion de superficie"
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER ACRIFLEX",
                                rendimiento:"100.00 m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo =Math.ceil((parseFloat(mt3)/100))
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER ACRITON 8 AÑOS ",
                                rendimiento:"1.50 l/m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*1.5)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*1.5)/4)
                                    valores.litro ="N/A"   
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            
                        ]
                    },
                    {
                        nombre:"SISTEMA ACRITON  / Sistema acrílico 12 años garantía",
                        garantia:12,
                        productos:[
                            {
                                descripcion:"FESTER ACRITON SELLADOR ",
                                rendimiento:"5.00 m2/L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*5)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*5)/4)
                                    valores.litro ="N/A"
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER ACRITON RESANADOR ACRÍLICO",
                                rendimiento:"0.80 L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*.8)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*.8)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)*.8)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment ="El consumo de este producto dependera de la condicion de superficie"
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER ACRIFLEX",
                                rendimiento:"100.00 m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo =Math.ceil((parseFloat(mt3)/100))
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER ACRITON 12 AÑOS ",
                                rendimiento:"1.50 l/m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*2)/19)
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"   
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            
                        ]
                    },
                    {
                        nombre:"Base agua",
                        garantia:1,
                        productos:[
                            {
                                descripcion:"FESTER HIDROPRIMER PLUS WB",
                                rendimiento:"35.00 m2/L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)/35)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)/35)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)/35)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER PLASTIC CEMENT",
                                rendimiento:"0.80 L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*.8)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*.8)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)*.8)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER IMPERFLEX",
                                rendimiento:"100.00	m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo =Math.ceil(parseFloat(mt3)/100)
                                    valores.saco ="N/A"
                                    valores.coment ="El consumo de este producto dependera de la condicion de superficie"
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER IMPERFEST E",
                                rendimiento:"2.00 l/m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*2)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*2)/4)
                                    valores.litro ="N/A"   
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER IMPERFEST A TERRACOTA",
                                rendimiento:"3.00 m2/L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil(parseFloat(mt3*3)/19)
                                    valores.galon =Math.ceil(parseFloat(mt3*3)/4)
                                    // valores.galon =Math.ceil(parseFloat(mt3)*3)/4)
                                    valores.litro ="N/A"   
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            
                        ]
                    },
                    {
                        nombre:"Base agua",
                        garantia:2,
                        productos:[
                            {
                                descripcion:"FESTER HIDROPRIMER PLUS WB",
                                rendimiento:"35.00 m2/L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)/35)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)/35)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)/35)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER PLASTIC CEMENT",
                                rendimiento:"0.80 L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*.08)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*.08)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)*.08)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTERFLEX",
                                rendimiento:"100.00	m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo =Math.ceil(parseFloat(mt3)/100)
                                    valores.saco ="N/A"
                                    valores.coment ="El consumo de este producto dependera de la condicion de superficie"
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER MICROLASTIC",
                                rendimiento:"2.00 l/m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*2)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*2)/4)
                                    valores.litro ="N/A"   
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER IMPERFEST A TERRACOTA",
                                rendimiento:"3.00 m2/L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil(parseFloat(mt3*3)/19)
                                    valores.galon =Math.ceil(parseFloat(mt3*3)/4)
                                    // valores.galon =Math.ceil(parseFloat(mt3)*3)/4)
                                    valores.litro ="N/A"   
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            
                        ]
                    },
                    {
                        nombre:"Base agua",
                        garantia:3,
                        productos:[
                            {
                                descripcion:"FESTER HIDROPRIMER PLUS WB",
                                rendimiento:"35.00 m2/L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)/35)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)/35)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)/35)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER PLASTIC CEMENT",
                                rendimiento:"0.80 L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*.8)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*.8)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)*.8)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTERFLEX",
                                rendimiento:"100.00	m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo =Math.ceil(parseFloat(mt3)/100)
                                    valores.saco ="N/A"
                                    valores.coment ="El consumo de este producto dependera de la condicion de superficie"
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER MICROSEAL NO.2F ",
                                rendimiento:"2.00 l/m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*2)/19)
                                    valores.galon ="N/A" 
                                    valores.litro ="N/A"   
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTERBLANC TERRACOTA",
                                rendimiento:"3.00 m2/L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil(parseFloat(mt3*3)/19)
                                    valores.galon =Math.ceil(parseFloat(mt3*3)/4)
                                    // valores.galon =Math.ceil(parseFloat(mt3)*3)/4)
                                    valores.litro ="N/A"   
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            
                        ]
                    },
                    {
                        nombre:"Base Solvente",
                        garantia:5,
                        productos:[
                            {
                                descripcion:"FESTER HIDROPRIMER PLUS WB",
                                rendimiento:"35.00 m2/L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)/35)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)/35)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)/35)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER PLASTIC CEMENT",
                                rendimiento:"0.80 L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*.8)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*.8)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)*.8)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTERFLEX",
                                rendimiento:"100.00	m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo =Math.ceil(parseFloat(mt3)/100)
                                    valores.saco ="N/A"
                                    valores.coment ="El consumo de este producto dependera de la condicion de superficie"
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER VAPORTITE 550",
                                rendimiento:"2.00 l/m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*2)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*2)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)*2)/1)      
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTERBLANC TERRACOTA",
                                rendimiento:"3.00 m2/L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil(parseFloat(mt3*3)/19)
                                    valores.galon =Math.ceil(parseFloat(mt3*3)/4)
                                    // valores.galon =Math.ceil(parseFloat(mt3)*3)/4)
                                    valores.litro ="N/A"   
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            
                        ]
                    },]
                },
            Lamina:{ 
                sistemas:[
                    {
                        nombre:"SISTEMA FESTER A / Sistema acrílico 3 años garantía",
                        garantia:3,
                        productos:[
                            {
                                descripcion:"FESTER ACRITON SELLADOR ",
                                rendimiento:"5.00 m2/L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*5)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*5)/4)
                                    valores.litro ="N/A"
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER ACRITON RESANADOR ACRÍLICO",
                                rendimiento:"0.80 L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*.8)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*.8)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)*.8)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment ="El consumo de este producto dependera de la condicion de superficie"
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER ACRIFLEX",
                                rendimiento:"100.00 m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo =Math.ceil((parseFloat(mt3)/100))
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER A 3 AÑOS",
                                rendimiento:"1.50 l/m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*1.5)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)/1.5)/4)
                                    valores.litro ="N/A"   
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER FT201 BLANCO",
                                rendimiento:"variable L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"  
                                    valores.galon ="N/A"  
                                    valores.litro ="N/A"   
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment ="Dependerá del tipo de fisuras o juntas que existan en el elemento"
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER ESPUMA EXPANSIVA",
                                rendimiento:"variable L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"  
                                    valores.galon ="N/A"  
                                    valores.litro ="N/A"   
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment ="Dependerá del tipo de fisuras o juntas que existan en el elemento"
                                    return valores;
                                }
                            },
                        ]
                    },
                    {
                        nombre:"SISTEMA FESTER A / Sistema acrílico 5 años garantía",
                        garantia:5,
                        productos:[
                            {
                                descripcion:"FESTER ACRITON SELLADOR ",
                                rendimiento:"5.00 m2/L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*5)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*5)/4)
                                    valores.litro ="N/A"
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER ACRITON RESANADOR ACRÍLICO",
                                rendimiento:"0.80 L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*.8)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*.8)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)*.8)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment ="El consumo de este producto dependera de la condicion de superficie"
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER ACRIFLEX",
                                rendimiento:"100.00 m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo =Math.ceil((parseFloat(mt3)/100))
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER A 5 AÑOS",
                                rendimiento:"1.50 l/m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*1.5)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)/1.5)/4)
                                    valores.litro ="N/A"   
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER FT201 BLANCO",
                                rendimiento:"variable L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"  
                                    valores.galon ="N/A"  
                                    valores.litro ="N/A"   
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment ="Dependerá del tipo de fisuras o juntas que existan en el elemento"
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER ESPUMA EXPANSIVA",
                                rendimiento:"variable L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"  
                                    valores.galon ="N/A"  
                                    valores.litro ="N/A"   
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment ="Dependerá del tipo de fisuras o juntas que existan en el elemento"
                                    return valores;
                                }
                            },
                        ]
                    },
                    {
                        nombre:"SISTEMA FESTER A / Sistema acrílico 7 años garantía",
                        garantia:7,
                        productos:[
                            {
                                descripcion:"FESTER ACRITON SELLADOR ",
                                rendimiento:"5.00 m2/L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*5)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*5)/4)
                                    valores.litro ="N/A"
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER ACRITON RESANADOR ACRÍLICO",
                                rendimiento:"0.80 L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*.8)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*.8)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)*.8)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment ="El consumo de este producto dependera de la condicion de superficie"
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER ACRIFLEX",
                                rendimiento:"100.00 m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo =Math.ceil((parseFloat(mt3)/100))
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER A 7 AÑOS",
                                rendimiento:"1.50 l/m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*1.5)/19)
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"   
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER FT201 BLANCO",
                                rendimiento:"variable L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"  
                                    valores.galon ="N/A"  
                                    valores.litro ="N/A"   
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment ="Dependerá del tipo de fisuras o juntas que existan en el elemento"
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER ESPUMA EXPANSIVA",
                                rendimiento:"variable L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"  
                                    valores.galon ="N/A"  
                                    valores.litro ="N/A"   
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment ="Dependerá del tipo de fisuras o juntas que existan en el elemento"
                                    return valores;
                                }
                            },
                        ]
                    },
                    {
                        nombre:"SISTEMA ACRITON  / Sistema acrílico 4 años garantía",
                        garantia:4,
                        productos:[
                            {
                                descripcion:"FESTER ACRITON SELLADOR ",
                                rendimiento:"5.00 m2/L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*5)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*5)/4)
                                    valores.litro ="N/A"
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER ACRITON RESANADOR ACRÍLICO",
                                rendimiento:"0.80 L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*.8)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*.8)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)*.8)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment ="El consumo de este producto dependera de la condicion de superficie"
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER ACRIFLEX",
                                rendimiento:"100.00 m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo =Math.ceil((parseFloat(mt3)/100))
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER ACRITON  4 AÑOS ",
                                rendimiento:"1.50 l/m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*1.5)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*1.5)/4)
                                    valores.litro ="N/A"   
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER FT201 BLANCO",
                                rendimiento:"variable L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"  
                                    valores.galon ="N/A"  
                                    valores.litro ="N/A"   
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment ="Dependerá del tipo de fisuras o juntas que existan en el elemento"
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER ESPUMA EXPANSIVA",
                                rendimiento:"variable L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"  
                                    valores.galon ="N/A"  
                                    valores.litro ="N/A"   
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment ="Dependerá del tipo de fisuras o juntas que existan en el elemento"
                                    return valores;
                                }
                            },
                        ]
                    },
                    {
                        nombre:"SISTEMA ACRITON  / Sistema acrílico 8 años garantía",
                        garantia:8,
                        productos:[
                            {
                                descripcion:"FESTER ACRITON SELLADOR ",
                                rendimiento:"5.00 m2/L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*5)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*5)/4)
                                    valores.litro ="N/A"
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER ACRITON RESANADOR ACRÍLICO",
                                rendimiento:"0.80 L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*.8)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*.8)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)*.8)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment ="El consumo de este producto dependera de la condicion de superficie"
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER ACRIFLEX",
                                rendimiento:"100.00 m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo =Math.ceil((parseFloat(mt3)/100))
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER ACRITON 8 AÑOS ",
                                rendimiento:"1.50 l/m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*1.5)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*1.5)/4)
                                    valores.litro ="N/A"   
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER FT201 BLANCO",
                                rendimiento:"variable L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"  
                                    valores.galon ="N/A"  
                                    valores.litro ="N/A"   
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment ="Dependerá del tipo de fisuras o juntas que existan en el elemento"
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER ESPUMA EXPANSIVA",
                                rendimiento:"variable L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"  
                                    valores.galon ="N/A"  
                                    valores.litro ="N/A"   
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment ="Dependerá del tipo de fisuras o juntas que existan en el elemento"
                                    return valores;
                                }
                            },
                        ]
                    },
                    {
                        nombre:"SISTEMA ACRITON  / Sistema acrílico 12 años garantía",
                        garantia:12,
                        productos:[
                            {
                                descripcion:"FESTER ACRITON SELLADOR ",
                                rendimiento:"5.00 m2/L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*5)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*5)/4)
                                    valores.litro ="N/A"
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER ACRITON RESANADOR ACRÍLICO",
                                rendimiento:"0.80 L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*.8)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*.8)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)*.8)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment ="El consumo de este producto dependera de la condicion de superficie"
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER ACRIFLEX",
                                rendimiento:"100.00 m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo =Math.ceil((parseFloat(mt3)/100))
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER ACRITON 12 AÑOS ",
                                rendimiento:"1.50 l/m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*2)/19)
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"   
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER FT201 BLANCO",
                                rendimiento:"variable L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"  
                                    valores.galon ="N/A"  
                                    valores.litro ="N/A"   
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment ="Dependerá del tipo de fisuras o juntas que existan en el elemento"
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER ESPUMA EXPANSIVA",
                                rendimiento:"variable L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"  
                                    valores.galon ="N/A"  
                                    valores.litro ="N/A"   
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment ="Dependerá del tipo de fisuras o juntas que existan en el elemento"
                                    return valores;
                                }
                            },
                        ]
                    },
                    {
                        nombre:"Base agua",
                        garantia:3,
                        productos:[
                            {
                                descripcion:"FESTER HIDROPRIMER PLUS WB",
                                rendimiento:"35.00 m2/L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)/35)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)/35)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)/35)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER PLASTIC CEMENT",
                                rendimiento:"0.80 L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*.8)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*.8)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)*.8)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTERFLEX",
                                rendimiento:"100.00	m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo =Math.ceil(parseFloat(mt3)/100)
                                    valores.saco ="N/A"
                                    valores.coment ="El consumo de este producto dependera de la condicion de superficie"
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER MICROSEAL NO.2F  ",
                                rendimiento:"2.00 l/m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*2)/19)
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"   
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTERBLANC TERRACOTA",
                                rendimiento:"3.00 m2/L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil(parseFloat(mt3*3)/19)
                                    valores.galon =Math.ceil(parseFloat(mt3*3)/4)
                                    // valores.galon =Math.ceil(parseFloat(mt3)*3)/4)
                                    valores.litro ="N/A"   
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            
                        ]
                    },
                    {
                        nombre:"Base Solvente",
                        garantia:5,
                        productos:[
                            {
                                descripcion:"FESTER HIDROPRIMER PLUS WB",
                                rendimiento:"35.00 m2/L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)/35)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)/35)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)/35)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER PLASTIC CEMENT",
                                rendimiento:"0.80 L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*.8)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*.8)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)*.8)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTERFLEX",
                                rendimiento:"100.00	m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo =Math.ceil(parseFloat(mt3)/100)
                                    valores.saco ="N/A"
                                    valores.coment ="El consumo de este producto dependera de la condicion de superficie"
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER VAPORTITE 550",
                                rendimiento:"2.00 l/m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*2)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*2)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)*2)/1)      
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTERBLANC TERRACOTA",
                                rendimiento:"3.00 m2/L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil(parseFloat(mt3*3)/19)
                                    valores.galon =Math.ceil(parseFloat(mt3*3)/4)
                                    // valores.galon =Math.ceil(parseFloat(mt3)*3)/4)
                                    valores.litro ="N/A"   
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            
                        ]
                    },
                    ]
                }
        
    },
    "Sistemas Prefabricados":{
            Mip:{
                sistemas:[
                    {
                        nombre:"mip 3.5  garantia 5 años",
                        garantia:5,
                        productos:[
                            {
                                descripcion:"FESTER HIDROPRIMER PLUS WB",
                                rendimiento:"6 m2/L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)/6)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)/6)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)/6)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER PLASTIC CEMENT",
                                rendimiento:"0.80 L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)/.8)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)/.8)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)/.8)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTERMIP SBS FV 3.5 GRAVILLA BLANCA ",
                                rendimiento:"8.7 m2	rollo 1x10m",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo =Math.ceil((parseFloat(mt3)/8.7))
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            
                        ]
                    },
                    {
                        nombre:"mip 3.5  garantia 7 años",
                        garantia:7,
                        productos:[
                            {
                                descripcion:"FESTER HIDROPRIMER PLUS WB",
                                rendimiento:"6 m2/L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)/6)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)/6)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)/6)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER PLASTIC CEMENT",
                                rendimiento:"0.80 L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)/.8)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)/.8)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)/.8)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTERMIP 7 SBS PS 3.5 GRAVILLA ROJA",
                                rendimiento:"8.7 m2	rollo 1x10m",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo =Math.ceil((parseFloat(mt3)/8.7))
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            
                        ]
                    },
                    {
                        nombre:"Mip 4.0 8 años",
                        garantia:8,
                        productos:[
                            {
                                descripcion:"FESTER HIDROPRIMER PLUS WB",
                                rendimiento:"6 m2/L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)/6)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)/6)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)/6)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER PLASTIC CEMENT",
                                rendimiento:"0.80 L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)/.8)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)/.8)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)/.8)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTERMIP 8 SBS PS 4.0 GRAVILLA BLANCA",
                                rendimiento:"8.7 m2	rollo 1x10m",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo =Math.ceil((parseFloat(mt3)/8.7))
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            
                        ]
                    },
                    {
                        nombre:"mip 4.0  garantia 10 años",
                        garantia:10,
                        productos:[
                            {
                                descripcion:"FESTER HIDROPRIMER PLUS WB",
                                rendimiento:"6 m2/L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)/6)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)/6)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)/6)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER PLASTIC CEMENT",
                                rendimiento:"0.80 L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)/.8)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)/.8)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)/.8)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTERMIP 10 APP PS 4.0 GRAVILLA BLANCA",
                                rendimiento:"8.7 m2	rollo 1x10m",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo =Math.ceil((parseFloat(mt3)/8.7))
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            
                        ]
                    },
                    {
                        nombre:"mip 4.5  garantia 12 años",
                        garantia:12,
                        productos:[
                            {
                                descripcion:"FESTER HIDROPRIMER PLUS WB",
                                rendimiento:"6 m2/L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)/6)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)/6)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)/6)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER PLASTIC CEMENT",
                                rendimiento:"0.80 L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)/.8)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)/.8)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)/.8)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTERMIP 12 SBS PS 4.5 GRAVILLA ROJA",
                                rendimiento:"8.7 m2	rollo 1x10m",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo =Math.ceil((parseFloat(mt3)/8.7))
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            
                        ]
                    },
                    {
                        nombre:"mip 4.5  garantia 12 años",
                        garantia:12,
                        productos:[
                            {
                                descripcion:"FESTER HIDROPRIMER PLUS WB",
                                rendimiento:"6 m2/L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)/6)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)/6)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)/6)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER PLASTIC CEMENT",
                                rendimiento:"0.80 L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)/.8)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)/.8)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)/.8)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTERMIP 15 APP PS 4.5 GRAVILLA BLANCA",
                                rendimiento:"8.7 m2	rollo 1x10m",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo =Math.ceil((parseFloat(mt3)/8.7))
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            
                        ]
                    },
                    {
                        nombre:"mip garden extensivo",
                        garantia:99,
                        productos:[
                            {
                                descripcion:"FESTER HIDROPRIMER PLUS WB",
                                rendimiento:"6 m2/L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)/6)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)/6)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)/6)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER PLASTIC CEMENT",
                                rendimiento:"0.80 L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)/.8)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)/.8)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)/.8)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTERMIP SBS PS 4.0 GARDEN",
                                rendimiento:"8.80 rollo 1mx10m",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo =Math.ceil((parseFloat(mt3)/8.8))
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER POLIETILENO NEGRO",
                                rendimiento:"198.00	rollo 6mx33m",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo =Math.ceil((parseFloat(mt3)/198))
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTERMIP SBS PS 4.0 GARDEN",
                                rendimiento:"48.80	Rollo 2.44m X 20 m",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo =Math.ceil((parseFloat(mt3)/48.8))
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            
                        ]
                    },
                    {
                        nombre:"mip 3.5  garantia 5 años",
                        garantia:5,
                        productos:[
                            {
                                descripcion:"FESTER HIDROPRIMER PLUS WB",
                                rendimiento:"6 m2/L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)/6)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)/6)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)/6)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER PLASTIC CEMENT",
                                rendimiento:"0.80 L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)/.8)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)/.8)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)/.8)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTERMIP SBS PS 4.0 GARDEN",
                                rendimiento:"8.80 rollo 1mx10m",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo =Math.ceil((parseFloat(mt3)/8.8))
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER DRENANTE",
                                rendimiento:"48.80 Rollo 2.44m X 20m",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo =Math.ceil((parseFloat(mt3)/48.8))
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER POLIETILENO NEGRO",
                                rendimiento:"198.00	rollo 6mx33m",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo =Math.ceil((parseFloat(mt3)/198))
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER FILTRO",
                                rendimiento:"48.80 Rollo 2.44m X 20m",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo =Math.ceil((parseFloat(mt3)/48.8))
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            
                            
                        ]
                    },
                ]
            }
    },
    "Charolas de baño, cocinas y cuartos de lavado":{
            Concreto:{
                sistemas:[
                    {
                        nombre:"CR 66",
                        garantia:5,
                        productos:[
                            {
                                descripcion:"FESTER CR 66 GRIS ",
                                rendimiento:"2.00 L/m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo ="N/A"
                                    valores.saco =Math.ceil((parseFloat(mt3)*2)/21)
                                    valores.coment ="Dependerá de la superficie rugosa que exista"
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER FT201 BLANCO",
                                rendimiento:"Variable ml",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER REVOFLEX ",
                                rendimiento:"100.00 m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo =Math.ceil((parseFloat(mt3)/100))
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                        ]
                    },
                ]
            }
    },
    "Balcones y terrazas":{
            Concreto:{
                sistemas:[
                    {
                        nombre:"CR 66",
                        garantia:5,
                        productos:[
                            {
                                descripcion:"FESTER CR 66 GRIS ",
                                rendimiento:"2.50 L/m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo ="N/A"
                                    valores.saco =Math.ceil((parseFloat(mt3)*2.5)/21)
                                    valores.coment ="Dependerá de la superficie rugosa que exista"
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER CM-201 REPARADOR ESTRUCTURAL",
                                rendimiento:"14.00 L/saco",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment ="Dependerá de los cm3 a reparar"
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER REVOFLEX ",
                                rendimiento:"100.00 m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo =Math.ceil((parseFloat(mt3)/100))
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER FT201 BLANCO",
                                rendimiento:"Variable ml",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            
                        ]
                    },
                ]
            }
    },
    "Tanque de agua":{
            Concreto:{
                sistemas:[
                    {
                        nombre:"CR 66",
                        garantia:5,
                        productos:[
                            {
                                descripcion:"FESTER CR 66 GRIS ",
                                rendimiento:"2.00 L/m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo ="N/A"
                                    valores.saco =Math.ceil((parseFloat(mt3)*2)/21)
                                    valores.coment ="Dependerá de la superficie rugosa que exista"
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER CM-201 REPARADOR ESTRUCTURAL",
                                rendimiento:"14.00 L/saco",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment ="Dependerá de los cm3 a reparar"
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER REVOFLEX ",
                                rendimiento:"100.00 m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo =Math.ceil((parseFloat(mt3))/100)
                                    valores.saco ="N/A"
                                    valores.coment ="Dependerá de los cm3 a reparar"
                                    return valores;
                                }
                            },
                    
                        ]
                    },
                    {
                        nombre:"FESTER CR NANOTECH 99+",
                        garantia:99,
                        productos:[
                            {
                                descripcion:"FESTER CR-NANOTECH-99+ GRIS",
                                rendimiento:"0.75 L/m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*.75)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*.75)/4)
                                    valores.litro ="N/A"
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment ="Dependerá de la superficie rugosa que exista"
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER CX-01",
                                rendimiento:"0.6 L/kg",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*.6)/25)
                                    valores.galon =Math.ceil((parseFloat(mt3)*.6)/5)
                                    valores.litro =Math.ceil((parseFloat(mt3)*.6)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                    
                        ]
                    },
                ]
            }
    },
    "Cimientos":{
            Asfalto:{
                sistemas:[
                    {
                        nombre:"Base agua / Sistema asfáltico 2 años garantía",
                        garantia:2,
                        productos:[
                            {
                                descripcion:"FESTER HIDROPRIMER PLUS WB",
                                rendimiento:"35.00 m2/L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)/35)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)/35)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)/35)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER POLIETILENO NEGRO",
                                rendimiento:"198.00	m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo =Math.ceil((parseFloat(mt3))/198)
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER MICROLASTIC",
                                rendimiento:"1.50 l/m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*1.5)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*1.5)/4)
                                    valores.litro ="N/A"
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTERBLANC TERRACOTA",
                                rendimiento:"3.00 m2/L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*3)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*3)/4)
                                    valores.litro ="N/A"
                                    valores.rollo =
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"Arena de construcción cernida",
                                rendimiento:"variable kg/m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment ="De acuerdo a los requerimientos de la obra"
                                    return valores;
                                }
                            },
                        ]
                    },
                    {
                        nombre:"Base agua / Sistema asfáltico 3 años garantía",
                        garantia:3,
                        productos:[
                            {
                                descripcion:"FESTER HIDROPRIMER PLUS WB",
                                rendimiento:"35.00 m2/L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)/35)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)/35)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)/35)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTERFELT NO. 15",
                                rendimiento:"36.00	m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo =Math.ceil((parseFloat(mt3))/36)
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER MICROSEAL NO.2F ",
                                rendimiento:"2.00 l/m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*2)/19)
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"Arena de construcción cernida",
                                rendimiento:"variable kg/m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment ="De acuerdo a los requerimientos de la obra"
                                    return valores;
                                }
                            },
                        ]
                    },
                    {
                        nombre:"Base solvente  / Sistema asfáltico 5 años garantía",
                        garantia:5,
                        productos:[
                            {
                                descripcion:"FESTER HIDROPRIMER PLUS WB",
                                rendimiento:"35.00 m2/L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)/35)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)/35)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)/35)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTERFELT NO. 15",
                                rendimiento:"36.00	m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo =Math.ceil((parseFloat(mt3))/36)
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER VAPORTITE 550",
                                rendimiento:"1.50 l/m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*1.5)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*1.5)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)*1.5)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"Arena de construcción cernida",
                                rendimiento:"variable kg/m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment ="De acuerdo a los requerimientos de la obra"
                                    return valores;
                                }
                            },
                        ]
                    },
                ]
            }
    },
    "Muros":{
            Asfalto:{
                sistemas:[
                    {
                        nombre:"Base agua   / Sistema asfáltico 2 años garantía",
                        garantia:2,
                        productos:[
                            {
                                descripcion:"FESTER HIDROPRIMER PLUS WB",
                                rendimiento:"35.00 m2/L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)/35)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)/35)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)/35)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER PLASTIC CEMENT",
                                rendimiento:"0.80 L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*.8)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*.8)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)*.8)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER MICROLASTIC",
                                rendimiento:"1.50 l/m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*1.5)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*1.5)/4)
                                    valores.litro ="N/A"
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTERBLANC TERRACOTA",
                                rendimiento:"3.00 m2/L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*3)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*3)/4)
                                    valores.litro ="N/A"
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                        ]
                    },
                    {
                        nombre:"Base solvente  / Sistema asfáltico 5 años garantía",
                        garantia:5,
                        productos:[
                            {
                                descripcion:"FESTER HIDROPRIMER PLUS WB",
                                rendimiento:"35.00 m2/L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)/35)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)/35)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)/35)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER PLASTIC CEMENT",
                                rendimiento:"0.80 L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*.8)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*.8)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)*.8)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER VAPORTITE 550",
                                rendimiento:"1.50 l/m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*1.5)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*1.5)/4)
                                    valores.litro =Math.ceil((parseFloat(mt3)*1.5)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTERBLANC TERRACOTA",
                                rendimiento:"3.00 m2/L",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*3)/19)
                                    valores.galon =Math.ceil((parseFloat(mt3)*3)/4)
                                    valores.litro ="N/A"
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment =""
                                    return valores;
                                }
                            },
                        ]
                    },
                ]
            },
            Mamposteria:{
                sistemas:[
                    {
                        nombre:"CR 65 / Sistema cementicio 2 años garantía",
                        garantia:2,
                        productos:[
                            {
                                descripcion:"FESTER CR 65 GRIS",
                                rendimiento:"3.00 L/m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo ="N/A"
                                    valores.saco =Math.ceil((parseFloat(mt3)*3)/17.18)
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER CM-201 REPARADOR ESTRUCTURAL",
                                rendimiento:"14.00 l/saco",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment ="Dependerá de los cm3 a reparar"
                                    return valores;
                                }
                            },
                         
                        ]
                    },
                    {
                        nombre:"CR 66 / Sistema cementicio 5 años garantía",
                        garantia:5,
                        productos:[
                            {
                                descripcion:"FESTER CR 66 GRIS",
                                rendimiento:"2-5.00 L/m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo ="N/A"
                                    valores.saco =Math.ceil((parseFloat(mt3)*2.5)/21)
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER CM-201 REPARADOR ESTRUCTURAL",
                                rendimiento:"14.00 l/saco",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment ="Dependerá de los cm3 a reparar"
                                    return valores;
                                }
                            },
                         
                        ]
                    },
                ]
            },
            Concreto:{
                sistemas:[
                    {
                        nombre:"CR 65 / Sistema cementicio 2 años garantía",
                        garantia:2,
                        productos:[
                            {
                                descripcion:"FESTER CR 65 GRIS",
                                rendimiento:"3.00 L/m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo ="N/A"
                                    valores.saco =Math.ceil((parseFloat(mt3)*3)/17.18)
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER CM-201 REPARADOR ESTRUCTURAL",
                                rendimiento:"14.00 l/saco",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment ="Dependerá de los cm3 a reparar"
                                    return valores;
                                }
                            },
                         
                        ]
                    },
                    {
                        nombre:"CR 66 / Sistema cementicio 5 años garantía",
                        garantia:5,
                        productos:[
                            {
                                descripcion:"FESTER CR 66 GRIS",
                                rendimiento:"2.50 L/m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo ="N/A"
                                    valores.saco =Math.ceil((parseFloat(mt3)*2.5)/21)
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER CM-201 REPARADOR ESTRUCTURAL",
                                rendimiento:"14.00 l/saco",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment ="Dependerá de los cm3 a reparar"
                                    return valores;
                                }
                            },
                         
                        ]
                    },
                    {
                        nombre:"FESTER CR NANOTECH 99+",
                        garantia:99,
                        productos:[
                            {
                                descripcion:"FESTER CR-NANOTECH-99+ GRIS",
                                rendimiento:"0.75 kg/m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*.75)/24)
                                    valores.galon =Math.ceil((parseFloat(mt3)*.75)/4)
                                    valores.litro ="N/A"
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment ="Cubeta 24L"
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER CX-01",
                                rendimiento:"0.6 L/kg",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*.6)/24)
                                    valores.galon =Math.ceil((parseFloat(mt3)*.6)/5)
                                    valores.litro =Math.ceil((parseFloat(mt3)*.6)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment ="Dependerá de los cm3 a reparar"
                                    return valores;
                                }
                            },
                         
                        ]
                    },
                    {
                        nombre:"CR 66 / Sistema cementicio 5 años garantía",
                        garantia:5,
                        productos:[
                            {
                                descripcion:"FESTER CR 66 GRIS",
                                rendimiento:"2.00 L/m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo ="N/A"
                                    valores.saco =Math.ceil((parseFloat(mt3)*2)/21)
                                    valores.coment =""
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER CM-201 REPARADOR ESTRUCTURAL",
                                rendimiento:"14.00 l/saco",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta ="N/A"
                                    valores.galon ="N/A"
                                    valores.litro ="N/A"
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment ="Dependerá de los cm3 a reparar"
                                    return valores;
                                }
                            },
                         
                        ]
                    },
                    {
                        nombre:"FESTER CR NANOTECH 99+",
                        garantia:99,
                        productos:[
                            {
                                descripcion:"FESTER CR-NANOTECH-99+ GRIS",
                                rendimiento:"0.75 kg/m2",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*.75)/24)
                                    valores.galon =Math.ceil((parseFloat(mt3)*.75)/4)
                                    valores.litro ="N/A"
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment ="Cubeta 19L"
                                    return valores;
                                }
                            },
                            {
                                descripcion:"FESTER CX-01",
                                rendimiento:"0.6 L/kg",
                                materialRequerido:function(mt3){
                                    var valores={};
                                    valores.cubeta =Math.ceil((parseFloat(mt3)*.6)/24)
                                    valores.galon =Math.ceil((parseFloat(mt3)*.6)/5)
                                    valores.litro =Math.ceil((parseFloat(mt3)*.6)/1)
                                    valores.rollo ="N/A"
                                    valores.saco ="N/A"
                                    valores.coment ="Dependerá de los cm3 a reparar"
                                    return valores;
                                }
                            },
                         
                        ]
                    },
                ]
            }
            
    }
  };

      var proyecto={};
      var sistemaelegido={};
      function init (){

        proyecto.cliente=getUrlParameter("cliente");
        proyecto.proyecto=getUrlParameter("proyecto");
        proyecto.subproyecto=getUrlParameter("subproyecto");
        proyecto.m3=getUrlParameter("m3");
        proyecto.garantia=getUrlParameter("garantia");
        sistemaelegido= sistemas[proyecto.proyecto][proyecto.subproyecto]
        verCotizacion();
      }

      function getUrlParameter(param){
        var url_string = window.location.href
        var url = new URL(url_string);
        var c = url.searchParams.get(param);
       return c;
      }

      function verCotizacion(){
          for(var i=0;i<sistemaelegido.sistemas.length;i++){
              let s=sistemaelegido.sistemas[i];
            if(s.garantia!=proyecto.garantia){
                continue;
            }
            $('#cotizacion').append('<table id="c'+i+'"  class="table table-striped table-bordered"><tr><th colspan="8">'+s.nombre+'</th></tr><tr><th>Producto</th><th>Rendimiento</th><th>Cubeta</th><th>Galón</th><th>Litro</th><th>Rollo</th><th>Saco</th><th>Comentario</th></tr></table>')
            for(var j=0;j<s.productos.length;j++){
                let p=s.productos[j];
                let mats=p.materialRequerido(proyecto.m3);

                $('#c'+i).append('<tr><td>'+p.descripcion+'</td><td>'+p.rendimiento+'</td><td>'+mats.cubeta+'</td><td>'+mats.galon+'</td><td>'+mats.litro+'</td><td>'+mats.rollo+'</td><td>'+mats.saco+'</td><td>'+mats.coment+'</td></tr>')

            }
          }
      }



      init();

  </script>

</html>