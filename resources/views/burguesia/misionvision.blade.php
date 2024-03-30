@include('burguesia.header')

<style>
    .container-vision {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 70vh; /* Ajusta la altura del contenedor según el tamaño de la ventana */
    }
    .card {
      width: 250px;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      background-color: #FFFFFF;
      margin-right: 60px; /* Espacio entre los cards */
    }
    .word-container {
      text-align: center;
    }
    hr {
      height: 2px; /* Altura del hr */
      border: none; /* Elimina el borde predeterminado */
      background-color: #FF5733; /* Color de fondo del hr */
      margin: 20px 0; /* Márgenes superior e inferior */
    }
    .imglaposte {
      border-radius: 10px; /* Bordes redondeados para la imagen */
      border: 2px solid white; /* Borde blanco alrededor de la imagen */
    }
    .p-vision {
      text-align: center; /* Estilo para el párrafo con la clase pmision */
    }
    .union {
        margin-right: 80px; /* Ajuste del margen derecho */
    }

  </style>


  <div class="container-vision">
        <div class="card left-card">
        <div class="word-container">
                <h5>Visión</h5>
                <hr> <!-- HR personalizado -->
        </div>
        <p class="p-vision">Ser reconocidos como el destino preferido para los amantes de la comida, destacando por nuestra innovación en sabores y compromiso con la satisfacción de nuestros clientes.</p>
        </div>
        <img class="imglaposte" src="img/laPoster.jpg" alt="BP La Burguesía del Pueblo" width="300px" height="410px">
  </div>

  <!--Segundo conteiner-->
  <div class="container-vision">
        <img class="imglaposte" src="img/mision.jpg" alt="BP La Burguesía del Pueblo" width="300px" height="410px">
        <!--puse un margin-left para separarlos a 60px-->
        <div class="card right-card" style="margin-left: 60px;"> <!-- Cambiado de 'left-card' a 'right-card' -->
            <div class="word-container">
                <h5>Misión</h5>
                <hr> <!-- HR personalizado -->
            </div>
            <p class="p-vision">Brindar a nuestros clientes una experiencia excepcional mediante la preparación de platillos de calidad, funcionando sabores auténticos en cada bocado creando momentos memorables para nuestros clientes.</p>
        </div>
 </div>
<br><br><br>

<!--parte de los objetivos-->
<div class="text-center justify-content-center">
    <h2>——— Objetivos ———</h2>
</div>
<br><br>

