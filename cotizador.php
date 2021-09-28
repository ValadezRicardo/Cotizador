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
                <div class="col-12 col-md-7 ventana my-5">
                    <div id="chat" style="height: 400px; overflow-y: auto; overflow-x: hidden;">
                    
                     <!-- <div class="row py-4">
                        <div class="col-2 col-md-1"><img src="images/logo.png" class="img-fluid" alt="Fester"></div>
                        <div class="col-9 col-md-8 mensaje-fester" style="width: 120px;/* height: 50px; */"><img style=" width: 100px; height: 50px; " src="images/writting.gif"></div>
                    </div> -->
                    <!-- <div class="row py-4 justify-content-md-end">
                        <div class="col-9 col-md-8 mensaje-fester">David Figueroa</div>
                        <div class="col-2 col-md-1"><img src="images/user.svg" class="img-fluid" alt="User"></div>
                    </div>
                    <div class="row pt-4 pb-2">
                        <div class="col-2 col-md-1"><img src="images/logo.png" class="img-fluid" alt="Fester"></div>
                        <div class="col-9 col-md-8 mensaje-fester">Gracias David, Â¿en quÃ© sistema estÃ¡s interesado? Da click en tu opciÃ³n:</div>
                    </div>
                    <div class="row pb-4">
                        <div class="col-2 col-md-1"></div>
                        <div class="col-9 col-md-8"><button type="button" class="btn btn-primary btn-sm">Cimientos</button> <button type="button" class="btn btn-primary btn-sm">Techos</button> <button type="button" class="btn btn-primary btn-sm">Muros</button> <button type="button" class="btn btn-primary btn-sm">Contenedor de agua</button> <button type="button" class="btn btn-primary btn-sm">AtenciÃ³n personalizada</button> </div> 
                    </div>
                    
                    <div class="row py-4 justify-content-md-end">
                        <div class="col-9 col-md-8 mensaje-fester">Cimientos</div>
                        <div class="col-2 col-md-1"><img src="images/user.svg" class="img-fluid" alt="User"></div>
                    </div>
                    <div class="row py-4">
                        <div class="col-2 col-md-1"><img src="images/logo.png" class="img-fluid" alt="Fester"></div>
                        <div class="col-9 col-md-8 mensaje-fester">Â¿CuÃ¡ntos metros cuadrados tiene tu superficie?</div>
                    </div> -->
                    </div>
                    <div class="row">
                        <div class="mb-3" id="divTiping" style="display:none;">
                        <div class="row">
                        <div class="col-2 col-md-1"><img src="images/logo.png" class="img-fluid" alt="Fester"></div>
                        <div class="col-9 col-md-8 mensaje-fester">Fester esta escribiendo<img style="width: 80px;height: 30px;" src="images/writting.gif"></div>
                    </div>
                        <!-- Fester esta escribiendo<img style=" width: 100px; height: 50px; " src="images/writting.gif"> -->
                        </div>
                        <div class="input-group mb-3">
                          <input id="txtRespuesta" type="text" class="form-control" placeholder="ESCRIBE AQUÍ TU RESPUESTA" aria-label="Recipient's username" aria-describedby="button-addon2">
                          <button id="btnRespuesta" onclick="siguientePregunta()" class="btn btn-outline-danger" type="button" id="button-addon2">ENVIAR</button>
                        </div>
                    </div>
                </div>
                <div class="col-1 col-md-1"></div>
                <div class="col-12 col-md-4 ingeniero d-flex align-items-end text-center">
                    <span class="btn-cotizador2">
                        <a href="preguntas.html"><i class="far fa-arrow-alt-circle-right fa-2x"></i> &nbsp;&nbsp;&nbsp; <span class="txt-btn">REINICIAR</span></a>
                    </span>
                </div>
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
                <a href="https://www.fester.com.mx" target="_blank">Fester MÃ©xico</a></div>
            <div class="col-md-2 col-2 text-center"><a href="https://www.henkel.mx/" target="_blank"><img src="images/henkel.svg" width="40" alt="Henkel"></a></div>
        </div>
    </footer>
    

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>

  <script>
  var estado=1;
  var proyecto={};

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

  var proys={
    "Techos":
      {  
      Concreto:{
          garantias:[1,2,3,5,7]
        },
      Lamina:{
        garantias:[3,4,5,6,7,8,12]
        }
      },
    "Muros":{
      Momposteria:{
          garantias:[2,5]
        },
      Concreto:{
        garantias:[2,5,99]
        },
      Asfalto:{
        garantias:[2,5]
        } 
    },
    "Cimientos":{
      Asfalto:{
          garantias:[2,3,5]
        }      
    },
    "Sistemas Prefabricados":{
      Mip:{
          garantias:[5,7,10,12,99]
        }      
    },
    "Tanque de agua":{
      Concreto:{
          garantias:[2,5,99]
        }      
    },
    "Balcones y terrazas":{
      Concreto:{
          garantias:[5]
        }      
    },
    "Charolas de baño, cocinas y cuartos de lavado":{
      Concreto:{
          garantias:[5]
        }      
    }
  };
  


  var opcionesPregunta2=["Cimientos","Techos","Muros","Contenedores", "Requiero informacion personalizada"];
  var opcionesPregunta3=["Mompostería"];

  var preguntas={
    getPregunta1:function(){
                  $("#chat").append('<div class="row py-4"> <div class="col-2 col-md-1"><img src="images/logo.png" class="img-fluid" alt="Fester"></div> <div class="col-9 col-md-8 mensaje-fester">Hola, ¿cuál es tu nombre?</div> </div>')
                },
    setPregunta1:function(){
                  if($('#txtRespuesta').val().trim()=="" || $('#txtRespuesta').val()==null){
                    $("#chat").append('<div class="row py-4"> <div class="col-2 col-md-1"><img src="images/logo.png" class="img-fluid" alt="Fester"></div> <div class="col-9 col-md-8 mensaje-fester">Por favor ingresa un nombre correcto</div> </div>')
                    moveScrollChatToBottom()
                    $('#txtRespuesta').val("");
                    return;
                  }
                  proyecto.clienteNombre=$('#txtRespuesta').val();
                  estado=2;
                  $('#txtRespuesta').val("");
                  $("#chat").append('<div class="row py-4 justify-content-md-end"> <div class="col-9 col-md-8 mensaje-fester">'+proyecto.clienteNombre+'</div> <div class="col-2 col-md-1"><img src="images/user.svg" class="img-fluid" alt="User"></div> </div>')
                  delay(function(){
                    preguntas.getPregunta2();
                  })
                  
                },
    getPregunta2:function(){
                  $("#chat").append('<div class="row pt-4 pb-2"> <div class="col-2 col-md-1"><img src="images/logo.png" class="img-fluid" alt="Fester"></div> <div class="col-9 col-md-8 mensaje-fester">Gracias '+proyecto.clienteNombre+', ¿en qué sistema estás interesado? Da click en tu opción:</div> </div>')
                  let opciones='<div class="row pb-4"> <div class="col-2 col-md-1"></div> <div class="col-9 col-md-8">';
                  $.each(proys,function(text){
                    opciones+='<button onclick="clickTipoProyecto(this)" type="button" class="btn btn-primary btn-sm">'+text+'</button>';
                    });
                  opciones+='<button  type="button" onclick ="informacionPersonalizada()" class="btn btn-primary btn-sm">Requiero informacion personalizada</button></div> </div>';
                  $("#chat").append(opciones)
                },
    setPregunta2:function(){
                  proyecto.ProyectoTipo=$('#txtRespuesta').val();
                  if($('#txtRespuesta').val().trim()=="" || $('#txtRespuesta').val()==null || !proys[proyecto.ProyectoTipo])
                  {
                    $("#chat").append('<div class="row py-4 justify-content-md-end"> <div class="col-9 col-md-8 mensaje-fester">'+proyecto.ProyectoTipo+'</div> <div class="col-2 col-md-1"><img src="images/user.svg" class="img-fluid" alt="User"></div> </div>')
                    $("#chat").append('<div class="row py-4"> <div class="col-2 col-md-1"><img src="images/logo.png" class="img-fluid" alt="Fester"></div> <div class="col-9 col-md-8 mensaje-fester">Por favor ingresa una de las siguiente opciones:</div> </div>')
                    // $("#chat").append('<div class="row pb-4"> <div class="col-2 col-md-1"></div> <div class="col-9 col-md-8"><button onclick="clickTipoProyecto(this)" type="button" class="btn btn-primary btn-sm">Cimientos</button><button  type="button" onclick ="informacionPersonalizada()" class="btn btn-primary btn-sm">Requiero informacion personalizada</button></div> </div>')
                    let opciones='<div class="row pb-4"> <div class="col-2 col-md-1"></div> <div class="col-9 col-md-8">';
                  $.each(proys,function(text){
                    opciones+='<button onclick="clickTipoProyecto(this)" type="button" class="btn btn-primary btn-sm">'+text+'</button>';
                    });
                  opciones+='<button  type="button" onclick ="informacionPersonalizada()" class="btn btn-primary btn-sm">Requiero informacion personalizada</button></div> </div>';
                  $("#chat").append(opciones)

                    $('#txtRespuesta').val("");
                    moveScrollChatToBottom()
                    return;
                  }
                  estado=3;
                  $('#txtRespuesta').val("");
                  $("#chat").append('<div class="row py-4 justify-content-md-end"> <div class="col-9 col-md-8 mensaje-fester">'+proyecto.ProyectoTipo+'</div> <div class="col-2 col-md-1"><img src="images/user.svg" class="img-fluid" alt="User"></div> </div>')
                  
                  delay(function(){
                    preguntas.getPregunta3();
                    moveScrollChatToBottom()
                  })
                  
                //   preguntas.getPregunta3();
                //   moveScrollChatToBottom()
                },

    getPregunta3:function(){
                  $("#chat").append('<div class="row pt-4 pb-2"> <div class="col-2 col-md-1"><img src="images/logo.png" class="img-fluid" alt="Fester"></div> <div class="col-9 col-md-8 mensaje-fester">¿En qué sistema de '+proyecto.ProyectoTipo+' estas interesado? Da click en tu opción:</div> </div>')
                  let opciones='<div class="row pb-4"> <div class="col-2 col-md-1"></div> <div class="col-9 col-md-8">';
                  $.each(proys[proyecto.ProyectoTipo],function(text){
                    opciones+='<button onclick="clickSubTipoProyecto(this)" type="button" class="btn btn-primary btn-sm">'+text+'</button>';
                    });
                  opciones+='</div></div>';
                  $("#chat").append(opciones)
                },   
    setPregunta3:function(){
                  proyecto.ProyectoSubTipo=$('#txtRespuesta').val();
                  if($('#txtRespuesta').val().trim()=="" || $('#txtRespuesta').val()==null || !proys[proyecto.ProyectoTipo][proyecto.ProyectoSubTipo])
                  {
                    $("#chat").append('<div class="row py-4 justify-content-md-end"> <div class="col-9 col-md-8 mensaje-fester">'+proyecto.ProyectoSubTipo+'</div> <div class="col-2 col-md-1"><img src="images/user.svg" class="img-fluid" alt="User"></div> </div>')
                    $("#chat").append('<div class="row py-4"> <div class="col-2 col-md-1"><img src="images/logo.png" class="img-fluid" alt="Fester"></div> <div class="col-9 col-md-8 mensaje-fester">Por favor ingresa una de las siguiente opciones:</div> </div>')
                    // $("#chat").append('<div class="row pb-4"> <div class="col-2 col-md-1"></div> <div class="col-9 col-md-8"><button onclick="clickSubTipoProyecto(this)" type="button" class="btn btn-primary btn-sm">Mompostería</button> </div> </div>')
                    let opciones='<div class="row pb-4"> <div class="col-2 col-md-1"></div> <div class="col-9 col-md-8">';
                    $.each(proys[proyecto.ProyectoTipo],function(text){
                      opciones+='<button onclick="clickSubTipoProyecto(this)" type="button" class="btn btn-primary btn-sm">'+text+'</button>';
                    });
                    opciones+='</div></div>';
                    $("#chat").append(opciones)
                     $('#txtRespuesta').val("");
                    moveScrollChatToBottom()
                    return;
                  }
                  estado=4;
                  $('#txtRespuesta').val("");
                  $("#chat").append('<div class="row py-4 justify-content-md-end"> <div class="col-9 col-md-8 mensaje-fester">'+proyecto.ProyectoSubTipo+'</div> <div class="col-2 col-md-1"><img src="images/user.svg" class="img-fluid" alt="User"></div> </div>')
                  delay(function(){
                        preguntas.getPregunta4();
                        moveScrollChatToBottom()
                  })
                //   preguntas.getPregunta4();
                //   moveScrollChatToBottom()
                },         
    getPregunta4:function(){
                  $("#chat").append('<div class="row py-4"> <div class="col-2 col-md-1"><img src="images/logo.png" class="img-fluid" alt="Fester"></div> <div class="col-9 col-md-8 mensaje-fester">¿Cuántos metros cuadrados tiene tu superficie?</div> </div>')
                  moveScrollChatToBottom()
                },
    setPregunta4:function(){
                  proyecto.mt3=$('#txtRespuesta').val();
                  if($('#txtRespuesta').val().trim()=="" || $('#txtRespuesta').val()==null || !isNumeric(proyecto.mt3))
                  {
                    $("#chat").append('<div class="row py-4"> <div class="col-2 col-md-1"><img src="images/logo.png" class="img-fluid" alt="Fester"></div> <div class="col-9 col-md-8 mensaje-fester">Por favor ingresa un dato numerico</div> </div>')
                    $('#txtRespuesta').val("");
                    moveScrollChatToBottom()
                    return;
                  }
                  estado=5;
                  $('#txtRespuesta').val("");
                  $("#chat").append('<div class="row py-4 justify-content-md-end"> <div class="col-9 col-md-8 mensaje-fester">'+proyecto.mt3+'</div> <div class="col-2 col-md-1"><img src="images/user.svg" class="img-fluid" alt="User"></div> </div>')
                  delay(function(){
                        preguntas.getPregunta5();
                        moveScrollChatToBottom()
                  })
                //   preguntas.getPregunta5();
                //   moveScrollChatToBottom()
                },
    getPregunta5:function(){
                  $("#chat").append('<div class="row py-4"> <div class="col-2 col-md-1"><img src="images/logo.png" class="img-fluid" alt="Fester"></div> <div class="col-9 col-md-8 mensaje-fester">¿Estado de la republica de tu obra?</div> </div>')
                  moveScrollChatToBottom()
    },
    setPregunta5:function(){
                  if($('#txtRespuesta').val().trim()=="" || $('#txtRespuesta').val()==null )
                  {
                    // $("#chat").append('<div class="row py-4"> <div class="col-2 col-md-1"><img src="images/logo.png" class="img-fluid" alt="Fester"></div> <div class="col-9 col-md-8 mensaje-fester">Por favor ingresa un estado correcto</div> </div>')
                    $('#txtRespuesta').val("");
                    moveScrollChatToBottom()
                    return;
                  }
                  estado=6;
                  proyecto.estado=$('#txtRespuesta').val();
                  $('#txtRespuesta').val("");
                  $("#chat").append('<div class="row py-4 justify-content-md-end"> <div class="col-9 col-md-8 mensaje-fester">'+ proyecto.estado+'</div> <div class="col-2 col-md-1"><img src="images/user.svg" class="img-fluid" alt="User"></div> </div>')
                  delay(function(){
                        preguntas.getPregunta6();
                        moveScrollChatToBottom()
                  })
                //   preguntas.getPregunta6();
                //   moveScrollChatToBottom()
    },
    getPregunta6:function(){
                  $("#chat").append('<div class="row py-4"> <div class="col-2 col-md-1"><img src="images/logo.png" class="img-fluid" alt="Fester"></div> <div class="col-9 col-md-8 mensaje-fester">¿Cual es tu C.P.?</div> </div>')
                  moveScrollChatToBottom()
    },
    setPregunta6:function(){
                  if($('#txtRespuesta').val().trim()=="" || $('#txtRespuesta').val()==null || !isNumeric(proyecto.mt3))
                  {
                    $("#chat").append('<div class="row py-4"> <div class="col-2 col-md-1"><img src="images/logo.png" class="img-fluid" alt="Fester"></div> <div class="col-9 col-md-8 mensaje-fester">Por favor ingresa un dato numerico</div> </div>')
                    $('#txtRespuesta').val("");
                    moveScrollChatToBottom()
                    return;
                  }
                  estado=7;
                  proyecto.cp=$('#txtRespuesta').val();
                  $('#txtRespuesta').val("");
                  $("#chat").append('<div class="row py-4 justify-content-md-end"> <div class="col-9 col-md-8 mensaje-fester">'+ proyecto.cp+'</div> <div class="col-2 col-md-1"><img src="images/user.svg" class="img-fluid" alt="User"></div> </div>')
                  delay(function(){
                        preguntas.getPregunta7();
                        moveScrollChatToBottom()
                  })
                //   preguntas.getPregunta7();
                //   moveScrollChatToBottom()
    },
    getPregunta7:function(){
                  $('#txtRespuesta').attr("disabled",true)
                  $('#txtRespuesta').attr("placeholder","SELECCIONA UNA OPCIÓN")    
                  let text='<div class="row py-4"> <div class="col-2 col-md-1"><img src="images/logo.png" class="img-fluid" alt="Fester"></div> <div class="col-9 col-md-8 mensaje-fester">Elige los años de garantía <select id="garantia" onChange="selectGarantia()" class="form-control">';
                  text+='<option value="">Selecciona un valor</option>';
                  proys[proyecto.ProyectoTipo][proyecto.ProyectoSubTipo].garantias.forEach(function(garantia){
                    text+='<option value="'+garantia+'">'+garantia+'</option>';
                  });
                  text +='</select></div> </div>';
                  $("#chat").append(text)
                  moveScrollChatToBottom()
    },
    getPregunta8:function(){
                  $('#txtRespuesta').attr("disabled",false)
                  $('#txtRespuesta').attr("placeholder","ESCRIBE AQUÍ TU RESPUESTA")    
                  $("#chat").append('<div class="row py-4"> <div class="col-2 col-md-1"><img src="images/logo.png" class="img-fluid" alt="Fester"></div> <div class="col-9 col-md-8 mensaje-fester">¿Cual es tu nombre completo?</div> </div>')
                  moveScrollChatToBottom()
    },
    setPregunta8:function(){
                  if($('#txtRespuesta').val().trim()=="" || $('#txtRespuesta').val()==null )
                  {
                    $("#chat").append('<div class="row py-4"> <div class="col-2 col-md-1"><img src="images/logo.png" class="img-fluid" alt="Fester"></div> <div class="col-9 col-md-8 mensaje-fester">¿Cual es tu nombre completo?</div> </div>')
                    $('#txtRespuesta').val("");
                    moveScrollChatToBottom()
                    return;
                  }
                  estado=9;
                  proyecto.nombre=$('#txtRespuesta').val();
                  $('#txtRespuesta').val("");
                  $("#chat").append('<div class="row py-4 justify-content-md-end"> <div class="col-9 col-md-8 mensaje-fester">'+ proyecto.nombre+'</div> <div class="col-2 col-md-1"><img src="images/user.svg" class="img-fluid" alt="User"></div> </div>')
                  delay(function(){
                        preguntas.getPregunta9();
                        moveScrollChatToBottom()
                  })
                //   preguntas.getPregunta9();
                //   moveScrollChatToBottom()
    },
    getPregunta9:function(){
                  $("#chat").append('<div class="row py-4"> <div class="col-2 col-md-1"><img src="images/logo.png" class="img-fluid" alt="Fester"></div> <div class="col-9 col-md-8 mensaje-fester">¿Cual es tu telefono?</div> </div>')
                  moveScrollChatToBottom()
    },
    setPregunta9:function(){
                  proyecto.tel=$('#txtRespuesta').val();
                  if($('#txtRespuesta').val().trim()=="" || $('#txtRespuesta').val()==null || !isNumeric(proyecto.mt3))
                  {
                    $("#chat").append('<div class="row py-4"> <div class="col-2 col-md-1"><img src="images/logo.png" class="img-fluid" alt="Fester"></div> <div class="col-9 col-md-8 mensaje-fester">¿Cual es tu telefono?</div> </div>')
                    $('#txtRespuesta').val("");
                    moveScrollChatToBottom()
                    return;
                  }
                  estado=10;
                  proyecto.tel=$('#txtRespuesta').val();
                  $('#txtRespuesta').val("");
                  $("#chat").append('<div class="row py-4 justify-content-md-end"> <div class="col-9 col-md-8 mensaje-fester">'+ proyecto.tel+'</div> <div class="col-2 col-md-1"><img src="images/user.svg" class="img-fluid" alt="User"></div> </div>')
                  delay(function(){
                        preguntas.getPregunta10();
                        moveScrollChatToBottom()
                  })
                //   preguntas.getPregunta10();
                //   moveScrollChatToBottom()
    },
    getPregunta10:function(){
                  $("#chat").append('<div class="row py-4"> <div class="col-2 col-md-1"><img src="images/logo.png" class="img-fluid" alt="Fester"></div> <div class="col-9 col-md-8 mensaje-fester">¿Cual es tu correo electronico?</div> </div>')
                  moveScrollChatToBottom()
    },
    setPregunta10:function(){
                  if($('#txtRespuesta').val().trim()=="" || $('#txtRespuesta').val()==null || !validateEmail($('#txtRespuesta').val()))
                  {
                    $("#chat").append('<div class="row py-4"> <div class="col-2 col-md-1"><img src="images/logo.png" class="img-fluid" alt="Fester"></div> <div class="col-9 col-md-8 mensaje-fester">Ingresa un correo elctronico valido</div> </div>')
                    $('#txtRespuesta').val("");
                    moveScrollChatToBottom()
                    return;
                  }
                  estado=11;
                  proyecto.email=$('#txtRespuesta').val();
                  $('#txtRespuesta').val("");
                  $("#chat").append('<div class="row py-4 justify-content-md-end"> <div class="col-9 col-md-8 mensaje-fester">'+ proyecto.email+'</div> <div class="col-2 col-md-1"><img src="images/user.svg" class="img-fluid" alt="User"></div> </div>')
                  delay(function(){
                        preguntas.getPregunta11();
                        moveScrollChatToBottom()
                  })
                //   preguntas.getPregunta11();
                //   moveScrollChatToBottom()
    },
    getPregunta11:function(){
                  $("#chat").append('<div class="row py-4"> <div class="col-2 col-md-1"><img src="images/logo.png" class="img-fluid" alt="Fester"></div> <div class="col-9 col-md-8 mensaje-fester">¿Cual es tu ocupación?</div> </div>')
                  moveScrollChatToBottom()
    },
    setPregunta11:function(){
                  if($('#txtRespuesta').val().trim()=="" || $('#txtRespuesta').val()==null)
                  {
                    $("#chat").append('<div class="row py-4"> <div class="col-2 col-md-1"><img src="images/logo.png" class="img-fluid" alt="Fester"></div> <div class="col-9 col-md-8 mensaje-fester">¿Cual es tu ocupación?</div> </div>')
                    $('#txtRespuesta').val("");
                    moveScrollChatToBottom()
                    return;
                  }
                  estado=12;
                  proyecto.ocupacion=$('#txtRespuesta').val();
                  $('#txtRespuesta').val("");
                  $("#chat").append('<div class="row py-4 justify-content-md-end"> <div class="col-9 col-md-8 mensaje-fester">'+ proyecto.ocupacion+'</div> <div class="col-2 col-md-1"><img src="images/user.svg" class="img-fluid" alt="User"></div> </div>')
                  delay(function(){
                        preguntas.getPregunta12();
                        moveScrollChatToBottom()
                  })
                //   preguntas.getPregunta12();
                //   moveScrollChatToBottom()
    },
    getPregunta12:function(){
                  // $("#chat").append('<div class="row py-4"> <div class="col-2 col-md-1"><img src="images/logo.png" class="img-fluid" alt="Fester"></div> <div class="col-9 col-md-8 mensaje-fester">¿Cual es tu ocupación?</div> </div>')
                  $("#chat").append('<div class="row pt-4 pb-2"> <div class="col-2 col-md-1"><img src="images/logo.png" class="img-fluid" alt="Fester"></div> <div class="col-9 col-md-8 mensaje-fester">¿Podemos usar tus datos para mandarte informacion adicional?</div> </div>')
                  $("#chat").append('<div class="row pb-4"> <div class="col-2 col-md-1"></div> <div class="col-9 col-md-8"><button onclick="clickInformacion(this)" type="button" class="btn btn-primary btn-sm">SI</button><button onclick="clickInformacion(this)" type="button" class="btn btn-primary btn-sm">NO</button> </div> </div>')
                  moveScrollChatToBottom()
    },
    setPregunta12:function(){
                  proyecto.usodatos=$('#txtRespuesta').val().toString().toUpperCase();
                  if($('#txtRespuesta').val().trim()=="" || $('#txtRespuesta').val()==null || (proyecto.usodatos!="SI" && proyecto.usodatos!="NO" ))
                  {
                    preguntas.getPregunta12();
                    // $("#chat").append('<div class="row py-4"> <div class="col-2 col-md-1"><img src="images/logo.png" class="img-fluid" alt="Fester"></div> <div class="col-9 col-md-8 mensaje-fester">¿Cual es tu ocupación?</div> </div>')
                    $('#txtRespuesta').val("");
                    moveScrollChatToBottom()
                    return;
                  }
                  estado=13;
                  proyecto.usodatos=$('#txtRespuesta').val();
                  $('#txtRespuesta').val("");
                  $("#chat").append('<div class="row py-4 justify-content-md-end"> <div class="col-9 col-md-8 mensaje-fester">'+ proyecto.usodatos+'</div> <div class="col-2 col-md-1"><img src="images/user.svg" class="img-fluid" alt="User"></div> </div>')
                  delay(function(){
                        preguntas.getPregunta13();
                        moveScrollChatToBottom()
                  })
                //   preguntas.getPregunta13();
                //   moveScrollChatToBottom()
    },
    getPregunta13:function(){
                var calculo =Math.ceil((parseFloat(proyecto.mt3)*3)/17.18)
                calculo=calculo+" sacos";
                var url="cotizacion.php?m3="+calculo+"&cliente="+proyecto.clienteNombre+"&proyecto="+proyecto.ProyectoTipo+"&subproyecto="+proyecto.ProyectoSubTipo;
                delay(function(){
                        preguntas.getPreguntafinal();
                        $("#chat").append('<div class="row pb-4"> <div class="col-2 col-md-1"></div> <div class="col-9 col-md-8"><button onclick="vercotizacion()" type="button" class="btn btn-primary btn-sm">Ver Cotización</button> </div> </div>')
                  })


                // preguntas.getPreguntafinal();
                // $("#chat").append('<div class="row pb-4"> <div class="col-2 col-md-1"></div> <div class="col-9 col-md-8"><button onclick="vercotizacion()" type="button" class="btn btn-primary btn-sm">Ver Cotización</button> </div> </div>')
                },
    //se brinca pregunta 14 para usar como validacion de ultima pregunta de cotizacion
    getPregunta15:function(){
                  $("#chat").append('<div class="row py-4"> <div class="col-2 col-md-1"><img src="images/logo.png" class="img-fluid" alt="Fester"></div> <div class="col-9 col-md-8 mensaje-fester">¿Cual es tu nombre completo?</div> </div>')
                  moveScrollChatToBottom()
                },
    setPregunta15:function(){
                  if($('#txtRespuesta').val().trim()=="" || $('#txtRespuesta').val()==null )
                  {
                    $("#chat").append('<div class="row py-4"> <div class="col-2 col-md-1"><img src="images/logo.png" class="img-fluid" alt="Fester"></div> <div class="col-9 col-md-8 mensaje-fester">¿Cual es tu nombre completo?</div> </div>')
                    $('#txtRespuesta').val("");
                    moveScrollChatToBottom()
                    return;
                  }
                  estado=16;
                  proyecto.nombre=$('#txtRespuesta').val();
                  $('#txtRespuesta').val("");
                  $("#chat").append('<div class="row py-4 justify-content-md-end"> <div class="col-9 col-md-8 mensaje-fester">'+ proyecto.nombre+'</div> <div class="col-2 col-md-1"><img src="images/user.svg" class="img-fluid" alt="User"></div> </div>')
                  delay(function(){
                        preguntas.getPregunta16();
                        moveScrollChatToBottom()
                  })
                //   preguntas.getPregunta16();
                //   moveScrollChatToBottom()
    },
    getPregunta16:function(){
                  $("#chat").append('<div class="row py-4"> <div class="col-2 col-md-1"><img src="images/logo.png" class="img-fluid" alt="Fester"></div> <div class="col-9 col-md-8 mensaje-fester">¿Cual es tu telefono?</div> </div>')
                  moveScrollChatToBottom()
                },
    setPregunta16:function(){
                  if($('#txtRespuesta').val().trim()=="" || $('#txtRespuesta').val()==null )
                  {
                    $("#chat").append('<div class="row py-4"> <div class="col-2 col-md-1"><img src="images/logo.png" class="img-fluid" alt="Fester"></div> <div class="col-9 col-md-8 mensaje-fester">¿Cual es tu telefono?</div> </div>')
                    $('#txtRespuesta').val("");
                    moveScrollChatToBottom()
                    return;
                  }
                  estado=17;
                  proyecto.tel=$('#txtRespuesta').val();
                  $('#txtRespuesta').val("");
                  $("#chat").append('<div class="row py-4 justify-content-md-end"> <div class="col-9 col-md-8 mensaje-fester">'+ proyecto.tel+'</div> <div class="col-2 col-md-1"><img src="images/user.svg" class="img-fluid" alt="User"></div> </div>')
                  delay(function(){
                        preguntas.getPregunta17();
                        moveScrollChatToBottom()
                  })
                //   preguntas.getPregunta17();
                //   moveScrollChatToBottom()
    },
    getPregunta17:function(){
                  $("#chat").append('<div class="row py-4"> <div class="col-2 col-md-1"><img src="images/logo.png" class="img-fluid" alt="Fester"></div> <div class="col-9 col-md-8 mensaje-fester">¿Cual es tu correo electronico?</div> </div>')
                  moveScrollChatToBottom()
                },
    setPregunta17:function(){
                  if($('#txtRespuesta').val().trim()=="" || $('#txtRespuesta').val()==null || !validateEmail($('#txtRespuesta').val()))
                  {
                    $("#chat").append('<div class="row py-4"> <div class="col-2 col-md-1"><img src="images/logo.png" class="img-fluid" alt="Fester"></div> <div class="col-9 col-md-8 mensaje-fester">Ingresa un correo elctronico valido</div> </div>')
                    $('#txtRespuesta').val("");
                    moveScrollChatToBottom()
                    return;
                  }
                  estado=18;
                  proyecto.email=$('#txtRespuesta').val();
                  $('#txtRespuesta').val("");
                  $("#chat").append('<div class="row py-4 justify-content-md-end"> <div class="col-9 col-md-8 mensaje-fester">'+ proyecto.email+'</div> <div class="col-2 col-md-1"><img src="images/user.svg" class="img-fluid" alt="User"></div> </div>')
                  delay(function(){
                        preguntas.getPregunta18();
                        moveScrollChatToBottom()
                  })
                //   preguntas.getPregunta18();
                //   moveScrollChatToBottom()
    },
    getPregunta18:function(){
                  $("#chat").append('<div class="row py-4"> <div class="col-2 col-md-1"><img src="images/logo.png" class="img-fluid" alt="Fester"></div> <div class="col-9 col-md-8 mensaje-fester">¿Cual es tu solicitud?</div> </div>')
                  moveScrollChatToBottom()
                },
    setPregunta18:function(){
                  if($('#txtRespuesta').val().trim()=="" || $('#txtRespuesta').val()==null )
                  {
                    $("#chat").append('<div class="row py-4"> <div class="col-2 col-md-1"><img src="images/logo.png" class="img-fluid" alt="Fester"></div> <div class="col-9 col-md-8 mensaje-fester">¿Cual es tu solicitud?</div> </div>')
                    $('#txtRespuesta').val("");
                    moveScrollChatToBottom()
                    return;
                  }
                  estado=19;
                  proyecto.solicitud=$('#txtRespuesta').val();
                  $('#txtRespuesta').val("");
                  $("#chat").append('<div class="row py-4 justify-content-md-end"> <div class="col-9 col-md-8 mensaje-fester">'+ proyecto.solicitud+'</div> <div class="col-2 col-md-1"><img src="images/user.svg" class="img-fluid" alt="User"></div> </div>')
                 
                  delay(function(){
                        preguntas.getPreguntafinal();
                        moveScrollChatToBottom()
                  })

                //   preguntas.getPreguntafinal();
                //   moveScrollChatToBottom()
    },
    getPreguntafinal:function(){
                  $("#chat").append('<div class="row py-4"> <div class="col-2 col-md-1"><img src="images/logo.png" class="img-fluid" alt="Fester"></div> <div class="col-9 col-md-8 mensaje-fester">Muchas gracias. En un periodo de 24 horas te contactaremos para darte mas informacion.</div> </div>')
                  moveScrollChatToBottom();
                  saveSolicitud();
                },
  }

  function siguientePregunta(){
    if(estado!=7 &&  preguntas[("setPregunta" + estado)])
      preguntas["setPregunta"+estado]();
    else
     $('#txtRespuesta').val("");
  }

  function vercotizacion(){
    var url="cotizacion.php?m3="+proyecto.mt3+"&cliente="+proyecto.clienteNombre+"&proyecto="+proyecto.ProyectoTipo+"&subproyecto="+proyecto.ProyectoSubTipo+"&garantia="+proyecto.garantia;
    window.open(url)

  }

  function selectGarantia(){
    if(estado==7 && $("#garantia").val()!=""){
      estado=8
      proyecto.garantia=$("#garantia").val();
      $("#chat").append('<div class="row py-4 justify-content-md-end"> <div class="col-9 col-md-8 mensaje-fester">'+ proyecto.garantia+'</div> <div class="col-2 col-md-1"><img src="images/user.svg" class="img-fluid" alt="User"></div> </div>')
    //   moveScrollChatToBottom()
    //   preguntas.getPregunta8();
                    delay(function(){
                        preguntas.getPregunta8();
                        moveScrollChatToBottom()
                  })
    }
  }

  function clickTipoProyecto(e){
    let text=e.textContent
    $('#txtRespuesta').val(text);
    siguientePregunta();
  }

  function informacionPersonalizada(){
    proyecto.infopersonalizada=true;
    estado=15;

                delay(function(){
                        preguntas.getPregunta15();
                        // moveScrollChatToBottom()
                  })
    // preguntas.getPregunta15();
  }

  function clickSubTipoProyecto(e){
    let text=e.textContent
    $('#txtRespuesta').val(text);
    siguientePregunta();
  }

  function clickInformacion(e){
    let text=e.textContent
    $('#txtRespuesta').val(text);
    siguientePregunta();
  }

  function saveSolicitud(){
    var params="";
    let data={};
    // params+="&nombre="+proyecto.nombre;
    // params+="&telefono="+proyecto.tel;
    // params+="&email="+proyecto.email;
    // params+="&ocupacion="+(proyecto.ocupacion?proyecto.ocupacion:"");
    // params+="&estado="+(proyecto.estado?proyecto.estado:"");
    // params+="&cp="+(proyecto.cp?proyecto.cp:"");
    data.nombre=proyecto.nombre;
    data.telefono=proyecto.tel;
    data.email=proyecto.email;
    data.ocupacion=(proyecto.ocupacion?proyecto.ocupacion:"");
    data.estado=(proyecto.estado?proyecto.estado:"");
    data.cp=(proyecto.cp?proyecto.cp:"");

    if(proyecto.infopersonalizada){
      // params+="&infopersonal=SI";
      data.infopersonal="SI";
    }
    else{
      data.infopersonal=proyecto.usodatos;
      // params+="&infopersonal="+proyecto.usodatos;
    }

    data.nota=(proyecto.solicitud?proyecto.solicitud:"");
    // params+="&nota="+(proyecto.solicitud?proyecto.solicitud:"");

    var jsonCotizacion="";
    var cotizacionSistemas=[];
    if(proyecto.ProyectoTipo && proyecto.ProyectoSubTipo){

      let sistemaelegido=sistemas[proyecto.ProyectoTipo][proyecto.ProyectoSubTipo]

      for(var i=0;i<sistemaelegido.sistemas.length;i++){
            let s=sistemaelegido.sistemas[i];
          if(s.garantia!=proyecto.garantia){
              continue;
          }
          else{
            for(var j=0;j<s.productos.length;j++){
                let p=s.productos[j];
                let mats=p.materialRequerido(proyecto.mt3);
                p=$.extend(p, mats);
            }
            cotizacionSistemas.push(s);
          }
        }

    }
    data.cotizacion=JSON.stringify(cotizacionSistemas);
    // params+="&cotizacion="+JSON.stringify(cotizacionSistemas);
       
    $.ajax({
      method: "POST",
      data:data,
      url: "solicitudesService.php?a=saveSolicitud",
      success:function(a){
        if(a==0){
          console.log("error to save info"+a)
        }
        else{
          console.log("success to save info")
        }
      }
    });
  }

  function moveScrollChatToBottom(){
    var objDiv = document.getElementById("chat");
     objDiv.scrollTop = objDiv.scrollHeight;
  }

  function isNumeric(str) {
    if (typeof str != "string") return false 
    return !isNaN(str) && 
          !isNaN(parseFloat(str))
  }
  
  (function(){
    preguntas.getPregunta1()
  })()

  function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function delay(f){
    $('#divTiping').show()
    moveScrollChatToBottom();
    let timeDelay=parseInt(Math.random()*3)+1
    setTimeout(function(){
        $('#divTiping').hide()
        f();

    }, timeDelay*1000);

}
  </script>

</html> 