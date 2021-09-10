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
        <form action ="{{route('InstruSenas.update', $InstruSena->id)}}" method = "POST"> 
        @csrf 
        @method('PUT')
        <table class="table table-success table-striped">
                <tr>
                <th class="text-center" colspan="4" scope="col">Editar Instructor</th>
                </tr>
                <tr>
                <th scope="col"># Identificacion</th>
                <td> <input type ="text" class ="from-control" name ="identificationnumber" value = "{{ $InstruSena-> identificationnumber}}"> </td>
                <th  scope="col">Jornada</th>
                <td > <input type ="text" class ="from-control" name ="workingday_id" value = "{{$workingday['name']}}" disabled> </td>
                </tr>
                <th colspan="2" scope="col">Ficha</th>
                <td colspan="2"> <input type ="text" class ="from-control" name ="courses_id" value = "{{ $InstruSena-> courses_id}}"> </td>
                </tr>
                <tr>
                <th scope="col">Nombre </th>
                <td> <input type ="text" class ="from-control" name ="name" value = "{{ $InstruSena-> name}}"></td>
                <th scope="col">Apellido</th>
                <td> <input type ="text" class ="from-control" name ="lastaname" value = "{{ $InstruSena-> lastaname}}"></td>
                </tr>
                <tr>
                <th  colspan="2"scope="col">Email</th>
                <td  colspan="2"> <input type ="text" class ="from-control" name ="email" value = "{{ $InstruSena-> email}}"> </td>
                </tr>
                <tr>
                <th scope="col">Programa</th>
                <td colspan="4"> <input style="width: 508px;" class ="from-control" name ="program_id" value = "{{$program['name']}}" disabled></td>
                </tr>
                <tr>
            </table>
           <button type ="submit" class="btn btn-outline-secondary">Guardar Cambios</button>                
           <a href="{{route('InstruSenas.index')}}" class="btn btn-outline-success">Regresar</a>
        
            </form>
        </div>
    </div>
</div>

</body>

</html>









@endsection 