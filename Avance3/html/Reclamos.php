<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libro de Reclamaciones - Pepsico </title>
    <link rel="stylesheet" type="text/css" href="../css/reclamos.css">
    <script type="text/javascript" src="../js/reclamos.js"></script>
</head>
<body style="background-color: #9BB3E8;">
  <header>
    <div style="padding-left:4rem;padding-right:1rem;padding-top:1rem;padding-bottom:1rem;display:flex;align-items:center;width:100%; background: linear-gradient(to right, #a6a6a6, #ffffff);padding-left: 90px;" class=" mx-auto">
      <!-- menu -->
      <div style="  margin-right: 30px;
      " class="botonmenu">
        <button id="menu">
          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"></path>
          </svg>
      </button>
      </div>
    <!-- desplega --> 
      <section>
        <nav class="nav-lat" id="nav-lat">
            <ul class="list">
                <li class="list_item">
                    <div class="list_button">
                        <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
                        </svg>
                        <a href="" class="nav_link">Inicio</a>
                    </div>
                </li>
                <li class="list_item">
                    <div class="list_button" id="iniciar-sesion">
                        <svg class="nav-icon" style="height: 1.75rem;padding:0.15rem;fill: #23438f;" class=" lg:h-10  " aria-hidden="true" focusable="false" data-prefix="far" data-icon="user" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-user fa-w-14 fa-9x">
                            <path fill="#23438f" d="M313.6 304c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4 14.6 0 38.3 16 89.6 16 51.7 0 74.9-16 89.6-16 47.6 0 86.4 38.8 86.4 86.4V464zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0 80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z"></path>
                        </svg>
                        <a href="" class="nav_link">Iniciar sesión</a>
                    </div>
                </li>
                <li class="list_item">
                    <div class="list_button">
                        <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                        </svg>
                        <a href="" class="nav_link">Regístrate</a>
                    </div>
                </li>
                <li class="list_item">
                    <div class="list_button">
                        <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-egg-fried" viewBox="0 0 16 16">
                            <path d="M8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                            <path d="M13.997 5.17a5 5 0 0 0-8.101-4.09A5 5 0 0 0 1.28 9.342a5 5 0 0 0 8.336 5.109 3.5 3.5 0 0 0 5.201-4.065 3.001 3.001 0 0 0-.822-5.216zm-1-.034a1 1 0 0 0 .668.977 2.001 2.001 0 0 1 .547 3.478 1 1 0 0 0-.341 1.113 2.5 2.5 0 0 1-3.715 2.905 1 1 0 0 0-1.262.152 4 4 0 0 1-6.67-4.087 1 1 0 0 0-.2-1 4 4 0 0 1 3.693-6.61 1 1 0 0 0 .8-.2 4 4 0 0 1 6.48 3.273z"/>
                          </svg>
                        <a href="productos.php" class="nav_link">Alimentos y snacks</a>
                    </div>
                </li>
                <li class="list_item">
                    <div class="list_button">
                        <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cup-straw" viewBox="0 0 16 16">
                            <path d="M13.902.334a.5.5 0 0 1-.28.65l-2.254.902-.4 1.927c.376.095.715.215.972.367.228.135.56.396.56.82q0 .069-.011.132l-.962 9.068a1.28 1.28 0 0 1-.524.93c-.488.34-1.494.87-3.01.87s-2.522-.53-3.01-.87a1.28 1.28 0 0 1-.524-.93L3.51 5.132A1 1 0 0 1 3.5 5c0-.424.332-.685.56-.82.262-.154.607-.276.99-.372C5.824 3.614 6.867 3.5 8 3.5c.712 0 1.389.045 1.985.127l.464-2.215a.5.5 0 0 1 .303-.356l2.5-1a.5.5 0 0 1 .65.278M9.768 4.607A14 14 0 0 0 8 4.5c-1.076 0-2.033.11-2.707.278A3.3 3.3 0 0 0 4.645 5c.146.073.362.15.648.222C5.967 5.39 6.924 5.5 8 5.5c.571 0 1.109-.03 1.588-.085zm.292 1.756C9.445 6.45 8.742 6.5 8 6.5c-1.133 0-2.176-.114-2.95-.308a6 6 0 0 1-.435-.127l.838 8.03c.013.121.06.186.102.215.357.249 1.168.69 2.438.69s2.081-.441 2.438-.69c.042-.029.09-.094.102-.215l.852-8.03a6 6 0 0 1-.435.127 9 9 0 0 1-.89.17zM4.467 4.884s.003.002.005.006zm7.066 0-.005.006zM11.354 5a3 3 0 0 0-.604-.21l-.099.445.055-.013c.286-.072.502-.149.648-.222"/>
                          </svg>
                        <a href="bebidas.php" class="nav_link">Bebidas</a>
                    </div>
                </li>
            </ul>
        </nav>
    </section>

      <!-- logo -->
      <div style="margin: right 20px;flex-shrink:0" class=" md:w-48">
        <img style=" margin-right: 40px;height:3rem;" class="md:h-10" src="../images/PepsiCo_logo.svg.png" alt="">
      </div>
      <div style="display: flex;align-items: center;justify-content: center;" class="search-box">
        <form action="">
            <div style="margin-right: 70px;"  class="search-container">
                <input type="text" name="producto" size="20" placeholder="Buscar productos">
                <button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                    </svg>
                </button>
            </div>
        </form>
    </div>
      <!-- buttons -->
      <nav style="display:contents">
        <ul style="justify-content:flex-end;display:flex;align-items:center" class="xl:w-48">
          <li style="margin-left:1rem;display:inline-block;position:relative">
            <a class="nav-link" href="Nosotros.php" style="font-weight: normal; color: #23438f; text-decoration: none;"
               onmouseover="this.style.fontWeight='bold'; this.style.color='#23438f';"
               onmouseout="this.style.fontWeight='normal'; this.style.color='#23438f';">
               Sobre nosotros
            </a>
          </li>
          <li style="margin-left:1rem;display:inline-block;position:relative">
            <a class="nav-link" href="productos.php" style="font-weight: normal; color: #23438f; text-decoration: none;"
               onmouseover="this.style.fontWeight='bold'; this.style.color='#23438f';"
               onmouseout="this.style.fontWeight='normal'; this.style.color='#23438f';">
               Productos
            </a>
          </li>
          <li style="margin-left:1rem;display:inline-block;position:relative">
            <a class="nav-link" href="" style="font-weight: normal; color: #23438f; text-decoration: none;"
               onmouseover="this.style.fontWeight='bold'; this.style.color='#23438f';"
               onmouseout="this.style.fontWeight='normal'; this.style.color='#23438f';">
               Ofertas especiales
            </a>
          </li>
        </ul>
      </nav>
      <!-- buttons -->
      <nav style="margin-left: 70px;display:contents" class="">
        <ul style="margin-left:1rem;justify-content:flex-end;display:flex;align-items:center" class=" xl:w-48 ">
          <li style="margin-left:1rem;display:inline-block;font-weight: bold;position:relative" class="  ">
            <a class="" href="">
              <svg style="height: 2.25rem;padding:0.5rem" class=" lg:h-10  " aria-hidden="true" focusable="false" data-prefix="far" data-icon="user" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-user fa-w-14 fa-9x"><path fill="currentColor" d="M313.6 304c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4 14.6 0 38.3 16 89.6 16 51.7 0 74.9-16 89.6-16 47.6 0 86.4 38.8 86.4 86.4V464zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0 80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z"></path></svg>
            </a>
          </li>
          <li style="margin-left:1rem;display:inline-block;font-weight: bold;position:relative" class="  ">
            <a class="" href="">
              <div id="contador-compras" style="--tw-bg-opacity: 1;background-color: rgb(74 99 159);position:absolute;padding-left:0.25rem;padding-right:0.25rem;padding-top:0px;padding-bottom:0px;font-weight:700;color: aliceblue;font-size:0.75rem;line-height:1rem;border-radius:0.125rem;right:0px;z-index:10;top:-0.25rem" class="  ">0</div>
              <svg style="height: 2.25rem;padding:0.5rem" class=" lg:h-10  " aria-hidden="true" focusable="false" data-prefix="far" data-icon="heart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-heart fa-w-16 fa-9x"><path fill="currentColor" d="M458.4 64.3C400.6 15.7 311.3 23 256 79.3 200.7 23 111.4 15.6 53.6 64.3-21.6 127.6-10.6 230.8 43 285.5l175.4 178.7c10 10.2 23.4 15.9 37.6 15.9 14.3 0 27.6-5.6 37.6-15.8L469 285.6c53.5-54.7 64.7-157.9-10.6-221.3zm-23.6 187.5L259.4 430.5c-2.4 2.4-4.4 2.4-6.8 0L77.2 251.8c-36.5-37.2-43.9-107.6 7.3-150.7 38.9-32.7 98.9-27.8 136.5 10.5l35 35.7 35-35.7c37.8-38.5 97.8-43.2 136.5-10.6 51.1 43.1 43.5 113.9 7.3 150.8z"></path></svg>
            </a>
          </li>
          <li style="margin-left:1rem;display:inline-block;font-weight: bold;position:relative" class="">
            <a class="" href="">
              <div style="--tw-bg-opacity: 1;background-color: rgb(74 99 159);position:absolute;padding-left:0.25rem;padding-right:0.25rem;font-weight:700;color: aliceblue;font-size:0.75rem;line-height:1rem;border-radius:0.125rem;right:0px;z-index:10;top:-0.25rem" class="  "><span id="contador"><output id="contador">0</output></span></div>
              <svg style="height: 2.25rem;padding:0.5rem" class=" lg:h-10  " aria-hidden="true" focusable="false" data-prefix="far" data-icon="shopping-cart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-shopping-cart fa-w-18 fa-9x"><path fill="currentColor" d="M551.991 64H144.28l-8.726-44.608C133.35 8.128 123.478 0 112 0H12C5.373 0 0 5.373 0 12v24c0 6.627 5.373 12 12 12h80.24l69.594 355.701C150.796 415.201 144 430.802 144 448c0 35.346 28.654 64 64 64s64-28.654 64-64a63.681 63.681 0 0 0-8.583-32h145.167a63.681 63.681 0 0 0-8.583 32c0 35.346 28.654 64 64 64 35.346 0 64-28.654 64-64 0-18.136-7.556-34.496-19.676-46.142l1.035-4.757c3.254-14.96-8.142-29.101-23.452-29.101H203.76l-9.39-48h312.405c11.29 0 21.054-7.869 23.452-18.902l45.216-208C578.695 78.139 567.299 64 551.991 64zM208 472c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm256 0c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm23.438-200H184.98l-31.31-160h368.548l-34.78 160z"></path></svg>
            </a>
          </li>
        </ul>
      </nav>         
    <hr style="height:0;color:inherit;border-top-width:1px">
