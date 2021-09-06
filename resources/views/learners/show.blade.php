@extends('layouts.template')
@section('content')

<!DOCTYPE html>
<html>
<head>
<title>Registro Aprendiz</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body>

<div class= "container">
    <div class= "row">
    <div class= "col-md-9 offset-md-3">
        <table class="table table-success table-striped">
        <tr>
            <th class="text-center" colspan="6" >Detalles Aprendiz</th>
        </tr>
                <tr>
                <th scope="col"># Identificacion</th>
                <td>{{ $learner-> identificationnumber}}</td>
                <th scope="col">Ficha</th>
                <td>{{ $learner-> course_id}}</td> 
                <th scope="col">Jornada</th>
                <td>{{$workingday['name']}}</td>
                </tr>
                <tr>
                <th scope="col">Nombre </th>
                <td>{{ $learner-> name}}</td>
                <th scope="col">Apellido</th>
                <td>{{ $learner-> lastaname}}</td>
                <th scope="col">Email</th>
                <td>{{ $learner-> email}}</td>
                </tr>
                <tr>
                <th colspan="2" scope="col">Programa</th>
                <td>{{$program['name']}}</td>
                <th colspan="2" scope="col">Instructor</th>
                <td>{{$instruSena['name']}} {{$instruSena['lastaname']}}</td> 
                </tr>
            </table>
            <a href="{{route('learners.index')}}" class="btn btn-outline-success">Regresar</a>
            <a  href="{{route('learners.edit', $learner->id)}}" class="btn btn-outline-secondary">Editar</a>                
        </div>
    </div>
</div>

</body>

</html>









@endsection 