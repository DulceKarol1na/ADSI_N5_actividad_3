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
          <thead>
          <tr>
            <th class="text-center" colspan="6" >Aprendices</th>
        </tr>
                <tr>
                <th scope="col"># Identificacion</th>
                <th scope="col">Nombre </th>
                <th scope="col">Apellido</th>
                <th scope="col">Email</th>
     <!--       <th scope="col">Jornada</th>
                <th scope="col">Programa</th>
                <th scope="col">Ficha</th>
                <th scope="col">Instructor</th> -->
                <th scope="col"> Acciones </th>
                </tr>
            </thead>
            <tbody>
            @foreach($learners as $learner)    
                <tr>
                <td>{{ $learner-> identificationnumber}}</td>
                <td>{{ $learner-> name}}</td>
                <td>{{ $learner-> lastaname}}</td>
                <td>{{ $learner-> email}}</td>
             <!--<td>{{ $learner-> workingday_id}}</td>
                <td>{{ $learner-> program_id}}</td>
                <td>{{ $learner-> course_id}}</td> 
                <td>{{ $learner-> instructor_id}}</td>-->
                <td>
                    <form action="{{route('learners.destroy', $learner->id)}}" method ="post" >
                    @csrf 
                    @method('DELETE')                    
                    <a href="{{route('learners.show', $learner->id)}}" class="btn btn-outline-success">Detalles</a>
                    <a href="{{route('learners.edit', $learner->id)}}" class="btn btn-outline-secondary">Editar</a> 
                    <button class="btn btn-outline-danger" type="submit" >Eliminar</button>
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