<div class="union" style="display: flex;"> <!-- Contenedor que envuelve ambas columnas -->
    <div class="primera-col-vertical" style="margin-left: 185px;"> <!-- Agregando un margen derecho para separar las columnas -->
        <div class="card" style="width: 14rem;"> <!-- Reduciendo el ancho del card -->
            <img class="card-img-top" src="img/consistencia.png" alt="Card image cap" style="max-width: 30%; height: auto;"> <!-- Ajustando el tamaño máximo de la imagen -->
            <div class="card-body">
                <h5 class="card-title" style="font-size: 14px;">Garantizar la consistencia en la calidad de los productos.</h5> <!-- Reduciendo el tamaño de la fuente -->
            </div>
        </div>
        <br>
        <div class="card" style="width: 14rem;"> <!-- Reduciendo el ancho del card -->
            <img class="card-img-top" src="img/menu.png" alt="Card image cap" style="max-width: 30%; height: auto;"> <!-- Ajustando el tamaño máximo de la imagen -->
            <div class="card-body">
                <h5 class="card-title" style="font-size: 14px;">Ampliar la variedad del menú con opciones creativas y deliciosas.<br><br></h5> <!-- Reduciendo el tamaño de la fuente -->
            </div>
        </div>
        <br>
        <div class="card" style="width: 14rem;"> <!-- Reduciendo el ancho del card -->
            <img class="card-img-top" src="img/mejora.png" alt="Card image cap" style="max-width: 30%; height: auto;"> <!-- Ajustando el tamaño máximo de la imagen -->
            <div class="card-body">
                <h5 class="card-title" style="font-size: 14px;">Ser una empresa incluyente siempre con el pro de la mejora continuidad.</h5> <!-- Reduciendo el tamaño de la fuente -->
            </div>
        </div>
    </div>

    <!--segunda columna-->
    <div class="segunda-col-vertical">
        <div class="card" style="width: 14rem;"> <!-- Reduciendo el ancho del card -->
            <img class="card-img-top" src="img/mano.png" alt="Card image cap" style="max-width: 30%; height: auto;"> <!-- Ajustando el tamaño máximo de la imagen -->
            <div class="card-body">
                <h5 class="card-title" style="font-size: 14px;">Fomentar la economía local.  <br><br><br></h5> <!-- Reduciendo el tamaño de la fuente -->
            </div>
        </div>
        <br>
        <div class="card" style="width: 14rem;"> <!-- Reduciendo el ancho del card -->
            <img class="card-img-top" src="img/camaraderia.png" alt="Card image cap" style="max-width: 30%; height: auto;"> <!-- Ajustando el tamaño máximo de la imagen -->
            <div class="card-body">
                <h5 class="card-title" style="font-size: 14px;">Establecer alianzas locales para promover la participación comunitaria.</h5> <!-- Reduciendo el tamaño de la fuente -->
            </div>
        </div>
        <br>
        <div class="card" style="width: 14rem;"> <!-- Reduciendo el ancho del card -->
            <img class="card-img-top" src="img/estandares.png" alt="Card image cap" style="max-width: 30%; height: auto;"> <!-- Ajustando el tamaño máximo de la imagen -->
            <div class="card-body">
                <h5 class="card-title" style="font-size: 14px;">Mantener altos estándares de calidad en todos nuestros productos.</h5> <!-- Reduciendo el tamaño de la fuente -->
            </div>
        </div>
    </div>
    <div>
        <br>
        <img src="img/objetivos.jpg" alt="BP La Burguesía del Pueblo" width="506px" height="407px" style="border-radius: 20px; border: 2px solid white;">
        <br><br>
        <div style="display: flex; justify-content: space-between;">
            <div class="card" style="width: 14rem;"> <!-- Reduciendo el ancho del card -->
                <img class="card-img-top" src="img/clasificacion.png" alt="Card image cap" style="max-width: 30%; height: auto;"> <!-- Ajustando el tamaño máximo de la imagen -->
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 14px;">Mejorar continuamente la eficiencia operativa y la experiencia de los clientes.</h5> <!-- Reduciendo el tamaño de la fuente -->
                </div>
            </div>
            <div class="card" style="width: 14rem; margin-right: 125px;"> <!-- Reduciendo el ancho del card -->
                <img class="card-img-top" src="img/mexico.png" alt="Card image cap" style="max-width: 30%; height: auto;"> <!-- Ajustando el tamaño máximo de la imagen -->
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 14px;">Expandirnos en toda la republica mexicana.</h5> <!-- Reduciendo el tamaño de la fuente -->
                </div>
            </div>
        </div>
    </div>
</div><!--fin div de contenedor que los envuerlve-->
<br><br><br><br>


<!--parte de los Valores-->
<div class="text-center justify-content-center">
    <h2>——— Valores ———</h2>
