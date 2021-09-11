@extends('layouts.template')
@section('content')

<!DOCTYPE html>
<html>
<head>
<title>Editar Instructor</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body>

<div class= "container">
    <div class= "row">
    <div class= "col-md-9 offset-md-3">
        <form action ="{{route('InstruSenas.update', $instruSena->id)}}" method = "POST"> 
        @csrf 
        @method('PUT')
        <table class="table table-success table-striped">
                <tr>
                    <th class="text-center" colspan="4" >Editar Instructor</th>
                </tr>
                <tr>
                <th scope="col"># Identificacion</th>
                <td> <input type ="text" class ="from-control" name ="identificationnumber" value = "{{ $instruSena-> identificationnumber}}"> </td>
                <th  scope="col">Jornada</th>
                <td > 
                    <select name ="workingday_id" id="workingday_id">
                            <option value = "{{ $instruSena-> workingday_id}}"> {{$workingday['name']}}</option>
                    </select>
                </td>
                </tr>
                <th colspan="2" scope="col">Ficha</th>
                <td colspan="2"> <input type ="text" class ="from-control" name ="courses_id" value = "{{ $instruSena-> courses_id}}"> </td>
                </tr>
                <tr>
                <th scope="col">Nombre </th>
                <td> <input type ="text" class ="from-control" name ="name" value = "{{ $instruSena-> name}}"></td>
                <th scope="col">Apellido</th>
                <td> <input type ="text" class ="from-control" name ="lastaname" value = "{{ $instruSena-> lastaname}}"></td>
                </tr>
                <tr>
                <th  colspan="2"scope="col">Email</th>
                <td  colspan="2"> <input type ="text" class ="from-control" name ="email" value = "{{ $instruSena-> email}}"> </td>
                </tr>
                <tr>
                <th colspan="2" scope="col">Programa</th>
                <td colspan="2">
                     <select name ="program_id" id="program_id">
                            <option  value = "{{ $instruSena-> program_id}}"> {{$program['name']}}</option>
                    </select>
                </td>
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