@extends('layouts.template')
@section('content')

<!DOCTYPE html>
<html>
<head>
<title>Registro Asistencia</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body>

<div class= "container">
  <!--  <div class= "row">
        <div class= "col-md-12 offset-md-3">
          <nav class="navbar navbar-light float-right">
            <form class="form-inline" >
                Fecha: <input name="searchdate" class="buscador" type="date" >
                Aprendiz: <input name="searchtype" class="buscador" type="checkbox">
                Instructor:  <input name="searchtype" class="buscador" type="checkbox">
               
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
           </nav>
        </div>-->
        <div class= "col-md-9 offset-md-3">
        <table class="table table-success table-striped">
          <thead>
                <tr>
                <th class="text-center" colspan="7" >Registro Asistencia</th>
                </tr>
                <tr>
                <th scope="col"># Identificacion</th>
                <th scope="col">Nombre </th>
                <th scope="col">Apellido</th>
                <th scope="col">Asistente</th>
                <th scope="col">Ficha</th>
                <th scope="col">Acciones </th>
                </tr>
            </thead>
            <tbody>
            @foreach($Reports as $Report)    
                <tr>
                <td>{{ $Report-> identificationnumber}}</td>
                <td>{{ $Report-> name}}</td>
                <td>{{ $Report-> lastaname}}</td>
                <td>{{ $Report-> type}}</td>
                <td>{{ $Report-> course_id}}</td> 
                <td>
                    <form action="{{route('reports.destroy', $Report->id)}}" method ="post" >
                    @csrf 
                    @method('DELETE')                    
                    <a href="{{route('reports.show', $Report->id)}}" class="btn btn-outline-success">Detalles</a>
                 
                    </form>
                </td>
                </tr>
            @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>

</body>

</html>







@endsection