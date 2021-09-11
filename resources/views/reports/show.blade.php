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
    <div class= "row">
    <div class= "col-md-9 offset-md-3">
        <table class="table table-success table-striped">
                <tr>
                <th class="text-center" colspan="6" scope="col">Detalles de Reporte</th>
                </tr>
                <tr>
                <th  scope="col">Asistente</th>
                <td colspan="2" >{{ $Report-> type}}</td>
                <th  scope="col">Fecha de registro</th>
                <td colspan="2" >{{ $Report-> updated_at}}</td>        
                </tr>          
                <tr>
                <th scope="col"># Identificacion</th>
                <td>{{ $Report-> identificationnumber}}</td>
                <th scope="col">Ficha</th>
                <td>{{ $Report-> course_id}}</td> 
                <th scope="col">Jornada</th>
                <td>{{$workingday['name']}}</td> 
                </tr>
                <tr>
                <th scope="col">Nombre </th>
                <td>{{ $Report-> name}}</td>
                <th scope="col">Apellido</th>
                <td>{{ $Report-> lastaname}}</td>
                <th scope="col">Email</th>
                <td>{{ $Report-> email}}</td>
                </tr>
                <tr>
               <!-- <th colspan="2" scope="col">Programa</th>
                <td>{{$program['name']}}</td>
                <th colspan="2" scope="col">Instructor</th> 
                <td>{{$instruSena['name']}} {{$instruSena['lastname']}}</td> 
                </tr> -->
            </table>
            <a href="{{route('reports.index')}}" class="btn btn-outline-success">Regresar</a>
                           
        </div>
    </div>
</div>

</body>

</html>









@endsection 