</header>
<div class="login-container">
            <div class="login-card">
                <img src="../images/PepsiCo_logo.png" alt="PepsiCo Logo"style="width: 240px;px;height:68px;margin-top:10px;" class="logo">
                <img src="../images/logoazul.png" alt="Reclamacionesimg"style="width: 240px;px;height:68px;margin-top:10px;" class="logolibro">
                <h1><strong>LIBRO DE RECLAMACIONES</strong></h1>
                <h2><strong> RUC: 20100177855</strong></h2>
               

                <form id="registro-form">
                    <!-- Separador y título de sección -->
                    <div class="section-separator"></div>
                    <div class="section-title">1. Identificación del Cliente </div>
                  <div class="form-group-row">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre">
                    </div>
                    <div class="form-group">
                        <label for="apellido-paterno">Apellido Paterno</label>
                        <input type="text" id="apellido-paterno" name="apellido-paterno">
                    </div>
                    <div class="form-group">
                        <label for="apellido-materno">Apellido Materno</label>
                        <input type="text" id="apellido-materno" name="apellido-materno">
                    </div>
                </div>
                <div class="form-group">
                  <label for="direccion">Dirección</label>
                  <input type="text" id="direccion" name="direccion">
              </div>
              <div class="form-group-row">
                <div class="form-group">
                    <label for="tipo-documento">Tipo de Documento</label>
                    <select id="tipo-documento" name="tipo-documento">
                        <option value="dni">Documento de Identidad</option>
                        <option value="pasaporte">Pasaporte de Extranjería</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="numero-documento">Número de Documento</label>
                    <input type="text" id="numero-documento" name="numero-documento">
                </div>
            </div>

            <div class="form-group-row">
              <div class="form-group">
                  <label for="telefono">Teléfono</label>
                  <input type="text" id="telefono" name="telefono" required>
              </div>
              <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" name="email" required>
              </div>
          </div>
                    <!-- Quinta fila: Edad -->
    <div class="form-group">
      <div class="form-group">
        <label for="edad">Edad</label>
        <input type="number" id="edad" name="edad" required>
    </div>
    <div class="form-group">
        <label for="id_cliente">ID de cliente</label>
        <input type="text" id="id_cliente" name="id_cliente" required>
    </div>
  </div>

  <!-- Separador y título de sección -->
  <div class="section-separator"></div>
  <div class="section-title">2. Identificación de Venta</div>

  <!-- Sexta fila: Número de factura -->
  <div class="form-group">
      <label for="numero-factura">Número de Factura</label>
      <input type="text" id="numero-factura" name="numero-factura">
  </div>
    
     <!-- Séptima fila: Moneda de pago y Monto pagado -->
    <div class="form-group-row">
      <div class="form-group">
          <label for="moneda-pago">Moneda de Pago</label>
          <select id="moneda-pago" name="moneda-pago">
              <option value="soles">Soles</option>
              <option value="dolares">Dólares</option>
          </select>
      </div>
      <div class="form-group">
          <label for="monto-pagado">Monto Pagado</label>
          <input type="number" step="0.01" id="monto-pagado" name="monto-pagado">
      </div>
  </div>

  <!-- Octava fila: Motivo de la reclamación -->
  <div class="form-group">
      <label for="motivo-reclamacion">Motivo de la Reclamación</label>
      <input type="text" id="motivo-reclamacion" name="motivo-reclamacion">
  </div>

  <!-- Novena fila: Descripción de la reclamación -->
  <div class="form-group">
      <label for="descripcion-reclamacion">Descripción de la Reclamación</label>
      <textarea id="descripcion-reclamacion" name="descripcion-reclamacion" rows="18"></textarea>
  </div>
                    <button type="submit" class="login-button" style="margin-left: 150px;margin-top: 12px;"><strong>REGISTRAR</strong></button>
                    <div class="form-group">
                      <button type="button" class="btn-print" onclick="printForm()">Imprimir</button>
                  </div>
                
                  </form>
            </div>
        </div>

        <footer class="pie-pagina" style="background: linear-gradient(to right, #a6a6a6, #ffffff);">
          <div class="grupo-1">
              <div class="caja">
                  <figure class="logofooter" style="padding-left: 0%;
                  margin-left: 0px;margin-bottom: 0px;padding-bottom: 0%;height: 112px;">
                          <img style="height: 69.39px;width: 250px;padding-left: 0%;" src="../images/PepsiCo_logo.svg.png">
                  </figure>
                  <div class="red-social">
                      <a href="https://www.facebook.com/PepsiCoPeru/?locale=es_LA"><img src="../images/fb.png"></a>
                      <a href="https://www.instagram.com/pepsicoperu/?hl=es"><img src="../images/ig.png"></a>
                      <a href="https://x.com/PepsiCo"><img src="../images/x.png"></a>
                      <a href="https://pe.linkedin.com/company/pepsico"><img src="../images/in.png"></a>
                  </div>
              </div>
              <div class="caja">
                  <h2>SOBRE NOSOTROS</h2>
                  <section class="links-section">
                      <a href="Nosotros.php#nuestra-empresa">Nuestra empresa</a><br>
                      <a href="Nosotros.php#mision-vision">Misión y visión</a><br>
                      <a href="Nosotros.php#nuestra-historia">Nuestra historia</a>
                  </section>       
              </div>
              <div class="caja">
                  <h2>¿NECESITAS AYUDA?</h2>
                  <section class="links-section">
                      <a href="">Términos de uso</a><br>
                      <a href="">Política de Privacidad</a><br>
                      <a href="">Configuración de cookies</a>
                      <a href="Reclamos.php">Libro de Reclamaciones</a>
                  </section>
              </div>
          </div>
          <div class="grupo-2">
              <small>&copy; 2024 Pepsico - Todo los Derechos Reservados.</small>
          </div>
        </footer>
</body>
</html>

<?php
// Datos de conexión a la base de datos
$user = "root";
$pass = "";
$host = "localhost:3306"; // Si estás utilizando un puerto diferente, asegúrate de que sea el correcto
$bd = "bdpepsico";

// Conexión a la base de datos
$connection = mysqli_connect($host, $user, $pass, $bd);

// Verificamos la conexión a la base de datos
if (!$connection) {
    die("No se ha podido conectar con el servidor: " . mysqli_connect_error());
} 

// Cerramos la conexión a la base de datos
mysqli_close($connection);
?>