</div>
<br><br>
<!--primera columna de uno sola--->
<div class="union" style="display: flex;"> <!-- Contenedor que envuelve ambas columnas -->
    <div class="primera-col-vertical" style="margin-left: 185px;"> <!-- Agregando un margen derecho para separar las columnas -->
        <div class="card" style="width: 14rem;"> <!-- Reduciendo el ancho del card -->
            <img class="card-img-top" src="img/pasion.png" alt="Card image cap" style="max-width: 30%; height: auto;"> <!-- Ajustando el tamaño máximo de la imagen -->
            <div class="card-body">
                <h5 class="card-title" style="font-size: 14px;">Pasión</h5> <!-- Reduciendo el tamaño de la fuente -->
                <h6 class="card-subtitle mb-2 text-muted" style="font-size: 13px;">En cada plato, palpita nuestra pasión por la cocina auténtica y los sabores excepcionales.</h6>
            </div>
        </div>
    </div>

    <!--segunda columna de dos-->
    <div class="segunda-col-vertical">
        <div class="card" style="width: 14rem;"> <!-- Reduciendo el ancho del card -->
            <img class="card-img-top" src="img/comercio-justo.png" alt="Card image cap" style="max-width: 30%; height: auto;"> <!-- Ajustando el tamaño máximo de la imagen -->
            <div class="card-body">
                <h5 class="card-title" style="font-size: 14px;">Compromiso</h5> <!-- Reduciendo el tamaño de la fuente -->
                <h6 class="card-subtitle mb-2 text-muted" style="font-size: 13px;">Compromiso con la satisfaccion del cliente.<br><br><br></h6>
            </div>
        </div>
        <br>
        <div class="card" style="width: 14rem;"> <!-- Reduciendo el ancho del card -->
            <img class="card-img-top" src="img/honesto.png" alt="Card image cap" style="max-width: 30%; height: auto;"> <!-- Ajustando el tamaño máximo de la imagen -->
            <div class="card-body">
                <h5 class="card-title" style="font-size: 14px;">Honestidad</h5> <!-- Reduciendo el tamaño de la fuente -->
                <h6 class="card-subtitle mb-2 text-muted" style="font-size: 13px;">Preparación transparente y sabores genuinos que hablan por sí mismos.<br><br></h6>
            </div>
        </div>
        <br>
    </div>
    <!--Tercer columna de dos-->
    <div class="segunda-col-vertical">
        <div class="card" style="width: 14rem;"> <!-- Reduciendo el ancho del card -->
            <img class="card-img-top" src="img/innovacion.png" alt="Card image cap" style="max-width: 30%; height: auto;"> <!-- Ajustando el tamaño máximo de la imagen -->
            <div class="card-body">
                <h5 class="card-title" style="font-size: 14px;">Innovación</h5> <!-- Reduciendo el tamaño de la fuente -->
                <h6 class="card-subtitle mb-2 text-muted" style="font-size: 13px;">Innovacion en la creación de platillos.<br><br><br></h6>
            </div>
        </div>
        <br>
        <div class="card" style="width: 14rem;"> <!-- Reduciendo el ancho del card -->
            <img class="card-img-top" src="img/seguridad.png" alt="Card image cap" style="max-width: 30%; height: auto;"> <!-- Ajustando el tamaño máximo de la imagen -->
            <div class="card-body">
                <h5 class="card-title" style="font-size: 14px;">Transparencia</h5> <!-- Reduciendo el tamaño de la fuente -->
                <h6 class="card-subtitle mb-2 text-muted" style="font-size: 13px;">Ingredientes frescos, preparación transparente, sabores genuinos.</h6>
            </div>
        </div>
        <br>
    </div>
    <!--Otra solitaria-->
    <!--segunda columna de uno-->
    <div class="segunda-col-vertical">
        <div class="card" style="width: 14rem;"> <!-- Reduciendo el ancho del card -->
            <img class="card-img-top" src="img/responsabilidad.png" alt="Card image cap" style="max-width: 30%; height: auto;"> <!-- Ajustando el tamaño máximo de la imagen -->
            <div class="card-body">
                <h5 class="card-title" style="font-size: 14px;">Responsabilidad</h5> <!-- Reduciendo el tamaño de la fuente -->
                <h6 class="card-subtitle mb-2 text-muted" style="font-size: 13px;">Responsabilidad social y apoyo a la comunidad.<br><br><br></h6>
            </div>
        </div>
    </div>
</div><!--fin div de contenedor que los envuerlve-->
<br><br>
<div style="display: flex; justify-content: center;">
    <img class="card-img-top" src="img/valores.jpg" alt="Card image cap" style="max-width: 50%; height: auto; border: 2px solid white; border-radius: 10px;"> <!-- Ajustando el tamaño máximo de la imagen -->
</div>



<!--para la ventana flotante-->
<!--ventana flotante-->
<div id="ventanaFlotante" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h4>Contactenos en:</h4>
                <hr>
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <img class="imgVentana" src="img/burguesia.jpeg" alt="BP La Burguesía del Pueblo" width="100px" height="150px">
                        </div>
                        
                        <div class="col-7">
                            <br>
                            <div class="contact-info">
                                <img src="img/whatsapp.png" alt="WhatsApp" class="contact-icon"<p>983 120 8934</p>                           
                            </div>
                            <div class="contact-info">
                                <img src="img/gmail.png" alt="Gmail" class="contact-icon"<p>laburguesia.bacalar@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--ventana flotante-->





@include('burguesia.footer')      
