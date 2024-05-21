<!DOCTYPE html>
<html lang="en">
<head>
    <title>Encuesta LIEE</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
    <link rel="stylesheet" href="styles.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


    <style>
        /* Personalización de las flechas del carrusel */
        .carousel-caption {
            color: rgb(0, 0, 0); /* Cambia el color del texto a blanco */
            margin-top: 80px; /* Agrega margen superior para separar el texto del carrusel */
        }
    </style>

    <style>
        /* Estilos para las imágenes dentro del carrusel */
        .carousel-item img{
            border-radius: 5px; /* Bordes redondeados */
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5); /* Sombra suave */
        }
    </style>

      <style>
        /* Estilos para centrar el contenedor */
        .centered-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 30vh;
        }
    </style>

   









    
</head>

<body>

<div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
        <li data-target="#demo" data-slide-to="3"></li>
        <li data-target="#demo" data-slide-to="4"></li>
        <li data-target="#demo" data-slide-to="5"></li>
        <li data-target="#demo" data-slide-to="6"></li>
    </ul>

  
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="INAOE template\img\esfera.png" class="d-block w-100" alt="1raimagen">
            <div class="carousel-caption">
                <h3></h3>
                <p></p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="INAOE template\img\ciclochoque.png" class="d-block w-100" alt="2daimagen">
            <div class="carousel-caption">
                <h3></h3>
                <p></p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="INAOE template\img\conmuta.png" class="d-block w-100" alt="3raimagen">
            <div class="carousel-caption">
                <h3></h3>
                <p></p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="INAOE template\img\sobreten.png" class="d-block w-100" alt="4taimagen">
            <div class="carousel-caption">
                <h3></h3>
                <p></p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="INAOE template\img\fotogo.png" class="d-block w-100" alt="5taimagen">
            <div class="carousel-caption">
                <h3></h3>
                <p></p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="INAOE template\img\saludvisual.png" class="d-block w-100" alt="6taimagen">
            <div class="carousel-caption">
                <h3></h3>
                <p></p>
            </div>
        </div>
    </div>


  
    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
  
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>







<div class="w3-container w3-center w3-alerta">
    <br>
    <p class="w3-xxxlarge">Encuesta de Calidad de Servicio</p>
</div>
<div class="w3-container w3-center">
    <h4>Estimado cliente, solicitamos su apoyo y tiempo para atender esta encuesta. Sus respuestas serán de gran utilidad para la mejora de nuestros servicios.</h4>
</div>


<br>
<br>
<br>
<div class="container">
    <h2>Correo Electronico</h2>
    <form action="/action_page.php">
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Correo Electronico" name="email">
      </div>
      <!-- <button type="submit" class="btn btn-primary">Submit</button> -->

    </form>
  </div>


  <div class="container">
    <label for="usr">Nombre:</label>
    <input type="text" class="form-control" id="usr">
  </div>

  <div class="container">
    <label for="usr">Empresa o Institución que recibió o facturó el  servicio:</label>
    <input type="text" class="form-control" id="usr">
  </div>
  
  <div class="w3-container w3-center">
    <h5>En las siguientes aseveraciones, marque la casilla con la que mejor se identifique.</h5>
    <br>
  </div>



<div class="centered-container w3-center">
    <div>

        <div class="w3-container w3-center">
            <h5>1. Considera adecuado el servicio que recibió</h5>
          </div>
        <!-- Tu código HTML aquí -->
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> Totalmente en desacuerdo
            </label>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> En desacuerdo
            </label>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> Ni de acuerdo ni en desacuerdo
            </label>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> De acuerdo
            </label>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> Totalmente de acuerdo
            </label>
        </div>
    </div>
</div>



<div class="centered-container w3-center">
    <div>

        <div class="w3-container w3-center">
            <h5>2. Tuvo una buena experiencia en la contratación de servicios del LIEE</h5>
          </div>
        <!-- Tu código HTML aquí -->
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> Totalmente en desacuerdo
            </label>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> En desacuerdo
            </label>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> Ni de acuerdo ni en desacuerdo
            </label>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> De acuerdo
            </label>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> Totalmente de acuerdo
            </label>
        </div>
    </div>
</div>



