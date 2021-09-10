<!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>Formulario</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="estilos.css">
    </head>

    <body>
        <a id="inicio">
      <div class="logo"></div>
        </a>
            <a href="/" class="inicio">Inicio</a>
            <div><a href="{{route('learners.create')}}" class="ingresarAprendiz">Ingresar Aprendiz</a></div>
            <div><a href="{{route('InstruSenas.create')}}" class="ingresarInstructor">Ingresar Instructor</a></div>
            <div><a href="{{route('reports.index')}}"class="reporte">Reporte de asistencia</a></div>
            <div><a href="{{route('learners.index')}}" class="aprendices">Aprendices</a></div>
            <div><a href="{{route('InstruSenas.index')}}" class="instructores">Instructores</a></div>

        <!-- Content--->
        <div class= "col-md-12">
             @yield('content')
        </div>
        <!-- end Content-->
            
  |         </div>

    </body>
<footer class="text-center">
 Control Asistencia - 2021 - Jessica Carolina Zabala
</footer>

<style>

body { 
  font-family: 'Segoe UI', Arial;
  height: 100%;
  width: 100%;
}

.logo{
  background-image: url("sena_logo.png");
  height: 130px;
  width: 130px;
  cursor: pointer;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: center;
  margin-left: 80.00px;
  margin-top: 40.00px;
}

.cuadrado {
     width: 300; 
     height: 300; 
     background: #d1e7dd;
}

.inicio {
  position: absolute;
  box-sizing: content-box;
  cursor: pointer;
  background-color: rgba(255, 255, 255, 0);
  text-align: left;
  color: rgba(112, 112, 112, 1);
  font-size: 25.00px;
  font-weight: 400;
  font-style: normal;
  text-decoration: none;
  width: 390.00px;
  height: 67.00px;
  left: 200.00px;
  top: 70.00px;
}

.ingresarAprendiz {
  position: absolute;
  box-sizing: content-box;
  cursor: pointer;
  background-color: rgba(255, 255, 255, 0);
  text-align: left;
  color: rgba(112, 112, 112, 1);
  font-size: 25.00px;
  font-weight: 400;
  font-style: normal;
  text-decoration: none;
  width: 390.00px;
  height: 67.00px;
  left: 350.00px;
  top: 70.00px;
}

.ingresarInstructor {
  position: absolute;
  box-sizing: content-box;
  cursor: pointer;
  background-color: rgba(255, 255, 255, 0);
  color: rgba(112, 112, 112, 1);
  font-size: 25.00px;
  font-weight: 400;
  font-style: normal;
  font-family: 'Segoe UI', Arial;
  text-decoration: none;
  white-space: pre;
  width: 404.00px;
  height: 67.00px;
  left: 600.00px;
  top: 70.00px;
}

.reporte {
  position: absolute;
  box-sizing: content-box;
  cursor: pointer;
  background-color: rgba(255, 255, 255, 0);
  color: rgba(112, 112, 112, 1);
  font-size: 25.00px;
  font-weight: 400;
  font-style: normal;
  font-family: 'Segoe UI', Arial;
  text-decoration: none;
  white-space: pre;
  width: 469.00px;
  height: 67.00px;
  left: 850.00px;
  top: 70.00px;
}

.controlAprendices {
  position: absolute;
  box-sizing: content-box;
  cursor: default;
  background-color: rgba(255, 255, 255, 0);
  color: rgba(112, 112, 112, 1);
  font-size: 25.00px;
  font-weight: 400;
  font-style: normal;
  font-family: 'Segoe UI', Arial;
  text-decoration: none;
}

.aprendices {
  position: absolute;
  box-sizing: content-box;
  cursor: pointer;
  background-color: rgba(255, 255, 255, 0);
  color: rgba(112, 112, 112, 1);
  font-size: 25.00px;
  font-weight: 400;
  font-style: normal;
  font-family: 'Segoe UI', Arial;
  text-decoration: none;
  white-space: pre;
  width: 245.00px;
  height: 67.00px;
  left: 120.00px;
  top: 180.00px;
}

.instructores {
  position: absolute;
  box-sizing: content-box;
  cursor: pointer;
  background-color: rgba(255, 255, 255, 0);
  color: rgba(112, 112, 112, 1);
  font-size: 25.00px;
  font-weight: 400;
  font-style: normal;
  font-family: 'Segoe UI', Arial;
  text-decoration: none;
  white-space: pre;
  width: 260.00px;
  height: 67.00px;
  left: 120.00px;
  top: 250.00px;
}


</style>

</html>
            