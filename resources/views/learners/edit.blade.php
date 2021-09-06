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
        <form action ="{{route('learners.update', $learner->id)}}" method = "POST"> 
        @csrf 
        @method('PUT')
        <table class="table table-success table-striped">
                <tr>
                <th scope="col"># Identificacion</th>
                <td> <input type ="text" class ="from-control" name ="identificationnumber" value = "{{ $learner-> identificationnumber}}"> </td>
                <th scope="col">Ficha</th>
                <td> <input type ="text" class ="from-control" name ="course_id" value = "{{ $learner-> course_id}}"></td> 
                </tr>
                <th colspan="2" scope="col">Jornada</th>
                <td colspan="2"> <input type ="text" class ="from-control" name ="workingday_id" value = "{{ $learner-> workingday_id}}"> </td>
                </tr>
                <tr>
                <th scope="col">Nombre </th>
                <td> <input type ="text" class ="from-control" name ="name" value = "{{ $learner-> name}}"></td>
                <th scope="col">Apellido</th>
                <td> <input type ="text" class ="from-control" name ="lastaname" value = "{{ $learner-> lastaname}}"></td>
                </tr>
                <tr>
                <th  colspan="2"scope="col">Email</th>
                <td  colspan="2"> <input type ="text" class ="from-control" name ="email" value = "{{ $learner-> email}}"> </td>
                </tr>
                <tr>
                <th colspan="2" scope="col">Programa</th>
                <td colspan="2"> <input type ="text" class ="from-control" name ="program_id" value = "{{ $learner-> program_id}}"></td>
                </tr>
                <tr>
                <th colspan="2" scope="col">Instructor</th>
                <td colspan="2"> <input type ="text" class ="from-control" name ="instructor_id" value = "{{ $learner-> instructor_id}}"></td> 
                </tr>
            </table>
           <button type ="submit" class="btn btn-outline-secondary">Guardar Cambios</button>                
           <a href="{{route('learners.index')}}" class="btn btn-outline-success">Regresar</a>
        
            </form>
        </div>
    </div>
</div>

</body>

</html>









@endsection 