<div class="centered-container w3-center">
    <div>

        <div class="w3-container w3-center">
            <h5>3. Fueron bien atendidas sus inquietudes, solicitudes y/o quejas</h5>
          </div>
        <!-- Tu código HTML aquí -->
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> Totalmente en desacuerdo
            </label>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> En desacuerdo
            </label>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> Ni de acuerdo ni en desacuerdo
            </label>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> De acuerdo
            </label>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> Totalmente de acuerdo
            </label>
        </div>
    </div>
</div>

<div class="centered-container w3-center">
    <div>

        <div class="w3-container w3-center">
            <h5>4. Se le informó de manera oportuna sobre el avance de la ejecución del servicio de  ensayo.</h5>
          </div>
        <!-- Tu código HTML aquí -->
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> Totalmente en desacuerdo
            </label>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> En desacuerdo
            </label>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> Ni de acuerdo ni en desacuerdo
            </label>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> De acuerdo
            </label>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> Totalmente de acuerdo
            </label>
        </div>
    </div>
</div>




<div class="centered-container w3-center">
    <div>

        <div class="w3-container w3-center">
            <h5>5. La entrega de los resultados fue puntual</h5>
          </div>
        <!-- Tu código HTML aquí -->
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> Totalmente en desacuerdo
            </label>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> En desacuerdo
            </label>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> Ni de acuerdo ni en desacuerdo
            </label>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> De acuerdo
            </label>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> Totalmente de acuerdo
            </label>
        </div>
    </div>
</div>


<div class="centered-container w3-center">
    <div>

        <div class="w3-container w3-center">
            <h5>6. Considera que los resultados obtenidos son claros, exactos y objetivos.</h5>
          </div>
        <!-- Tu código HTML aquí -->
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> Totalmente en desacuerdo
            </label>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> En desacuerdo
            </label>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> Ni de acuerdo ni en desacuerdo
            </label>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> De acuerdo
            </label>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> Totalmente de acuerdo
            </label>
        </div>
    </div>
</div>



<div class="centered-container w3-center">
    <div>

        <div class="w3-container w3-center">
            <h5>7. Volverá a contratar y/o recomendará los servicios del LIEE.</h5>
          </div>
        <!-- Tu código HTML aquí -->
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> Totalmente en desacuerdo
            </label>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> En desacuerdo
            </label>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> Ni de acuerdo ni en desacuerdo
            </label>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> De acuerdo
            </label>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> Totalmente de acuerdo
            </label>
        </div>
    </div>
</div>




<div class="centered-container w3-center">
    <div>

        <div class="w3-container w3-center">
            <h5>8. Recibió la atención adecuada al reclamo o queja que realizó.</h5>
          </div>
        <!-- Tu código HTML aquí -->
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> Totalmente en desacuerdo
            </label>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> En desacuerdo
            </label>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> Ni de acuerdo ni en desacuerdo
            </label>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> De acuerdo
            </label>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> Totalmente de acuerdo
            </label>
        </div>
    </div>
</div>




<div class="centered-container w3-center">
    <div>

        <div class="w3-container w3-center">
            <h5>9. Considera que el tiempo empleado en atender el reclamo efectuado fue apropiado.</h5>
          </div>
        <!-- Tu código HTML aquí -->
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> Totalmente en desacuerdo
            </label>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> En desacuerdo
            </label>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> Ni de acuerdo ni en desacuerdo
            </label>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> De acuerdo
            </label>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> Totalmente de acuerdo
            </label>
        </div>
    </div>
</div>




<div class="centered-container w3-center">
    <div>

        <div class="w3-container w3-center">
            <h5>10.  Considera que las acciones tomadas ante el reclamo o queja realizada fueron las adecuadas.</h5>
          </div>
        <!-- Tu código HTML aquí -->
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> Totalmente en desacuerdo
            </label>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> En desacuerdo
            </label>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> Ni de acuerdo ni en desacuerdo
            </label>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> De acuerdo
            </label>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio"> Totalmente de acuerdo
            </label>
        </div>
    </div>
</div>





<div class="form-group centered-container w3-center">
    <label for="comment">11. Comentarios o sugerencias (Aspectos que se pueden mejorar):</label>
    <textarea class="form-control" rows="5" id="comment"></textarea>
  </div>




  <button type="button" class="btn btn-primary btn-block">Enviar</button>






</body>
</html>